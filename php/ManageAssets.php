<?php
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

    <title>Manage Assets</title>
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
            <div class="container bg-light border">
               <h1 class="pt-3">Deactivate Asset(s) </h1>
                <div class="input-group">
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
                </div>
                <div class="table-container">
                    <table class="table table-sm border mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class='text-center'>#</th>
                                <th scope="col" class='text-center'>Serial Number</th>
                                <th scope="col" class='text-center'>Type</th>
                                <th scope="col" class='text-center'>User</th>
                                <th scope="col" class='text-center'>Room</th>
                                <th scope='col' class='text-center'></th>
                            </tr>
                        </thead>

                        <?php
                            foreach ($assets as $arrayKey => $array) {
                              print "<tr>";
                              $index = $arrayKey + 1;
                              print "<td class='text-center table-item'>$index</td>";
                              foreach($array as $itemKey => $value){
                                print "<td class='text-center table-item'>$value</td>";
                              }
                              print "<td><button type='button' class='btn btn-primary' onclick='saveIndexFunction($arrayKey)' data-toggle='modal' data-target='#deactivateAsset'>Deactivate</button></td>";
                              print "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- OverDue Modal -->
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
                    <p>Are you sure you want to deactivate this asset?</p>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/ManageAssets.js"></script>
  </body>
</html>
