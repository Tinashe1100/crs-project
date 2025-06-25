<x-app-layout>
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Case: {{ $case->type }} </h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="70"
                                src="assets/img/users/user-1.png">
                            <div class="media-body">
                                <div class="media-right">
                                    <div class="text-primary">Approved</div>
                                </div>
                                <div class="media-title mb-1">{{ $case->location }}</div>
                                <div class="text-time"> {{ $case->corruption_date }} </div>
                                <div class="media-description tw-text-gray-900 tw-text-lg">{{ $case['details'] }}</div>
                                <div class="media-links">

                                    @if (Auth::user()->role == 'admin')
                                        <div class="bullet"></div>
                                        <a href="{{ route('case.drop', $case->id) }}"
                                            class="btn btn-outline-danger tw-rounded-full">Delete case</a>
                                    @endif
                                </div>
                            </div>
                        </li>


                        @if (Auth::user()->role == 'admin')
                            <li>
                                <form action="{{ route('investigator.status.update', $case->id) }}" method="POST"
                                    class="tw-flex-col tw-space-y-3 tw-space-x-3">
                                    @csrf

                                    <div class="tw-flex tw-justify-between tw-space-x-3">
                                        <select name="investigator" id="status" class="form-control">
                                            <option value="">Assign Case to Investigator</option>
                                            @foreach ($investigators as $investigator)
                                                <option value="{{ $investigator->id }}">{{ $investigator->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <select name="status" id="status" class="form-control">
                                            <option value="">Update Report Status</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->name }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="tw-flex tw-justify-between space-x-3">
                                        @error('investigator')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                        @error('status')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <div class="tw-flex tw-w-full">
                                        <button type="submit" class="btn btn-primary ms-3">Assign & Update</button>
                                    </div>
                                </form>
                            </li>
                        @else
                            <li>
                                <form action="{{ route('status.update', $case->id) }}" method="POST"
                                    class="tw-flex-col tw-space-y-3 tw-space-x-3">
                                    @csrf

                                    <div class="tw-flex-col tw-justify-between tw-space-x-3">

                                        <select name="status" id="status" class="form-control">
                                            <option value="">Update Report Status</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->name }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('status')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <div class="tw-flex tw-w-full">
                                        <button type="submit" class="btn btn-primary ms-3">Update</button>
                                    </div>
                                </form>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-header">
                    <h4>Uploaded Evidence</h4>
                </div>

                <div class="tw-flex tw-justify-around card-body">
                    <img src="{{ asset('assets/img/image-64.png') }}" alt="">
                    <div class="span tw-w-3/5">{{ $case->evidence }}</div>
                </div>
                <div class="card-footer tw-flex tw-items-center tw-justify-between">
                    <a href="{{ route('evidence.download', ['report' => $case->id]) }}"
                        class="btn btn-primary">Download
                        Files</a>
                    <span class="text-muted">Uploaded: {{ $case->corruption_date }}</span>
                </div>
            </div>
        </div>

    </div>

    {{-- <img src="{{ asset('storage/' . $case->evidence) }}" alt="image"> --}}

</x-app-layout>
