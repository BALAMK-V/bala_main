<!DOCTYPE html>
<html>

<head>
    <title>List Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <nav>
                <a href="/" class="btn btn-light">Home</a>
                <a href="{{route('udata.create')}}" class="btn btn-success btn-sm">Create User</a>
                <a href='/logout' class="btn btn-primary btn-sm float-end">Log Out</a>
            </nav>
        </div>
    </header>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center table-responsive">
            <div class="col-md-12">
                <strong>Data List</strong>
                @csrf
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userData as $key => $udata)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$udata->name}}</td>
                            <td>{{$udata->email}}</td>
                            <td>{{$udata->gender == "M" ? 'Male' : 'Female'}}</td>
                            <td>{{$udata->phone}}</td>
                            <td>{{$udata->course}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('udata.show',$udata->id)}}" class="btn btn-primary btn-xs py-0 mx-1">Show</a>
                                    <a href="{{route('udata.edit',$udata->id)}}" class="btn btn-warning btn-xs py-0 mx-1">Edit</a>
                                    <form action="{{route('udata.destroy',$udata->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Place it before the closing </body> tag) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>