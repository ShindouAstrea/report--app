<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Analisis de Casos Covid en Chile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="row">
            <h3 style="margin-Bottom: 2rem;margin-top:2rem;text-align:center"> Tabla de Resumen de Datos casos Covid</h3>
            
            <form  method="" style="justify-content:center;justify-items:center">
                <label> Filtrar Datos por: </label>
                <select name="region">
                    <option default hidden>Seleccione Region</option>
                    <?php foreach(array_keys($data) as $region){?>
                        <option value=<?php echo $region ?>><?php echo $region ?></option>
                    <?php }?>
                </select>
                <select name="mes">
                    <option default hidden>Seleccione mes</option>
                    <option name="mes3">Marzo</option>
                    <option name ="mes4">Abril</option>
                    <option name="mes5">Mayo</option>
                </select>
                <select name="sexo">
                    <option default hidden>Seleccione Genero</option>
                    <option name="ambos">Femenino y Masculino</option>
                    <option name="masculino">Masculino</option>
                    <option name="femenino">Femenino</option>
                </select>
                <button type="submit">Filtrar</button>
            </form>
            <table class ="table table-stripped">
                <thead>
                    <tr>
                        <th>Regiones</th>
                        <th scope="col">Total De Asintomaticos</th>
                        <th scope="col">Total de Fallecidos</th>
                        <th scope="col">Total de Casos Masculinos</th>
                        <th scope="col">Total de Casos Femeninos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(array_keys($data) as $reporte){?>
                   
                    <tr>
                        <td><?php echo $reporte?></td>
                        <td><?php echo $data[$reporte]["numeroDeCasosAsintomaticos"]?></td>
                        <td><?php echo $data[$reporte]["numeroDeFallecidos"]?></td>
                        <td><?php echo $data[$reporte]["numeroDeCasosMasculinos"]?></td>
                        <td><?php echo $data[$reporte]["numeroDeCasosFemeninos"]?></td>
                       
                    </tr>

                    <?php }?> 
                </tbody>
            </table>
            <div id="container"></div>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script type="text/javascript">
                Highcharts.chart('container', {

                title: {
                    text: 'U.S Solar Employment Growth by Job Category, 2010-2020',
                    align: 'left'
                },

                subtitle: {
                    text: 'Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>',
                    align: 'left'
                },

                yAxis: {
                    title: {
                        text: 'Number of Employees'
                    }
                },

                xAxis: {
                    accessibility: {
                        rangeDescription: 'Range: 2010 to 2020'
                    }
                },

                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                plotOptions: {
                    series: {
                        label: {
                            connectorAllowed: false
                        },
                        pointStart: 2010
                    }
                },

                series: [{
                    name: 'Installation & Developers',
                    data: [43934, 48656, 65165, 81827, 112143, 142383,
                        171533, 165174, 155157, 161454, 154610]
                }, {
                    name: 'Manufacturing',
                    data: [24916, 37941, 29742, 29851, 32490, 30282,
                        38121, 36885, 33726, 34243, 31050]
                }, {
                    name: 'Sales & Distribution',
                    data: [11744, 30000, 16005, 19771, 20185, 24377,
                        32147, 30912, 29243, 29213, 25663]
                }, {
                    name: 'Operations & Maintenance',
                    data: [null, null, null, null, null, null, null,
                        null, 11164, 11218, 10077]
                }, {
                    name: 'Other',
                    data: [21908, 5548, 8105, 11248, 8989, 11816, 18274,
                        17300, 13053, 11906, 10073]
                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

                });

            </script>
            
        </div>
    </div>
</body>
</html>