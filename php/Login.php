<?php
  $username = filter_input(INPUT_POST, 'username');
  $password = filter_input(INPUT_POST, 'password');
  if($password && $username){
    header ("Location:../index.php") ;
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
  <body
    <div class="container d-flex align-items-center justify-content-center" style="height:100vh; width: 100vw">
      <div class="jumbotron">
        <h1 class="text-center">Login</h1>
        <form name="registrationForm" action="Login.php" class="pt-2" method="post">
          <div class="form-group">
            <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="submit" class="btn btn-danger" value="Login"/>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
