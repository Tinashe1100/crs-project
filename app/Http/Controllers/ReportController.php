<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

use function PHPSTORM_META\type;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // join reports and users table utilizing the foreign ids 
        $cases = DB::table('reports')
            ->leftJoin('users', 'reports.investigator', '=', 'users.id')
            ->select('users.*', 'reports.*')
            ->get()
            ->merge(
                DB::table('users')
                    ->leftJoin('reports', 'users.id', '=', 'reports.investigator')
                    ->where('reports.investigator', 'like', 'users.id')
                    ->get()
            );


        // cases authenticated investigator can see
        $investigatorCases = DB::table('reports')
            ->where('investigator', Auth::user()->id)
            ->get();

        return view('dashboard.reports', [
            'cases' => $cases,
            'investigatorCases' => $investigatorCases,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report', [
            'email' => request()->session()->get('email'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'type' => 'required',
            'corruption_date' => 'required',
            'location' => 'required',
            'reporter' => 'required',
            'details' => 'required',
            'evidence' => ['required', File::types(['mp3', 'jpg', 'png', 'doc', 'pdf',])]
        ]);

        if (request()->hasFile('evidence')) {
            $data['evidence'] = request()->file('evidence')->store('evidence', 'public');
        }

        if (Report::create($data)) {
            return redirect('/')->with('message', 'Your case has been submitted');
        } else {
            echo "error";
        }
    }

    /**
     * Download reported case evidence
     */
    public function download(Report $report)
    {

        // get file name
        $fileName = $report->evidence;
        // get storage path - downloaded files are stored in the app's storage path
        $path = storage_path('app/public/' . $fileName);
        // check for file
        if (file_exists($path)) {
            // download evidence
            return response()->download($path);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {

        $statuses = Status::all();
        $investigators = DB::table('users')->where('role', 'investigator')->get();

        return view('dashboard.report-details', [
            'case' => $report,
            'statuses' => $statuses,
            'investigators' => $investigators
        ]);
    }

    /**
     * Reported Case Status Update
     */
    public function statusUpdate(Report $report, Request $request)
    {

        $request->validate([
            'status' => ['required',]
        ]);

        $report->update([
            'investigator' => Auth::user()->id,
            'status' => $request->status,
        ]);

        return redirect()->route('cases');
    }
    /**
     * Reported Case investigation
     */
    public function investigation(Report $report, Request $request)
    {
        $request->validate([
            'status' => ['required',],
            'investigator' => ['required', 'numeric'],
        ]);


        $report->update([
            'investigator' => $request->investigator,
            'status' => $request->status,
        ]);

        return redirect()->route('cases');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $report->destroy($report->id);
        return redirect()->route('cases');
    }
}
