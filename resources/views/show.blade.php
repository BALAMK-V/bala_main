<!DOCTYPE html>
<html>

<head>
    <title>Show Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<header class="bg-dark text-white py-3">
<div class="container">
    <nav class="">
        <a href="/" class="btn btn-light">Home</a>
        <a href='/logout' class="btn btn-primary float-end py-0">Log Out</a>
    </nav>
</div>
</header>
<body>
    <div class="container mt-5">
        <a href="{{ route('udata.index') }}" class="btn btn-success btn-sm">Back</a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4">User Details</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Name:</strong>
                            </div>
                            <div class="col-md-9" class="form-control">
                                {{$userData->name}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Email:</strong>
                            </div>
                            <div class="col-md-9" class="form-control">
                                {{$userData->email}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Gender:</strong>
                            </div>
                            <div class="col-md-9" class="form-control">
                                {{$userData->gender == "M" ? 'Male' : 'Female'}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Phone:</strong>
                            </div>
                            <div class="col-md-9" class="form-control">
                                {{$userData->phone}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Place it before the closing </body> tag) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>