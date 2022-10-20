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
    /*
    @author mdbootstrap.com
     */
    <form action="/Login/loginprocess.php">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" placeholder="Enter your email here..."/>
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="hidden" id="form2Example2" class="form-control" placeholder="Enter your password here..."/>
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4"><input type="submit" value="error"> Sign in</button>

    </form>
    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="/Login/register.php">Register</a></p>
        <p>or sign up with:</p>
        </button>
    </div>
</body>

</html>