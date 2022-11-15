<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Page</title>
</head>

<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Customer Login</h2>
                    <p>Please fill this form and submit to Login to the application.</p>
                    <!-- Login Form -->
                    <form action="loginprocess.php" method="POST">

                        <!-- Email field -->
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" placeholder="Enter email..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        <!-- Password field -->
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" class="form-control" type="password" placeholder="Enter password..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        <!-- Submit & cancel buttons -->
                        <input type="submit" class="btn btn-primary" value="Submit" name="login">
                        <!-- Redirects to register page -->
                        <a href="register.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>