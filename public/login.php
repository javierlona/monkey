<?php
  require_once('./../private/initialize.php');

  $errorLogin = '';
  $username = '';
  $password = '';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Using one variable ensures that msg is the same
    // Security through obscurity
    $login_failure_msg = '<div class="alert alert-danger">Incorrect Username or Password.</div>';

    $admin = find_admin_by_username($username);

    // If you get back a record
    if($admin) {

      if(password_verify($password, $admin['hashed_password'])) {
        // password matches
        log_in_admin($admin);
        header("Location: ./clients");
      } else {
        // username found, but password does not match
        $errorLogin = $login_failure_msg;
      }
    } else {
      // no username found
      $errorLogin = $login_failure_msg;
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sign In to the Jungle</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
  </head>

  <body class="text-center login-screen">
    <div class="card">
      <div class="card-body">
        <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <img class="mb-4" src="./images/Logo.png" title="Monkedia Logo" alt="Monkedia Logo" width="300" height="72">
          <?php echo (isset($errorLogin)) ? $errorLogin : ''; ?>
          <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
          <label for="inputUsername" class="sr-only">Username</label>
          <input type="text" name="username" id="inputusername" class="form-control" placeholder="Username" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg main-colors btn-block" type="submit">Log In</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
        </form>
      </div>
    </div>
  </body>
</html>
