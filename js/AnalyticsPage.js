$(document).ready(function() {
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2",
        animationEnabled: false,
        title: {
            text: "Amount Per Device Type"
        },
        data: [{
            type: "pie",
            indexLabel: "{y}",
            yValueFormatString: "#,##0",
            indexLabelPlacement: "inside",
            indexLabelFontColor: "#36454F",
            indexLabelFontSize: 18,
            indexLabelFontWeight: "bolder",
            showInLegend: true,
            legendText: "{label}",
            dataPoints: deviceData
        }]
    });
    chart.render();

    $("#manufacturerButton").click(function(){
        chart.options.data[0].dataPoints = manufacturerData;
        chart.options.title.text = 'Amount Per Manufacturer';
        chart.render();
    });

    $("#deviceButton").click(function(){
        chart.options.data[0].dataPoints = deviceData;
        chart.options.title.text = 'Amount Per Device Type';
        chart.render();
    });



})