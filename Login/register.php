<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add Customer record to the database.</p>
                    <form action="../Login/registerprocess.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <textarea name="email" class="form-control <?php echo (!empty($phoneNum_err)) ? 'is-invalid' : ''; ?>"><?php echo $email; ?></textarea>
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <textarea name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"><?php echo $password; ?></textarea>
                            <span class="invalid-feedback"><?php echo $password_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <textarea name="country" class="form-control <?php echo (!empty($country_err)) ? 'is-invalid' : ''; ?>"><?php echo $country; ?></textarea>
                            <span class="invalid-feedback"><?php echo $country_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <textarea name="city" class="form-control <?php echo (!empty($city_err)) ? 'is-invalid' : ''; ?>"><?php echo $city; ?></textarea>
                            <span class="invalid-feedback"><?php echo $city_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <textarea name="cnumber" class="form-control <?php echo (!empty($cnumber_err)) ? 'is-invalid' : ''; ?>"><?php echo $cnumber; ?></textarea>
                            <span class="invalid-feedback"><?php echo $cnumber_err;?></span>
                        </div>







                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>