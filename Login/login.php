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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add Customer record to the database.</p>
                    <form action="loginprocess.php" method="POST">
                        <div class="form-group">
                            <label>Email</label>
                            <textarea name="email" class="form-control" placeholder="Enter email..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <textarea name="password" class="form-control" placeholder="Enter password..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        //submit buttons
                        <input type="submit" class="btn btn-primary" value="Submit" name="addLogin">
                        <a href="../index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>