<?php
include "calendar.php"
$devices = array(
  array("label"=>"Desktop", "y"=>8),
  array("label"=>"Laptop", "y"=>7),
  array("label"=>"Camera", "y"=>3),
  array("label"=>"Printer", "y"=>5),
  array("label"=>"Tablet", "y"=>10),
  array("label"=>"Video Conf.", "y"=>2)
);

$manufacturers = array(
  array("label"=>"Apple", "y"=>10),
  array("label"=>"Canon", "y"=>5),
  array("label"=>"Cisco", "y"=>8),
  array("label"=>"Dell", "y"=>0),
  array("label"=>"HP", "y"=>2),
  array("label"=>"Logitech", "y"=>5),
  array("label"=>"Samsung", "y"=>20),
  array("label"=>"Lenovo", "y"=>7),
  array("label"=>"Microsoft", "y"=>2),
  array("label"=>"Ricoh", "y"=>0)
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
    <link href="../css/calendar.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script>
      let deviceData = <?php echo json_encode($devices, JSON_NUMERIC_CHECK); ?>;
      let manufacturerData = <?php echo json_encode($manufacturers, JSON_NUMERIC_CHECK); ?>;
    </script>
    
    <script src="../js/AnalyticsPage.js"></script>

    <link rel="stylesheet" href="../css/Analytics.css">
    <title>Analytics</title>

  </head>
  <body>
  <?php include './Navbar.php'?>

  <div class="d-flex align-items-center">
      <div class="div-containers">
          <div class="mt-4 mb-3 text-center">
              <button class="btn btn-light border" id="deviceButton">Devices</button>
              <button class="btn btn-light border" id="manufacturerButton">Manufacturers</button>
              <button class="btn btn-light border" id="modelButton">Models</button>
          </div>
          <div class="mb-5 text-center d-flex flex-row justify-content-center align-items-center">
              <h5>Surplus:</h5>
              <button class="btn btn-light border mx-3">Off</button>
              <button class="btn btn-light border">On</button>
              <h5 class="ml-4">Expired Warranty:</h5>
              <button class="btn btn-light border mx-3">Off</button>
              <button class="btn btn-light border">On</button>
          </div>

          <div class="d-flex flex-row justify-content-center text-center graph-container">
              <div id="chartContainer" style="height: 370px; width: 100%;"></div>
          </div>

          <div class="text-center mt-5">
              <button class="btn btn-light border">Export</button>
          </div>
      </div>

      <div class="d-flex justify-content-center div-containers">
	  <h1>Calendar</h1>
	<?php
		$calendar = new Calendar();

		echo $calendar->show();
	?>
      </div>
  </div>
  
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  </body>
</html>
