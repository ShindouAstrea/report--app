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
            <h3> Tabla de Resumen de Datos casos Covid</h3>
            <form  method="">
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
                        <?php foreach(array_keys($data[$reporte])as $mes){?>
                    <tr>
                        <td><?php echo $reporte?></td>
                        <td><?php echo $data[$reporte][$mes]["numeroDeCasosAsintomaticos"]?></td>
                        <td><?php echo $data[$reporte][$mes]["numeroDeFallecidos"]?></td>
                        <td><?php echo $data[$reporte][$mes]["numeroDeCasosMasculinos"]?></td>
                        <td><?php echo $data[$reporte][$mes]["numeroDeCasosFemeninos"]?></td>
                        <td><?php echo $mes?></td>
                    </tr>
                        <?php }?>
                    <?php }?> 
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>