<?php 
    // include("process.php");
    // require_once("config.php");
 ?>
<h1>Web Monitor</h1>
<!-- Styles
<style>
body { background-color: #30303d; color: #fff; }
#chartdiv {
    width   : 100%;
    height  : 500px;
}                                                   
</style>

Resources
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

Chart code
<script>
var chartData = generateChartData();

var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "dark",
    "legend": {
        "useGraphSettings": true
    },
    "dataProvider": chartData,
    "synchronizeGrid":true,
    "valueAxes": [{
        "id":"v1",
        "axisColor": "#FF6600",
        "axisThickness": 2,
        "axisAlpha": 1,
        "position": "left"
    }, {
        "id":"v2",
        "axisColor": "#FCD202",
        "axisThickness": 2,
        "axisAlpha": 1,
        "position": "right"
    }, {
        "id":"v3",
        "axisColor": "#B0DE09",
        "axisThickness": 2,
        "gridAlpha": 0,
        "offset": 50,
        "axisAlpha": 1,
        "position": "left"
    }],
    "graphs": [{
        "valueAxis": "v1",
        "lineColor": "#FF6600",
        "bullet": "round",
        "bulletBorderThickness": 1,
        "hideBulletsCount": 30,
        "title": "red line",
        "valueField": "visits",
        "fillAlphas": 0
    }, {
        "valueAxis": "v2",
        "lineColor": "#FCD202",
        "bullet": "square",
        "bulletBorderThickness": 1,
        "hideBulletsCount": 30,
        "title": "yellow line",
        "valueField": "hits",
        "fillAlphas": 0
    }, {
        "valueAxis": "v3",
        "lineColor": "#B0DE09",
        "bullet": "triangleUp",
        "bulletBorderThickness": 1,
        "hideBulletsCount": 30,
        "title": "green line",
        "valueField": "views",
        "fillAlphas": 0
    }],
    "chartScrollbar": {},
    "chartCursor": {
        "cursorPosition": "mouse"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true,
        "position": "bottom-right"
     }
});

chart.addListener("dataUpdated", zoomChart);
zoomChart();


// generate some random data, quite different range
function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 100);

    for (var i = 0; i < 100; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i);

        var visits = Math.round(Math.sin(i * 50) * i);
        var hits = Math.round(Math.random() * 800) + 500 + i * 3;
        var views = Math.round(Math.random() * 6000) + i * 4;

        chartData.push({
            date: newDate,
            visits: visits,
            hits: hits,
            views: views
        });
    }
    return chartData;
}

function zoomChart(){
    chart.zoomToIndexes(chart.dataProvider.length - 20, chart.dataProvider.length - 1);
}

</script>

HTML
<div id="chartdiv"></div> -->

