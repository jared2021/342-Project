<?php
  session_start();
  require_once "../dbConnect.php";
  $test = [];

  // get the q parameter from URL
  $id=$_REQUEST["id"];

  //creates sql query and executes it
  $sql = " SELECT AID, Faculty.FirstName, Faculty.LastName, Category.DeviceType , Manufacturer.ManName, Model.ModelName, SerialNum, Location.Building, Location.RoomNum, Network.NetworkName, PurchaseDate, WarrantyDate FROM Assets
    INNER JOIN Category ON Assets.CatID = Category.CatID
    INNER JOIN Manufacturer ON Assets.ManID = Manufacturer.ManID
    INNER JOIN Model ON Assets.ModID = Model.ModID
    INNER JOIN Faculty ON Assets.UserID = Faculty.FID
    INNER JOIN Location ON Assets.LocID = Location.LID
    INNER JOIN Network ON Assets.NetID = Network.NID
    WHERE AID ='".$id."'";

  $result =$DB->Execute($sql);

  foreach ($result as $key) {
    array_push($test, $key['AID'], $key['FirstName'], $key['LastName'], $key['DeviceType'], $key['ManName'], $key['ModelName'], $key['SerialNum'], $key['Building'], $key['RoomNum'], $key['NetworkName'], $key['PurchaseDate'], $key['WarrantyDate']);
  }

  $test1 = json_encode($test, JSON_FORCE_OBJECT);

  print $test1;

 ?>
