// const Highcharts = require('highcharts')
require('jsdom')
// const parseDatetimeToJsDate = function(time) {
//     let parsedTime = moment(time, "YYYY-MM-DDTHH:mm:ss.SSSZ");
//     return parsedTime.toDate();
//   };
//   let chartOptions = {
//     chart: {
//       renderTo: 'container',
//       type: 'area',
//       zoomType: 'x'
//     },
//     title: {
//       text: "Temperature readings last 24 hrs"
//     },
//     yAxis: {
//       title: {
//         text: 'Temperature'
//       }
//     },
//     xAxis: {
//       title: {
//         text: 'Time'
//       },
//       type: 'datetime'
//     },
//     series: [{
//       name: "Climax sensor in greenhouse",
//       type: 'area',
//       data: []
//     }]
//   };
  // Highcharts.setOptions({
  //     time: {
  //         timezoneOffset: -2 * 60
  //    }
  // });
  
 // var chart = new Highcharts.Chart(chartOptions);
  var query = 'SELECT \"pplCount\" FROM \"countppl\" WHERE \"sensor_id\" = \'sensor1\'';
  
  $('#clickme').click(function() {
    $.ajax({
      type: 'GET',
      crossOrigin: true,
      url: 'http://localhost:8086/query?db=countingpeople&q=' + query,
      success: function(data) {
        const resultValues = data.results[0].series[0].values;
        console.log(data.results[0].series[0]);
        chart.series[0].setData(resultValues.map(v => [parseDatetimeToJsDate(v[0]), v[1]]), true);
      }
    });
  });
  