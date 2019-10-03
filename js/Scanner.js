if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      $('video')[0].srcObject = stream;
    })
    .catch(function (error) {
      console.log("Something went wrong!");
    });
}
