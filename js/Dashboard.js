function saveIndexFunction(index) {
  saveIndex = index;
  document.getElementById('enterButton').value = saveIndex;
};

$(document).ready(function(){
  $("#search-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
