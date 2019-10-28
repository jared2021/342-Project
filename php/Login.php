<?php
  session_start();

  unset($_SESSION['uID']);
  require_once "dbConnect.php";

  $error = "";
  $userNameCheck = "";
  $username = "";
  $password = "";

  if (isset($_POST['enter'])) {
    $username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
    $password = trim($_POST['password']);

    $sql = "SELECT AID, UserName, Password FROM AdminAccount where UserName = "."'".$username."'";
    $result = $DB->Execute($sql);

    foreach ($result as $user) {
      $userNameCheck = $user['UserName'];
      if($user['UserName']){
        $hash = $user['Password'];
        if(password_verify($password, $hash)){
          $_SESSION['uID'] = $user['AID'];
          header("Location: Dashboard.php");
        }else {
          $error = 'Invalid password';
        }
      }
    }
    if(!$userNameCheck){
      $error = "User Not Found";
    }
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/Login.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container d-flex align-items-center justify-content-center" style="height:100vh; width: 100vw">
      <div class="jumbotron shadow-lg">
        <h1 class="text-center">Login</h1>
        <form name="registrationForm" action="Login.php" class="pt-2" method="post">
          <div class="form-group">
            <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" <?php print "value = '".$username."'"?>" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="submit" class="btn btn-danger" value="Login" name="enter"/>
            </div>
          </div>
          <?php

            if($error){
              print "
              <div class='form-group'>
                <div class='alert alert-danger text-center' role='alert'>
                  $error
                </div>
              </div>
              ";
            }
          ?>
        </form>
      </div>
    </div>
  </body>
</html>
