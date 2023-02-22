$(document).ready(function () {
  stock_analysis()
  top_fuel_usage()
  transaction_history()
  expense()
  transaction_status()
  accounts_transactions()
})
function stock_analysis() {
  var dataSeries = [
    [
      {
        date: '2014-04-27',
        value: 105003761,
      },
      {
        date: '2014-04-28',
        value: 100457727,
      },
      {
        date: '2014-04-29',
        value: 98253926,
      },
      {
        date: '2014-04-30',
        value: 67956992,
      },
    ],
  ]

  var options = {
    chart: {
      height: 350,
      type: 'area',
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'straight',
    },
    series: [
      {
        name: 'STOCK ABC',
        data: series.monthDataSeries1.prices,
      },
    ],
    title: {
      text: 'Fundamental Analysis of Stocks',
      align: 'left',
    },
    subtitle: {
      text: 'Price Movements',
      align: 'left',
    },
    labels: series.monthDataSeries1.dates,
    xaxis: {
      type: 'datetime',
    },
    yaxis: {
      opposite: true,
    },
    legend: {
      horizontalAlign: 'left',
    },
    colors: [TivoAdminConfig.primary],
  }
  var chart = new ApexCharts(document.querySelector('#stock-analysis'), options)
  chart.render()
}

function top_fuel_usage() {
  var options2 = {
    chart: {
      height: 350,
      type: 'bar',
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        horizontal: true,
      },
    },
    dataLabels: {
      enabled: false,
    },
    series: [
      {
        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380],
      },
    ],
    xaxis: {
      categories: [
        'Customer 1',
        'Customer 2',
        'Customer 3',
        'Customer 4',
        'Customer 5',
        'Customer 6',
        'Customer 7',
        'Customer 8',
        'Customer 9',
        'Customer 10',
      ],
    },
    colors: [TivoAdminConfig.primary],
  }
  var chart2 = new ApexCharts(
    document.querySelector('#top-fuel-usage'),
    options2,
  )
  chart2.render()
}

function transaction_history() {
  var options1 = {
    chart: {
      height: 350,
      type: 'area',
      toolbar: {
        show: false,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'smooth',
    },
    series: [
      {
        name: 'Sales',
        data: [31, 40, 28, 51, 42, 109, 100],
      },
      {
        name: 'Purchase',
        data: [11, 32, 45, 32, 34, 52, 41],
      },
    ],
    xaxis: {
      type: 'date',
      categories: [
        '2022-09-07',
        '2022-09-06',
        '2022-09-05',
        '2022-09-04',
        '2022-09-03',
        '2022-09-02',
        '2022-09-01',
      ],
    },

    colors: [TivoAdminConfig.primary, TivoAdminConfig.secondary],
  }
  var chart1 = new ApexCharts(
    document.querySelector('#transaction-history'),
    options1,
  )
  chart1.render()
}

function expense() {
  var options3 = {
    chart: {
      height: 350,
      type: 'bar',
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        endingShape: 'rounded',
        columnWidth: '55%',
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent'],
    },
    series: [
      {
        name: 'Overtime',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
      },
      {
        name: 'expense 2',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
      },
      {
        name: 'Salary',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
      },
    ],
    xaxis: {
      categories: [
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
      ],
    },
    yaxis: {
      title: {
        text: '$ (thousands)',
      },
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return '$ ' + val + ' thousands'
        },
      },
    },
    colors: [
      TivoAdminConfig.primary,
      TivoAdminConfig.secondary,
      TivoAdminConfig.success,
    ],
  }
  var chart3 = new ApexCharts(
    document.querySelector('#expense-chart'),
    options3,
  )
  chart3.render()
}

function accounts_transactions() {
  var options8 = {
    chart: {
      width: 350,
      height: 350,
      type: 'pie',
    },
    labels: ['Account 1', 'Account 2', 'Account 3', 'Account 4', 'Account 5'],
    series: [44, 55, 13, 43, 22],
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
          legend: {
            position: 'bottom',
          },
        },
      },
    ],
    colors: [
      TivoAdminConfig.primary,
      TivoAdminConfig.secondary,
      TivoAdminConfig.success,
      '#a927f9',
      TivoAdminConfig.info,
    ],
  }
  var chart8 = new ApexCharts(
    document.querySelector('#accounts_transactions'),
    options8,
  )
  chart8.render()
}

function transaction_status() {
  var options4 = {
    chart: {
      height: 350,
      type: 'radialBar',
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      radialBar: {
        offsetY: 0,
        startAngle: 0,
        endAngle: 270,
        hollow: {
          margin: 5,
          size: '30%',
          background: 'transparent',
          image: undefined,
        },
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: false,
          },
        },
      },
    },
    colors: [TivoAdminConfig.primary, TivoAdminConfig.secondary],
    series: [67, 67],
    labels: ['Completed', 'Pending'],
    legend: {
      show: true,
      floating: true,
      fontSize: '16px',
      position: 'left',
      offsetX: 160,
      offsetY: 15,
      labels: {
        useSeriesColors: true,
      },
      markers: {
        size: 0,
      },
      formatter: function (seriesName, opts) {
        return seriesName + ':  ' + opts.w.globals.series[opts.seriesIndex]
      },
      itemMargin: {
        horizontal: 1,
      },
    },
    responsive: [
      {
        breakpoint: 480,
        options: {
          legend: {
            show: false,
          },
        },
      },
    ],
  }
  var chart4 = new ApexCharts(
    document.querySelector('#transaction-status'),
    options4,
  )
  chart4.render()
}
