<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container text-center">
            <h1>Welcome to the Home</h1>
            <nav class="mt-3">
                <a href='/login' class="btn btn-light">Log In</a>
                <a href="/register" class="btn btn-light">Sign Up</a>
            </nav>
        </div>
    </header>

    <main class="container mt-5">
        <div class="">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <h2 class="m-0">Content:</h2>
                    </div>
                    <div class="card-body">
                        <!-- Add student data here -->
                        <p class="card-text">In the website's user management system, there are distinct sections that facilitate seamless account administration. Upon clicking the "Register" button, users are directed to the registration page, where they are prompted to input the administrator's email address and password. Subsequently, upon submission, the page seamlessly transitions to the "User List" section. Additionally, users can opt to "Sign Up" to create a new admin account, initiating the registration process anew.

Within the "User List" page, an option labelled "Create User" resides in the top navigation bar. Selecting this option triggers the appearance of a user registration page, where individuals can input their desired values. Once submitted, these values are incorporated into the existing user list. The list itself encompasses a trio of functional choices: "Show," "Edit," and "Delete." These functions collectively enable comprehensive CRUD (Create, Read, Update, Delete) operations, fostering efficient user account management and facilitating streamlined interaction with the system.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <!-- Bootstrap JS (Place it before the closing </body> tag) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
