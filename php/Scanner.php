<?php
  session_start();
  if (!isset($_SESSION['uID'])){
    header('Location:./Login.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/Scanner.css">
        <title>Scan Assets</title>
    </head>
    <body>
        <?php include 'Navbar.php' ?>
        <video autoplay></video>
        <div class="controls">
            <button class="scan btn btn-success" type="button" name="button" data-toggle="modal" data-target="#AssetModal">Scan Asset</button>
        </div>
        <div class="container w-100 cd-flex flex-column justify-content-center ">
            <div class="alert alert-warning text-center m-5 rounded">
                <h2>We can't find your camera</h2>
                <hr>
                <h4>
                    Check to make sure it is connected and installed properly and
                    that it isn't being blocked by anti-virus software, and that
                    your camera drivers are up to date.
                </h4>
            </div>
        </div>

        <div class="modal fade" id="AssetModal" tabindex="-1" role="dialog" aria-labelledby="AssetModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="overDue-Modal">Edit Asset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group mx-3 mt-3">
                    <div class="form-row">
                      <div class="col">
                        <label>Serial Number</label>
                        <input type="text" class="form-control" id="serial" placeholder="Serial">
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
                    <div class="form-row mt-2">
                      <div class="col">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="first" placeholder="User">
                      </div>
                      <div class="col">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="last" placeholder="Room">
                      </div>
                    </div>
                    <div class="form-row mt-2">
                      <div class="col">
                        <label class="pb-n3">Room</label>
                        <input type="text" class="form-control mt-2" id="room" placeholder="Room">
                      </div>
                    </div>

                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <form action="Dashboard.php" method="post">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="enterButton">Save Edit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="../js/Scanner.js"></script>
    </body>
</html>
