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
            <h1>Add New Assets(s)</h1>

            <h4>Select Device</h4>
            <select class="form-control" name="">
                <option value="" selected disabled hidden>Category</option>
                <option value="">Desktop</option>
                <option value="">Laptop</option>
                <option value="">Tablet</option>
                <option value="">Printer</option>
                <option value="">Video Conferencing</option>
            </select>
            <select class="form-control" name="">
                <option value="" selected disabled hidden>Manufacturer</option>
                <option value="">Apple</option>
                <option value="">Dell</option>
                <option value="">HP</option>
                <option value="">Canon</option>
                <option value="">Tandberg</option>
                <option value="">Logitech</option>
            </select>
            <select class="form-control" name="" disabled>
                <option value="" selected disabled hidden>Model</option>
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

            <h4>Input Serial Number</h4>
            <input type="text" class="form-control" name="" placeholder="Serial Number">
            <button type="button" class="btn btn-success">Add Asset</button>
        </div>

        <div class="deactivate-assets">
            <!-- TODO: Add Deactivate Assets menu here -->
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
