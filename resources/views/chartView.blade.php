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
                var datos = <?php echo json_encode($data)?> ;
                var regiones=Object.keys(datos);
                var arrayFallecidos = [];
                var arrayAsintomaticos = [];
                var arrayMasculinos = [];
                var arrayFemeninos = [];
                for( region of regiones){
                    
                    arrayFallecidos.push(parseInt(datos[region]["numeroDeFallecidos"]));
                    arrayAsintomaticos.push(parseInt(datos[region]["numeroDeCasosAsintomaticos"]));
                    arrayMasculinos.push((datos[region]["numeroDeCasosMasculinos"]));
                    arrayFemeninos.push(parseInt(datos[region]["numeroDeCasosFemeninos"]));
                }
                Highcharts.chart('container', {
                chart: {
                    type: 'column',
                    zoomType:'xy'
                    
                },
                title: {
                    text: 'Reportes de Casos covid por region'
                },
                
                xAxis: {
                    categories: regiones,
                    
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Cantidad de personas'
                    },
                    max:1000
                },
               
                plotOptions: {
                    column: {
                        pointPadding: 0,
                        borderWidth: 0
                    },
                    
                },
                legend:{
                    
                },
                
                series: [{
                    name: 'Total Fallecidos',
                    data: arrayFallecidos

                }, {
                    name: 'Total Casos Asintomaticos',
                    data: arrayAsintomaticos

                }, {
                    name: 'Total Casos Femeninos',
                    data: arrayFemeninos

                }, {
                    name: 'Total Casos Masculinos',
                    data: arrayMasculinos

                }]
            });
            </script>
            
        </div>
    </div>
</body>
</html>