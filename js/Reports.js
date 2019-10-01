$(document).ready(function() {
    $("#manufacturerGraph").hide();
    $("#modelGraph").hide();
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
            dataPoints: manufacturerData
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
        $("#manufacturerGraph").hide();
        $("#modelGraph").hide();
        $("#deviceGraph").show();

    });

    $("#manufacturerButton").click(function(){
        $("#deviceGraph").hide();
        $("#modelGraph").hide();
        $("#manufacturerGraph").show();

    });

    $("#modelButton").click(function(){
        $("#manufacturerGraph").hide();
        $("#deviceGraph").hide();
        $("#modelGraph").show();

    });

    devices.render();
    manufacturers.render();
    models.render();
})