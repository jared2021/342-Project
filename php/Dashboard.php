<?php
  $saveIndexValue = null;
  $overDue = false;
  $shownData;

  $serial = "685MPD2";
  $type = "Desktop";
  $first = "Tameka";
  $last = "Ardrey";
  $room = "2124";

  $overDueArray = array(
    array("685MPD2", "Desktop" ,"Ardrey, Tameka","2124", 10),
    array("2ZFLDW2", "Desktop" ,"Barrera, Javier","2127", 6),
    array("2ZFKDW2", "Desktop" ,"Blackmon Sha'Kema","2127", 3),
    array("2ZFPDW2", "Desktop" ,"Booker, Sharice","2127", 2),
    array("2ZFNDW2", "Desktop" ,"Brown, Diondria","2127", 1)
  );

  $assets = array (
    array("685MPD2", "Desktop" ,"Ardrey, Tameka","2124"),
    array("2ZFLDW2", "Desktop" ,"Barrera, Javier","2127"),
    array("2ZFKDW2", "Desktop" ,"Blackmon Sha'Kema","2127"),
    array("2ZFPDW2", "Desktop" ,"Booker, Sharice","2127"),
    array("2ZFNDW2", "Desktop" ,"Brown, Diondria","2127"),
    array("7YBG9N2", "Laptop" ,"Carr, Kari","3108E"),
    array("89QMLH2", "Laptop" ,"Cassity, Erin","3138"),
    array("JXZZLH2", "Laptop" ,"Clemons, Ashley ","Mobile"),
    array("dH3YYRQ2", "Desktop" ,"Coomer, Nickie","3141"),
    array("7YCG9N2", "Laptop" ,"Cruz, Karina","3143"),
    array("6TSZS32", "Laptop" ,"Etienne, Les","Mobile"),
    array("7YBG9N2", "Laptop" ,"Carr, Kari","3108E"),
    array("89QMLH2", "Laptop" ,"Cassity, Erin","3138"),
    array("JXZZLH2", "Laptop" ,"Clemons, Ashley ","Mobile"),
    array("dH3YYRQ2", "Desktop" ,"Coomer, Nickie","3141"),
    array("7YCG9N2", "Laptop" ,"Cruz, Karina","3143"),
    array("6TSZS32", "Laptop" ,"Etienne, Les","Mobile")
  );

  if (isset($_POST['enter'])){
    $saveIndexValue = $_POST['enter'];

    array_splice($overDueArray, $saveIndexValue, 1);
  };

  if (isset($_POST['switch'])){
    $switchOption = $_POST['switch'];
    if($switchOption === "overDue"){
      $overDue = true;
    }
  };
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/Dashboard.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Assets Dashboard</title>
  </head>
  <body>
    <?php include 'Navbar.php' ?>

    <div class="container mt-5" style="height: 100%;">
      <div class="btn-group mb-3 d-flex flex-row justify-content-center" role="group" >
        <form action="Dashboard.php" method="post">
          <div class="input-group-prepend" id="button-addon3">
            <button type="submit" class="btn btn-light switch-button border" name='switch' value="all">All Assets</button>
            <button type="submit" class="btn btn-light switch-button border" name="switch" value="overDue">Overdue Assets</button>
          </div>
        </form>
      </div>

      <div class="input-group pr-4">
        <input type="text" class="form-control test" placeholder="Search..." id="search-input">
      </div>

      <div class="table-container mt-3">
        <table class="table table-sm border mt-2">
          <thead class="thead-dark">
            <tr>
              <th scope="col" class='text-center'>#</th>
              <th scope="col" class='text-center'>Serial Number</th>
              <th scope="col" class='text-center'>Type</th>
              <th scope="col" class='text-center'>User</th>
              <th scope="col" class='text-center'>Room</th>

            <?php
              if($overDue){
                print "
                        <th scope='col' class='text-center'>Days Overdue</th>
                        <th scope='col' class='text-center'></th>
                      </tr>
                    </thead>
                   <tbody id=\"myTable\">";
                foreach ($overDueArray as $arrayKey => $array) {
                  print "<tr>";
                  $index = $arrayKey + 1;
                  print "<td class='text-center table-item'>$index</td>";
                  foreach($array as $itemKey => $value){
                    print "<td class='text-center table-item'>$value</td>";
                  }
                  print "<td><button type='button' class='btn btn-primary' onclick='saveIndexFunction($arrayKey)' data-toggle='modal' data-target='#overDueModal'>Check In</button></td>";
                  print "</tr>";
                }
              }else {
                print "
                        <th scope='col' class='text-center'></th>
                      </tr>
                    </thead>
                   <tbody id=\"myTable\">";
                foreach ($assets as $arrayKey => $array) {
                  print "<tr>";
                  $index = $arrayKey + 1;
                  print "<td class='text-center table-item'>$index</td>";
                  foreach($array as $itemKey => $value){
                    print "<td class='text-center table-item'>$value</td>";
                  }
                  print "<td><button type='button' class='btn btn-primary' onclick='saveIndexFunction($arrayKey)' data-toggle='modal' data-target='#AssetModal'>Edit</button></td>";
                  print "</tr>";
                }
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>


    <!-- OverDue Modal -->
      <div class="modal fade" id="overDueModal" tabindex="-1" role="dialog" aria-labelledby="overDueModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="overDue-Modal">Check In Asset</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to check in this asset?</p>
            </div>
            <div class="modal-footer">
              <form action="Dashboard.php" method="post">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="enterButton" name="enter">Check In</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Asset Modal -->
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
                      <input type="text" class="form-control" id="serial" placeholder="serial" value="<?php print $serial?>">
                    </div>
                    <div class="col">
                      <label>Device Type</label>
                      <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Category</option>
                          <option>Camera</option>
                          <option selected>Desktop</option>
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
                      <input type="text" class="form-control" id="first" placeholder="User" value="<?php print $first?>">
                    </div>
                    <div class="col">
                      <label>Last Name</label>
                      <input type="text" class="form-control" id="last" placeholder="Room" value="<?php print $last?>">
                    </div>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col">
                      <label class="pb-n3">First Name</label>
                      <input type="text" class="form-control mt-2" id="room" placeholder="Room" value="<?php print $room?>">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/Dashboard.js"></script>
  </body>
</html>
