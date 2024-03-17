/**
 * Dashboard Analytics
 */

'use strict';

(function () {
  let cardColor, headingColor, axisColor, shadeColor, borderColor;

  cardColor = config.colors.cardColor;
  headingColor = config.colors.headingColor;
  axisColor = config.colors.axisColor;
  borderColor = config.colors.borderColor;


  // Order Statistics Chart
  // --------------------------------------------------------------------
  // const chartOrderStatistics = document.querySelector('#orderStatisticsChart'),
  //   orderChartConfig = {
  //     chart: {
  //       height: 165,
  //       width: 130,
  //       type: 'donut'
  //     },
  //     labels: ['Electronic', 'Sports', 'Decor', 'Fashion'],
  //     series: [60, 20, 40, 30],
  //     colors: [config.colors.primary, config.colors.secondary, config.colors.info, config.colors.success],
  //     stroke: {
  //       width: 5,
  //       colors: [cardColor]
  //     },
  //     dataLabels: {
  //       enabled: false,
  //       formatter: function (val, opt) {
  //         return parseInt(val) + '%';
  //       }
  //     },
  //     legend: {
  //       show: false
  //     },
  //     grid: {
  //       padding: {
  //         top: 0,
  //         bottom: 0,
  //         right: 15
  //       }
  //     },
  //     states: {
  //       hover: {
  //         filter: { type: 'none' }
  //       },
  //       active: {
  //         filter: { type: 'none' }
  //       }
  //     },
  //     plotOptions: {
  //       pie: {
  //         donut: {
  //           size: '75%',
  //           labels: {
  //             show: true,
  //             value: {
  //               fontSize: '1.5rem',
  //               fontFamily: 'Public Sans',
  //               color: headingColor,
  //               offsetY: -15,
  //               formatter: function (val) {
  //                 return parseInt(val) + '%';
  //               }
  //             },
  //             name: {
  //               offsetY: 20,
  //               fontFamily: 'Public Sans'
  //             },
  //             total: {
  //               show: true,
  //               fontSize: '0.8125rem',
  //               color: axisColor,
  //               label: 'Weekly',
  //               formatter: function (w) {
  //                 return '%';
  //               }
  //             }
  //           }
  //         }
  //       }
  //     }
  //   };
  // if (typeof chartOrderStatistics !== undefined && chartOrderStatistics !== null) {
  //   const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
  //   statisticsChart.render();
  // }
  // const orderStatistics = @json($orderStatistics);
  // const chartOrderStatistics = document.querySelector('#orderStatisticsChart');

  // if (typeof chartOrderStatistics !== 'undefined' && chartOrderStatistics !== null) {
  //     const orderChartConfig = {
  //         chart: {
  //             height: 400,
  //             type: 'bar',
  //         },
  //         series: [{
  //             name: 'Total Orders',
  //             data: orderStatistics.map(statistic => statistic.total_orders)
  //         }],
  //         xaxis: {
  //             categories: orderStatistics.map(statistic => statistic.type)
  //         }
  //     };

  //     const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
  //     statisticsChart.render();
  // }
})();
