/**
 * Init some variables for demo purposes
 */
var day = 0;
var firstDate = new Date();
firstDate.setDate( firstDate.getDate() - 500 );

/**
 * Function that generates random data
 */
function generateChartData() {
  var chartData = [];
  for ( day = 0; day < 50; day++ ) {
    var newDate = new Date( firstDate );
    newDate.setDate( newDate.getDate() + day );

    var visits = Math.round( Math.random() * 40 ) - 20;

    chartData.push( {
      "column-1": visits,
      "column-2": visits,
      "date": newDate,
      "column-3": visits,
      "column-4": visits,
        "column-5": visits
    } );
  }

  return chartData;
}


/**
 * Create the chart
 */
var chart = AmCharts.makeChart("chartdiv",
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
                            "title": "C",
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
                    "dataProvider": generateChartData()
                }
            );

/**
 * Set interval to push new data points periodically
 */
// set up the chart to update every second
setInterval( function() {
  // normally you would load new datapoints here,
  // but we will just generate some random values
  // and remove the value from the beginning so that
  // we get nice sliding graph feeling

  // remove datapoint from the beginning
  chart.dataProvider.shift();

  // add new one at the end
  day++;
  var newDate = new Date( firstDate );
  newDate.setDate( newDate.getDate() + day );
  var visits = Math.round( Math.random() * 40 ) - 20;
  chart.dataProvider.push( {
       "column-1": visits,
      "column-2": visits,
      "date": newDate,
      "column-3": visits,
      "column-4": visits,
        "column-5": visits
  } );
  chart.validateData();
}, 1000 );