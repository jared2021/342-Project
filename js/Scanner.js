if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
        $('div.alert-warning').hide();
        $('video')[0].srcObject = stream;
    })
    .catch(function (error) {
        $('video').hide();
        $('div.controls').hide();
        $('div.alert-warning').show();
    });
}
