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

    <div class="container">
        <div class="btn-group" role="group" aria-label="Toggle Add/Deactivate Assets">
          <button type="button" class="btn btn-light" onclick="togglePage(0)">Add New Asset</button>

          <button type="button" class="btn btn-light" onclick="togglePage(1)">Deactivate Asset</button>
        </div>

        <div class="add-new-assets">
            <h1>Add New Assets(s)</h1>

            <h4>Select Device</h4>
            <select class="form-control" name="">
                <option value="" selected disabled hidden>Category</option>
            </select>
            <select class="form-control" name="">
                <option value="" selected disabled hidden>Manufacturer</option>
            </select>
            <select class="form-control" name="">
                <option value="" selected disabled hidden>Model</option>
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
