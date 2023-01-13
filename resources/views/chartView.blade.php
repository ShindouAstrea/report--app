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
            <div class="row">
            <form  method="">
                <label> Filtrar Datos por: </label>
                <select name="region">
                    <option value=""hidden>Seleccione Region</option>
                    <?php foreach(array_keys($dataTable) as $region){?>
                        <option value=<?php echo $region ?>><?php echo $region ?></option>
                    <?php }?>
                </select>
                <select name="mes">
                    <option value=""default hidden>Seleccione mes</option>
                    <option value=3>Marzo</option>
                    <option value=4>Abril</option>
                    <option value=5>Mayo</option>
                </select>
                <select name="sexo">
                    <option value="" default hidden>Seleccione Genero</option>
                    <option value="both">Femenino y Masculino</option>
                    <option value="masc">Masculino</option>
                    <option value="fem">Femenino</option>
                </select>
                <button disabled type="submit">Filtrar</button>
                <button  disabled href="/">Borrar Todos los Filtros</button>
            </form>
            </div>
            <div class="row">
            <table class ="table table-stripped">
                <thead>
                    <tr>
                        <th>Regiones</th>
                        <th scope="col">Total De Asintomaticos</th>
                        <th scope="col">Total de Fallecidos</th>
                        <th scope="col">Total de Casos Masculinos</th>
                        <th scope="col">Total de Casos Femeninos</th>
                        <th scopre="colo">Mes del Reporte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(array_keys($dataTable) as $reporte){?>
                   
                    <tr>
                        <td><?php echo $reporte?></td>
                        <td><?php echo $dataTable[$reporte]["numeroDeCasosAsintomaticos"]?></td>
                        <td><?php echo $dataTable[$reporte]["numeroDeFallecidos"]?></td>
                        <td><?php echo $dataTable[$reporte]["numeroDeCasosMasculinos"]?></td>
                        <td><?php echo $dataTable[$reporte]["numeroDeCasosFemeninos"]?></td>
                        <td><?php echo $dataTable[$reporte]["mesDelReporte"]?></td>
                       
                    </tr>

                    <?php }?> 
                </tbody>
            </table>
            </div>
            
           
            <div id="container"></div>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script type="text/javascript">
                var datos = <?php echo json_encode($dataChart)?> ;
                // Para hacer el match del mes de la bd que viene con un numero, a su palabra correspondiente , ejemplo si se busca el mes numero 3 , deberia arrojar el mes de marzo 
                var listadoDeMeses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
                var meses = [];
                var fallecidos=[];
                var asintomaticos = [];
                for(objetoConLaSumaDeTotales of datos){
                    meses.push(listadoDeMeses[parseInt(objetoConLaSumaDeTotales["mesDelReporte"])+1]);
                    fallecidos.push(parseInt(objetoConLaSumaDeTotales["numeroDeFallecidos"]));
                    asintomaticos.push(parseInt(objetoConLaSumaDeTotales["numeroDeCasosAsintomaticos"]));
                }
                Highcharts.chart('container', {
                    title: {
                        text: 'Grafico casos covid ultimos 3 meses',
                        align: 'left'
                    },
                    yAxis: {
                        title: {
                            text: 'Miles de personas'
                        }
                    },

                    xAxis: {
                        tickWidth: 0,
                        type: 'datetime',
                        labels: {

                                formatter() {
                                return Highcharts.dateFormat('%B',1);
                            },
        			    },
                         
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
                            pointStart:1
                        }
                    },

                    series: [{
                        name: 'Total Fallecidos',
                        data: fallecidos
                    }, {
                        name: 'Asintomaticos',
                        data: asintomaticos
                    }
                    ],

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