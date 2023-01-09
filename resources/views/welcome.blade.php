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
    <?php echo json_encode($regiones)?>;
</script>
</html>