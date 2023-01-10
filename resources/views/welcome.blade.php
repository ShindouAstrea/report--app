<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel Highcharts Demo</title>
</head>
<body>
    <h1>Highcharts in Laravel Example</h1>
    <div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    let datos = <?php echo json_encode($data)?> ;
    let headers =[];
    let serieData = [];
    for(dato of datos){
        headers.push(dato["nombreRegion"]);
    }
    for(dato of datos){
        serieData.push(dato["numeroDeCasosAsintomaticos"]);
    }
    Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Fallecidos en cada region',
        align: 'left'
    },
    xAxis: {
        categories: headers ,
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'casos de Covid',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' personas '
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
       name: 'Marzo',
       data: serieData
    },
    {
        name:'Abril',
        data:serieData
    },
    {
        name:'Mayo',
        data:serieData
    }
    ]
});
</script>

</html>