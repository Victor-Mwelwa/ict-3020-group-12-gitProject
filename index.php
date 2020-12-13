<?php


$username = "";
$password ="";
$email = "";
$course = "";
$computerNumber = "";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <title>UNZA TAR REGISTRATION</title>

  </head>
  <body>

      <div class="wrapper">

          <h3> WELCOME TO UNZA TAR </h3>
          <p>please register below for an online tutorial register<br>
          </p>
            <h4>Sign Up</h4>

            <form action="insert.php" method="POST">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">

                </div>


                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">

                </div>


                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">

                </div>

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>course</label>
                    <input type="text" name="course" class="form-control" value="<?php echo $course; ?>">

                </div>

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>computerNumber</label>
                    <input type="text" name="computerNumber" class="form-control" value="<?php echo $computerNumber; ?>">

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit">
                  <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>

  </body>
</html>
