<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Highcharts Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1>Highcharts in Laravel Example</h1>
    <table class="table table-striped table-bordered">
    <table class="table mb-0">
          <thead>
            <tr>
              <th scope="col">Regiones</th>
              <th scope="col">Cantidad de Asintomaticos</th>
              <th scope="col">Personas Fallecidas</th>
              <th scope="col">Cantidad de Hombres Afectados</th>
              <th scope="col">Cantidad de Mujeres Afectadas</th>
              <th scope="col">Mes del reporte</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Arica</th>
              <td>First</td>
              <td>First</td>
              <td>First</td>
              <td>First</td>
              <td>Last</td>
            </tr>
            <tr>
              <th scope="row">Tarapaca</th>
              <td>First</td>
              <td>First</td>
              <td>First</td>
              <td>First</td>
              <td>Last</td>
            </tr>
            <tr>
              <th scope="row">metropolitana</th>
              <td>First</td>
              <td>First</td>
              <td>First</td>
              <td>First</td>
              <td>Last</td>
            </tr>
          </tbody>
        </table>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>