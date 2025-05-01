<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

use function PHPSTORM_META\type;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report');
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
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
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
        //
    }
}
