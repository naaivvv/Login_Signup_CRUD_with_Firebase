<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Firebase</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
    <div class="mt-4" >
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex justify-content-center">
                    <form method="post" action="login_action.php">
                        <h2>LOGIN FORM</h2><br>
                        Email<br>
                        <input type="text" name="email" class="form-control"><br>
                        Password<br>
                        <input type="password" name="password" class="form-control"><br>
                        <input type="submit" value="LOGIN" class="btn btn-dark"><br><br>
                        Don't have an account yet? <a href="signup.php">Sign up</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>