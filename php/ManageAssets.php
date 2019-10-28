<?php
  session_start();
  if (!isset($_SESSION['uID'])){
    header('Location:./Login.php');
  }

  require_once "dbConnect.php";

  $allAssetSql = " SELECT AID, Faculty.FirstName, Faculty.LastName, Category.DeviceType , Manufacturer.ManName, Model.ModelName, SerialNum, Location.Building, Location.RoomNum, Network.NetworkName, PurchaseDate, WarrantyDate FROM Assets
    INNER JOIN Category ON Assets.CatID = Category.CatID
    INNER JOIN Manufacturer ON Assets.ManID = Manufacturer.ManID
    INNER JOIN Model ON Assets.ModID = Model.ModID
    INNER JOIN Faculty ON Assets.UserID = Faculty.FID
    INNER JOIN Location ON Assets.LocID = Location.LID
    INNER JOIN Network ON Assets.NetID = Network.NID
    WHERE Active = 1;
  ";
  $allAssets = $DB->Execute($allAssetSql);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ManageAssets.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <title>Manage Assets</title>
    <script>
      $(document).ready(function() {
        /// Creates table look
        $('#deactivateAssetsTable').DataTable();
      });
    </script>
  </head>
  <body>
    <?php include './Navbar.php'?>

    <div class="container cd-flex flex-column justify-content-center text-center">
        <div class="btn-group rounded mt-5" role="group" aria-label="Toggle Add/Deactivate Assets">
          <button type="button" class="btn border btn-light shadow-none" onclick="togglePage(0)">Add New Asset</button>

          <button type="button" class="btn border btn-light shadow-none" onclick="togglePage(1)">Deactivate Asset</button>
        </div>

        <div class="add-new-assets p-5 border bg-light mt-4">
            <h1>Add New Asset(s)</h1>

            <div class="form-row">
                <div class="col">
                    <select class="form-control" name="">
                        <option value="" selected disabled hidden>Category</option>
                        <option value="">Desktop</option>
                        <option value="">Laptop</option>
                        <option value="">Tablet</option>
                        <option value="">Printer</option>
                        <option value="">Video Conferencing</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" name="">
                        <option value="" selected disabled hidden>Manufacturer</option>
                        <option value="">Apple</option>
                        <option value="">Dell</option>
                        <option value="">HP</option>
                        <option value="">Canon</option>
                        <option value="">Tandberg</option>
                        <option value="">Logitech</option>
                    </select>
                </div>
            </div>

            <select class="form-control mt-n3" name="">
                <option value="">Model</option>
                <option value="">Optiplex 5040</option>
                <option value="">Optiplex 5050</option>
                <option value="">Optiplex 7020</option>
                <option value="">XPS 13</option>
                <option value="">Latitude 7450</option>
                <option value="">Latitude 7250</option>
                <option value="">iMac</option>
                <option value="">MacAir</option>
                <option value="">MacPro</option>
                <option value="">MacBook</option>
            </select>

            <div class="form-row pt-3">
                <div class="col">
                    <input type="text" class="form-control" name="" placeholder="Serial Number">
                </div>
                <div class="col">
                    <select class="form-control" name="">
                        <option value="">User</option>
                        <option value="">Ardrey, Tameka</option>
                        <option value="">Barrera, Javier</option>
                        <option value="">Blackmon Sha'Kema</option>
                        <option value="">Booker, Sharice</option>
                        <option value="">Brown, Diondria</option>
                        <option value="">Carr, Kari</option>
                        <option value="">Cassity, Erin</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-n3">
                <div class="col">
                    <select class="form-control" name="">
                        <option value="">Building</option>
                        <option value="">ES</option>
                        <option value="">IT</option>
                        <option value="">ED</option>
                        <option value="">LE</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="" placeholder="Room Number">
                </div>
                <div class="col">
                    <input type="date" id="datepicker" class="form-control" placeholder="Date">
                </div>
                <div class="col">
                    <input type="text" class="form-control"placeholder="Warranty">
                </div>
            </div>
            <button type="button" class="btn btn-success">Add Asset</button>
            <hr/>
        </div>

        <div class="deactivate-assets mt-4">
          <div class="table-container allAssets">
            <table id="deactivateAssetsTable" class="table table-hover table-sm border mt-2">
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
                    <td><button value = '".$asset['SerialNum']."' class='btn btn-danger' id='editButton' data-toggle='modal' data-target='#deactivateAsset' onclick='deactivateAssetFunction(this.value)'><img src='../Assets/x-mark-24.png' height='15' width='15'></button></td>
                    </tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>

    <!-- Deactivat Modal -->
    <div class="modal fade" id="deactivateAsset" tabindex="-1" role="dialog" aria-labelledby="overDueModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="overDue-Modal">Check In Asset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to deactivate the asset with Serial Number <span id="assetSerial"></span>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="enterButton" name="enter">Deactivate</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/ManageAssets.js"></script>
  </body>
</html>
