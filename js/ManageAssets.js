function togglePage(page) {
    if (page) {
        $('.add-new-assets').hide();
        $('.deactivate-assets').show();
    } else {
        $('.add-new-assets').show();
        $('.deactivate-assets').hide();
    }
}

function deactivateAssetFunction(SerialNum){
  document.getElementById('assetSerial').innerHTML = SerialNum;
}
