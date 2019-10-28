<?php
  session_start();
  if (!isset($_SESSION['uID'])){
    header('Location:./Login.php');
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Settings.css">

    <title>Settings</title>

  </head>
  <body>
    <?php
        include 'Navbar.php';
	?>

    <div class="container cd-flex flex-column p-5 border bg-light mt-5 w-50">
        <h1>Account Info</h1>
        <hr>
    	<h5>Username: <?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?></h5>
        <button type="button" name="ResetPW" class="btn btn-primary" data-toggle="modal" data-target="#passwordReset">Reset Password</button>
    	<h5>Check assets in:</h5>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Number of Days</span>
          </div>
          <input type="text" class="form-control" placeholder="Default is 60" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        <h4>Add New</h4>
        <hr/>
        <div class="d-flex flex-column">
            <div>
                <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#newModel">Model</button>
                <button class="btn btn-primary mr-3">Facility</button>
                <button class="btn btn-primary">Location</button>
            </div>
            <div>
                <button class="btn btn-primary mr-3">Admin Account</button>
                <button class="btn btn-primary mr-3">Category</button>
                <button class="btn btn-primary">Manufacturer</button>
            </div>
        </div>
        <input type="button" name="save" class="btn btn-block btn-success" value="Save">
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Model</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mx-3 mt-3">
                            <label>Model Name</label>
                            <input type="text" class="form-control" id="serial" placeholder="Name">
                            <div class="form-row mt-3">
                                <div class="col">
                                    <label>Manufacturer</label>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Manufacturer</option>
                                            <option>Camera</option>
                                            <option>Desktop</option>
                                            <option>Laptop</option>
                                            <option>Printer</option>
                                            <option>Tablet</option>
                                            <option>Video Conferencing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Device Type</label>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Category</option>
                                            <option>Camera</option>
                                            <option>Desktop</option>
                                            <option>Laptop</option>
                                            <option>Printer</option>
                                            <option>Tablet</option>
                                            <option>Video Conferencing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="passwordReset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Password Reset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mx-3 mt-3">
                            <div>
                                <label>Old Password</label>
                                <input type="text" class="form-control" id="serial">
                            </div>
                            <div class="mt-3">
                                <label>Confirm Old Password</label>
                                <input type="text" class="form-control" id="serial">
                            </div>
                            <div class="mt-3">
                                <label>New Password</label>
                                <input type="text" class="form-control" id="serial">
                            </div>
                            <div class="mt-3">
                                <label>Confirm New Password</label>
                                <input type="text" class="form-control" id="serial">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
