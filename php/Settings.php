<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Settings.css">

    <title>Manage Assets</title>

  </head>
  <body>
    <?php
        include 'Navbar.php';
	?>

    <div class="container cd-flex flex-column p-5 border bg-light mt-5 w-50">
        <h1>Account Info</h1>
        <hr>
    	<h5>Username:</h5>
    	<input type="button" name="ResetPW" class="btn btn-primary" value="Reset Password">
    	<input type="button" name="AddUser" class="btn btn-primary ml-2" value="Add New User">
    	<h5>Check assets in:</h5>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Number of Days</span>
          </div>
          <input type="text" class="form-control" placeholder="Default is 60" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        <input type="button" name="save" class="btn btn-block btn-success" value="Save">
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
