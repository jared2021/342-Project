let asset = "";
function retrieveAssetById(id) {
  var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      asset = xmlhttp.responseText;
      asset = JSON.parse(asset);
      $("#deviceSelect").find('option:selected').removeAttr("selected");
      document.getElementById('AID').setAttribute('data-value', asset[0]);
      document.getElementById("first-name").value=asset[1];
      document.getElementById("last-name").value=asset[2];
      let option = asset[3]
      document.getElementById(option).setAttribute("selected", true);
      document.getElementById("manufacturer").value=asset[4];
      document.getElementById("model").value=asset[5];
      document.getElementById("serial-num").value=asset[6];
      document.getElementById("building").value=asset[7];
      document.getElementById("room").value=asset[8];
      document.getElementById("network").value=asset[9];
      document.getElementById("purchase-date").value=asset[10];
      document.getElementById("warranty-date").value=asset[11];
    }
  }
  xmlhttp.open("GET","AjaxRequests/GetAssetDetailsFromId.php?id="+id,true);
  xmlhttp.send();
}

function overAssetFunction(SerialNum){
  document.getElementById('assetSerial').innerHTML = SerialNum;
}

function submitData(){
  let first = document.getElementById('first-name').value
  var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      console.log(xmlhttp.responseText);

    }
  }
  xmlhttp.open("GET","AjaxRequests/EditAssetData.php?AID="+id+"&Firstname="+First,true);
  xmlhttp.send();
  console.log(document.getElementById('first-name').value)
}

$(document).ready(function() {

  $('#allButton').click(function(){
    $('.overDueAssets').hide();
    $('.allAssets').show();
  })

  $('#overButton').click(function(){
    $('.allAssets').hide();
    $('.overDueAssets').show();
  })
  /// Creates table look
  $('#allAssetsTable').DataTable();
  $('#overDueAssetsTable').DataTable({
    "order": [[ 9, "desc" ]]
  });
});
