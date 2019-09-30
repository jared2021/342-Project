$(document).ready(function() {

    $("manufacturerGraph").hide();
    $("modelGraph").hide();

    let devices = new CanvasJS.Chart("deviceGraph", {
        animationEnabled: true,
        title: {
            text: "Device Types"
        },
        data: [{
            type: "pie",
            yValueFormatString: "#,##0",
            indexLabel: "{label} ({y})",
            dataPoints: deviceData
        }]
    });

    let manufacturers = new CanvasJS.Chart("manufacturerGraph", {
        animationEnabled: true,
        title: {
            text: "Manufacturers"
        },
        data: [{
            type: "pie",
            yValueFormatString: "#,##0",
            indexLabel: "{label} ({y})",
            dataPoints: deviceData
        }]
    });

    let models = new CanvasJS.Chart("modelGraph", {
        animationEnabled: true,
        title: {
            text: "Models"
        },
        data: [{
            type: "pie",
            yValueFormatString: "#,##0",
            indexLabel: "{label} ({y})",
            dataPoints: deviceData
        }]
    });

    $("#deviceButton").click(function(){
        $("#deviceGraph").show();
        $("#manufacturerGraph").hide();
        $("#modelGraph").hide();

    });

    $("#manufacturerButton").click(function(){
        $("#manufacturerGraph").show();
        $("#deviceGraph").hide();
        $("#modelGraph").hide();

    });

    $("#modelButton").click(function(){
        $("#modelGraph").show();
        $("#manufacturerGraph").hide();
        $("#deviceGraph").hide();

    });

    devices.render();
    manufacturers.render();
    models.render();
})