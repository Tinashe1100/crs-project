<x-app-layout>

    <section class="container tw-mx-auto">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Corruption Cases</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Case</th>
                                        <th>Reporter</th>
                                        <th>Date</th>
                                        @if (Auth::user()->role === 'admin')
                                            <th>Investigator</th>
                                        @endif
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @if (Auth::user()->role === 'admin')
                                        @foreach ($cases as $case)
                                            <tr>
                                                <td>{{ $case->id }}</td>
                                                <td>{{ $case->corruption_type }}</td>
                                                <td> {{ $case->reporter }} </td>
                                                <td> {{ $case->corruption_date }} </td>
                                                <td> {{ $case->name }} </td>
                                                <td>
                                                    <div class="badge badge-danger tw-shadow"> {{ $case->status }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="case-details/{{ $case->id }}"
                                                        class="btn btn-primary">See Details</a>
                                                <td>
                                            </tr>
                                        @endforeach
                                    @elseif (Auth::user()->role === 'investigator')
                                        @foreach ($investigatorCases as $case)
                                            <tr>
                                                <td>{{ $case->id }}</td>
                                                <td>{{ $case->corruption_type }}</td>
                                                <td> {{ $case->reporter }} </td>
                                                <td> {{ $case->corruption_date }} </td>

                                                <td>
                                                    <div class="badge badge-danger tw-shadow"> {{ $case->status }}
                                                    </div>
                                                </td>
                                                <td><a href="{{ route('case-details', [$case->id]) }}"
                                                        class="btn btn-primary">See Details</a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-app-layout>
