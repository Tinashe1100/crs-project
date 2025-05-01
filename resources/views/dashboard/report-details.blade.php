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
                                    <a href="#">View</a>
                                    <div class="bullet"></div>
                                    <a href="#">Edit</a>
                                    <div class="bullet"></div>
                                    <a href="#" class="text-danger">Trash</a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
