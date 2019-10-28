<?php
  session_start();
  if (!isset($_SESSION['uID'])){
    header('Location:./Login.php');
  }
  require_once "dbConnect.php";

  $allAssets = "SELECT * FROM ActiveAssets";
  $allAssets = $DB->Execute($allAssets);

  $overDueAssetsSql = "SELECT *, (datediff(Now(), CheckDate) - 60 ) as DaysOverDue  FROM ActiveAssets where (datediff(NOW(), CheckDate) >= 60)";
  $overDueAssets = $DB->Execute($overDueAssetsSql);

  $deviceTypes = "SELECT DeviceType From Category";
  $deviceTypes = $DB->Execute($deviceTypes);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Dashboard.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <title>Assets Dashboard</title>
  </head>
  <body>
    <?php include 'Navbar.php';?>

    <div class="mx-4 mt-5" style="height: 100%;">
      <div class="btn-group mb-3 d-flex flex-row justify-content-center" role="group" >
          <div class="input-group-prepend btn-group" id="button-addon3">
            <button class="btn btn-light switch-button border" name='switch' id="allButton">All Assets</button>
            <button class="btn btn-light switch-button border" name="switch" id="overButton">Overdue Assets</button>
          </div>
      </div>

      <!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." id="search-input">
        <select class="custom-select" id="inputGroupSelect04">
          <option selected value="serial">Serial</option>
          <option value="username">Username</option>
          <option value="room">Room</option>
          <option value="days">Days Late</option>
          <option value="days">Type</option>
        </select>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Search</button>
        </div>
      </div> -->

      <div class="table-container allAssets">
        <table id="allAssetsTable" class="table table-hover table-sm border mt-2">
          <thead class="thead-dark">
            <tr id="all">
              <th scope="col" class='text-center'>First Name</th>
              <th scope="col" class='text-center'>Last Name</th>
              <th scope="col" class='text-center'>Device Type</th>
              <th scope="col" class='text-center'>Manufacturer</th>
              <th scope="col" class='text-center'>Model</th>
              <th scope="col" class='text-center'>Serial Number</th>
              <th scope="col" class='text-center'>Building</th>
              <th scope="col" class='text-center'>Room</th>
              <th scope="col" class='text-center'>Network</th>
              <th scope="col" class='text-center'>Purchase Date</th>
              <th scope="col" class='text-center'>Warranty Date</th>
              <th scope="col" class='text-center'></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($allAssets as $asset) {
                print "<tr>
                <td class='text-center'>".$asset['FirstName']."</td>
                <td class='text-center'>".$asset['LastName']."</td>
                <td class='text-center'>".$asset['DeviceType']."</td>
                <td class='text-center'>".$asset['ManName']."</td>
                <td class='text-center'>".$asset['ModelName']."</td>
                <td class='text-center'>".$asset['SerialNum']."</td>
                <td class='text-center'>".$asset['Building']."</td>
                <td class='text-center'>".$asset['RoomNum']."</td>
                <td class='text-center'>".$asset['NetworkName']."</td>
                <td class='text-center'>".$asset['PurchaseDate']."</td>
                <td class='text-center'>".$asset['WarrantyDate']."</td>
                <td><button value = '".$asset['AID']."' class='btn btn-primary' id='editButton' data-toggle='modal' data-target='#AssetModal' onclick='retrieveAssetById(this.value)'><img src='../Assets/edit-icon-18-24.png' height='15' width='15'></button></td>
                </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="table-container overDueAssets" style="display: none;">
        <table id="overDueAssetsTable" class="table table-hover table-sm border mt-2">
          <thead class="thead-dark">
            <tr id="over">
              <th scope="col" class='text-center'>First Name</th>
              <th scope="col" class='text-center'>Last Name</th>
              <th scope="col" class='text-center'>Device Type</th>
              <th scope="col" class='text-center'>Manufacturer</th>
              <th scope="col" class='text-center'>Model</th>
              <th scope="col" class='text-center'>Serial Number</th>
              <th scope="col" class='text-center'>Building</th>
              <th scope="col" class='text-center'>Room</th>
              <th scope="col" class='text-center'>Network</th>
              <th scope="col" class='text-center'>Days Over Due</th>
              <th scope="col" class='text-center'></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($overDueAssets as $asset) {
                print "<tr>
                <td class='text-center'>".$asset['FirstName']."</td>
                <td class='text-center'>".$asset['LastName']."</td>
                <td class='text-center'>".$asset['DeviceType']."</td>
                <td class='text-center'>".$asset['ManName']."</td>
                <td class='text-center'>".$asset['ModelName']."</td>
                <td class='text-center'>".$asset['SerialNum']."</td>
                <td class='text-center'>".$asset['Building']."</td>
                <td class='text-center'>".$asset['RoomNum']."</td>
                <td class='text-center'>".$asset['NetworkName']."</td>
                <td class='text-center'>".$asset['DaysOverDue']."</td>
                <td><button value = '".$asset['SerialNum']."' class='btn btn-primary' id='editButton' data-toggle='modal' data-target='#overDueModal' onclick='overAssetFunction(this.value)'><img src='../Assets/check-mark-24.png' height='15' width='15'></button></td>
                </tr>";
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
              <p>Are you sure you want to check in the asset with Serial Number <span id="assetSerial"></span>?</p>
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
            <div class="modal-body" id="AID">
              <form class="editAssetForm">
                <div class="form-group mx-3 mt-3">
                  <div class="form-row">
                    <div class="col" >
                      <label>First Name</label>
                      <input type="text" class="form-control" id="first-name" placeholder="First Name">
                    </div>
                    <div class="col">
                      <label>Last Name</label>
                      <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-row mt-3">
                    <div class="col">
                      <label>Serial Number</label>
                      <input type="text" class="form-control" id="serial-num" placeholder="Serial">
                    </div>
                    <div class="col">
                      <label>Device Type</label>
                      <div class="form-group">
                        <select class="form-control" id="deviceSelect">
                          <option>Category</option>
                          <?php
                            foreach ($deviceTypes as $types) {
                              print "<option id='".$types['DeviceType']."'>".$types['DeviceType']."</option>";
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-row mt-1">
                    <div class="col">
                      <label>Building</label>
                      <input type="text" class="form-control" id="building" placeholder="Building">
                    </div>
                    <div class="col">
                      <label>Room</label>
                      <input type="text" class="form-control" id="room" placeholder="Room #">
                    </div>
                  </div>
                  <div class="form-row mt-3">
                    <div class="col">
                      <label>Manufacturer</label>
                      <input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer">
                    </div>
                    <div class="col">
                      <label>Model</label>
                      <input type="text" class="form-control" id="model" placeholder="Model">
                    </div>
                  </div>
                  <div class="form-row mt-3">
                    <div class="col">
                      <label>Network</label>
                      <input type="text" class="form-control" id="network" placeholder="Network">
                    </div>
                  </div>
                  <div class="form-row mt-3">
                    <div class="col">
                      <label>Purchase Date</label>
                      <input type="date" class="form-control" id="purchase-date">
                    </div>
                    <div class="col">
                      <label>Warranty Date</label>
                      <input type="date" class="form-control" id="warranty-date">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <form action="Dashboard.php" method="post">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="enterButton" onclick="submitData()">Save Edit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/Dashboard.js"></script>
  </body>
</html>
