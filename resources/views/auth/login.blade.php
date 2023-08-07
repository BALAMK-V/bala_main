<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<header class="bg-dark text-white py-3">
<div class="container">
    <nav>
        <a href="/" class="btn btn-light">Home</a>
        <a href='/register' class="btn btn-primary btn-sm float-end">Sign Up</a>
    </nav>
</div>
</header>
<body>
    @if ($errors->any())
    <ul class="alert alert-danger">
        {!! implode('',$errors->all('<li class="list-group-item bg-danger">:message</li>')) !!}
    </ul>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="m-0">Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/authenticate">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                                @csrf
                                <a href="/" class="btn btn-secondary">Cancel</a>
                                <label for="text" class="row justify-content-center">Create new account</label>
                                <a href="/register" class="row justify-content-center">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Place it before the closing </body> tag) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
