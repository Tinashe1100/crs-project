<x-app-layout>
    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4>Registered Users</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Toggle Role</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->id }} </td>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td>
                                    <div class="badge badge-danger"> {{ $user->role }} </div>
                                </td>
                                <td>
                                    <form action="{{ route('delete-user', [$user->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>


            </div>
            <div class="card-footer">
                <a href="{{ route('add-user') }}" class="btn btn-primary">Add Users</a>
                {{-- <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
</x-app-layout>
