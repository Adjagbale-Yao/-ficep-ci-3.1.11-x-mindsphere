google.charts.load("current", {
    packages: ["controls", "corechart", "gantt"],
});
google.charts.setOnLoadCallback(drawChart);

function toMilliseconds(minutes) {
    return minutes * 60 * 1000;
}


/* 02-07-2021 */

function drawChart() {
    // gantt chart
    if ($("#gantt_chart").length) {
        let ganttData = new google.visualization.DataTable();
        ganttData.addColumn("string", "Task ID");
        ganttData.addColumn("string", "Task Name");
        ganttData.addColumn("string", "Resource");
        ganttData.addColumn("date", "Start Date");
        ganttData.addColumn("date", "End Date");
        ganttData.addColumn("number", "Duration");
        ganttData.addColumn("number", "Percent Complete");
        ganttData.addColumn("string", "Dependencies");

        ganttData.addRows([
            ["idle", "Idle", "Idle", null, null, toMilliseconds(5), 100, null],
            ["execute", "Execute", "Execute", null, null, toMilliseconds(70), 100, null],
            ["manual", "Manual", "Manual", null, null, toMilliseconds(10), 100, null],
            ["stop", "Stop", "Stop", null, null, toMilliseconds(45), 75, null],
        ]);
        var ganttOptions = {
            height: 150,
            gantt: {
                trackHeight: 25,
                defaultStartDateMillis: new Date(),
            },
            backgroundColor: {
                fill: '#dee3e7',
            }
        };

        let ganttChart = new google.visualization.Gantt(
            document.getElementById("gantt_chart")
        );

        ganttChart.draw(ganttData, ganttOptions);
    }
    // donut oee chart
    if ($("[id ^= 'donut_single']").length) {
        let donutData = google.visualization.arrayToDataTable([
            ["Effort", "Amount given"],
            ["OEE PlaceHolder", 100],
        ]);

        let donutOptions = {
            pieHole: 0.8,
            pieSliceTextStyle: {
                color: "black",
            },
            legend: "none",
            width: 250,
            height: 190,
            backgroundColor: '#dee3e7',
            fontSize: 30
        };
        $("[id ^= 'donut_single']").each(function() {
            var donutChart = new google.visualization.PieChart(
                document.getElementById($(this).attr("id"))
            );
            donutChart.draw(donutData, donutOptions);
        });
    }
    // line chart
    if ($("#oee_line_chart").length) {
        let lineData = new google.visualization.DataTable();
        lineData.addColumn("number", "X");
        lineData.addColumn("number", "");
        lineData.addColumn("number", "");

        lineData.addRows([
            [0, 0, 0],
            [1, 10, 5],
            [2, 23, 15],
            [3, 17, 9],
            [4, 18, 10],
            [5, 9, 5],
            [6, 11, 3],
            [7, 27, 19],
            [8, 33, 25],
            [9, 40, 32],
            [10, 32, 24],
            [11, 35, 27],
            [12, 30, 22],
            [13, 40, 32],
            [14, 42, 34],
            [15, 47, 39],
            [16, 44, 36],
            [17, 48, 40],
            [18, 52, 44],
            [19, 54, 46],
            [20, 42, 34],
            [21, 55, 47],
            [22, 56, 48],
            [23, 57, 49],
            [24, 60, 52],
            [25, 50, 42],
            [26, 52, 44],
            [27, 51, 43],
            [28, 49, 41],
            [29, 53, 45],
            [30, 55, 47],
            [31, 60, 52],
            [32, 61, 53],
            [33, 59, 51],
            [34, 62, 54],
            [35, 65, 57],
            [36, 62, 54],
            [37, 58, 50],
            [38, 55, 47],
            [39, 61, 53],
            [40, 64, 56],
            [41, 65, 57],
            [42, 63, 55],
            [43, 66, 58],
            [44, 67, 59],
            [45, 69, 61],
            [46, 69, 61],
            [47, 70, 62],
            [48, 72, 64],
            [49, 68, 60],
            [50, 66, 58],
            [51, 65, 57],
            [52, 67, 59],
            [53, 70, 62],
            [54, 71, 63],
            [55, 72, 64],
            [56, 73, 65],
            [57, 75, 67],
            [58, 70, 62],
            [59, 68, 60],
            [60, 64, 56],
            [61, 60, 52],
            [62, 65, 57],
            [63, 67, 59],
            [64, 68, 60],
            [65, 69, 61],
            [66, 70, 62],
            [67, 72, 64],
            [68, 75, 67],
            [69, 80, 72],
        ]);

        let lineOptions = {
            hAxis: {
                title: "Time",
            },
            vAxis: {
                title: "%",
            },
            colors: ["#AB0D06", "#007329"],
            trendlines: {
                0: { type: "exponential", color: "#333", opacity: 1 },
                1: { type: "linear", color: "#111", opacity: 0.3 },
            },
            legend: "none",
            height: "400",
            width: "600",
        };

        let linechart = new google.visualization.LineChart(
            document.getElementById("oee_line_chart")
        );

        linechart.draw(lineData, lineOptions);
    }
    // Area chart
    if ($("#oee_area_chart").length) {
        let areaData = google.visualization.arrayToDataTable([
            ["Month", ""],
            ["Jan 31", 1000],
            ["Feb 28", 1170],
            ["Mars 31", 660],
            ["Jun 30", 1030],
        ]);

        let areaOptions = {
            title: "",
            hAxis: { title: "", titleTextStyle: { color: "#333" } },
            vAxis: { title: "Pieces", minValue: 0 },
            legend: "none",
            height: "400",
            width: "600",
        };

        let areaChart = new google.visualization.AreaChart(
            document.getElementById("oee_area_chart")
        );
        areaChart.draw(areaData, areaOptions);
    }
    // Bar chart
    if ($("#oee_bar_chart").length) {
        let horizontalBarChartData = google.visualization.arrayToDataTable([
            ["COMPONENTS", ""],
            ["P", 87],
            ["A", 96],
            ["Q", 95],
        ]);
        var horizontalBarChartGroupData = google.visualization.data.group(
            horizontalBarChartData, [{
                column: 0,
                modifier: function() {
                    return "total";
                },
                type: "string",
            }, ], [{
                column: 1,
                aggregation: google.visualization.data.sum,
                type: "number",
            }, ]
        );
        

        var horizontalBarChartView = new google.visualization.DataView(
            horizontalBarChartData
        );

        var horizontalBarChartOptions = {
            annotations: {
                alwaysOutside: true,
            },
            legend: 'none',
            backgroundColor: "#dee3e7",
        };
        var horizontalBarChart = new google.visualization.BarChart(
            document.getElementById("oee_bar_chart")
        );
        horizontalBarChart.draw(horizontalBarChartView, horizontalBarChartOptions);
    }
}

// Fullscreen 

function toggleFullscreen(elem) {
    elem = elem || document.documentElement;
    if (!document.fullscreenElement && !document.mozFullScreenElement &&
        !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
}

document.getElementById('fs-oee_trend-button').addEventListener('click', function() {
    toggleFullscreen(document.getElementById("oee_line_chart"));
});

document.getElementById("fs-prod_trend-button").addEventListener("click", function() {
    toggleFullscreen(document.getElementById("oee_area_chart"));
});

document.getElementById('W').addEventListener('click', function() {
    toggleFullscreen(this);
});