<!DOCTYPE html>
<html>
    <head>
    <style>
    body { background-color: #222222; color: #fff; }
    #chartdiv {
        width   : 100%;
        height  : 500px;
    }                                                   
    </style>
        <title>Graph</title>
        <meta name="description" content="chart created using amCharts live editor" />
        
        <!-- amCharts javascript sources -->
        <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/black.js"></script>
        

        <!-- amCharts javascript code -->
        <script type="text/javascript">
            AmCharts.makeChart("chartdiv",
                {
                    "type": "serial",
                    "categoryField": "date",
                    "dataDateFormat": "YYYY-MM-DD HH:NN",
                    "theme": "black",
                    "categoryAxis": {
                        "minPeriod": "mm",
                        "parseDates": true
                    },
                    "chartCursor": {
                        "enabled": true,
                        "categoryBalloonDateFormat": "JJ:NN"
                    },
                    "chartScrollbar": {
                        "enabled": true
                    },
                    "trendLines": [],
                    "graphs": [
                        {
                            "bullet": "round",
                            "id": "AmGraph-1",
                            "tabIndex": -4,
                            "title": "graph 1",
                            "valueField": "column-1"
                        },
                        {
                            "bullet": "square",
                            "id": "AmGraph-2",
                            "title": "graph 2",
                            "valueField": "column-2"
                        },
                        {
                            "bullet": "square",
                            "id": "AmGraph-3",
                            "title": "graph 3",
                            "valueField": "column-3"
                        },
                        {
                            "bullet": "square",
                            "id": "AmGraph-4",
                            "title": "graph 4",
                            "valueField": "column-4"
                        },
                        {
                            "bullet": "square",
                            "id": "AmGraph-5",
                            "title": "graph 5",
                            "valueField": "column-5"
                        }
                    ],
                    "guides": [],
                    "valueAxes": [
                        {
                            "id": "ValueAxis-1",
                            "title": "Axis title"
                        }
                    ],
                    "allLabels": [],
                    "balloon": {},
                    "legend": {
                        "enabled": true,
                        "useGraphSettings": true
                    },
                    "titles": [
                        {
                            "id": "Title-1",
                            "size": 15,
                            "text": "Chart Title"
                        }
                    ],
                    "dataProvider": [
                        {
                            "column-1": 1,
                            "column-2": 5,
                            "date": "2014-03-01 07:57",
                            "column-3": 1,
                            "column-4": 1,
                            "column-5": 8
                        },
                        {
                            "column-1": 6,
                            "column-2": 7,
                            "date": "2014-03-01 07:58",
                            "column-3": 9,
                            "column-4": 10,
                            "column-5": 10
                        },
                        {
                            "column-1": 2,
                            "column-2": 3,
                            "date": "2014-03-01 07:59",
                            "column-3": 8,
                            "column-4": 9,
                            "column-5": 10
                        },
                        {
                            "column-1": 1,
                            "column-2": 3,
                            "date": "2014-03-01 08:00",
                            "column-3": 2,
                            "column-4": 6,
                            "column-5": 4
                        },
                        {
                            "column-1": 2,
                            "column-2": 1,
                            "date": "2014-03-01 08:01",
                            "column-3": 7,
                            "column-4": 2,
                            "column-5": 2
                        },
                        {
                            "column-1": 3,
                            "column-2": 2,
                            "date": "2014-03-01 08:02",
                            "column-3": 5,
                            "column-4": 6,
                            "column-5": 9
                        },
                        {
                            "column-1": 6,
                            "column-2": 8,
                            "date": "2014-03-01 08:03",
                            "column-3": 7,
                            "column-4": 7,
                            "column-5": 2
                        }
                    ]
                }
            );
        </script>
    </head>
    <body>
        <div id="chartdiv"></div>
    </body>
</html>

<?php 

    $result = getdata($pdo);
    $len = count($result);
    ?>
     <table width="100%" cellspacing="0" cellpadding="3" border="1" > 
        <tr bgcolor>
        <td width="50">id</td>
        <td width="400">humidity</td>
        <td width="400">tempC</td>
        <td width="200">tempF</td>
        <td width="200">heatIndexC</td>
        <td width="200">heatIndexF</td>
        <td width="200">time</td>
     </tr>
    <?php
    for ($i=0; $i < $len; $i++) 
    { 

      $id = ($result[$i]->id);
      $humidity = ($result[$i]->humidity);
      $tempC = ($result[$i]->tempC);
      $tempF = ($result[$i]->tempF);
      $heatIndexC = ($result[$i]->heatIndexC);
      $heatIndexF = ($result[$i]->heatIndexF);
      $datetime = ($result[$i]->datetime);

      echo "<tr>";
      echo "<td>".$id."<br>";
      echo "<td>".$humidity."</td>";
      echo "<td>".$tempC."</td>";
      echo "<td>".$tempF."</td>";
      echo "<td>".$heatIndexC."</td>";
      echo "<td>".$heatIndexF."</td>";
      echo "<td>".$datetime."</td>";
      echo "</tr>"; 
    } 
    echo "</table>";

 ?>

