/** @format */

media = 10;
$(document).ready(
    //alert("pagina caricata"),
    //$("#sfen").show("slow"),
    $(".more-info")
        .mouseover(function () {
            $("#s" + this.id).show("slow");
        })
        .mouseout(function () {
            $("#s" + this.id).hide("slow");
        })
);

let myChart = $("#myChart");
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = "rgb(255,255,255)";

let mediaChart = new Chart(myChart, {
    type: "bar",
    data: {
        labels: [],
        datasets: [
            {
                data: [],
                backgroundColor: "rgba(200, 100, 100, 0.9)",
                borderWidth: 1,
                borderColor: "rgb(200,200,200)",
                hoverBorderWidth: 1,
            },
            {
                type: "line",
                data: [],
                backgroundColor: "rgba(100, 200, 200, 0.7)",
                borderWidth: 3,
                borderColor: "rgb(0,0,0)",
                hoverBorderWidth: 3,
            },
        ],
    },
    options: {
        title: {
            display: true,
            text: "PROBLEM SOLVING",
            fontSize: 25,
        },
        legend: {
            display: false,
            position: "right",
            labels: {},
        },
        scales: {
            yAxes: {
                gridLines: {
                    zeroLineColor: "white",
                    zeroLineWidth: 5,
                },
                ticks: {
                    min: 0,
                },
            },
        },
    },
});
