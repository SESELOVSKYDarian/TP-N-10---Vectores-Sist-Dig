<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Ocho</title>
</head>

<body>
    <?php
    $usuarios = array(
        'enero' => 31,
        'febrero' => 29,
        'marzo' => 31,
        'abril' => 30,
        'mayo' => 31,
        'junio' => 30,
        'julio' => 31,
        'agosto' => 31,
        'septiembre' => 30,
        'octubre' => 31,
        'noviembre' => 30,
        'diciembre' => 31
    );
    foreach ($usuarios as $mes => $dias) {
        echo "El mes es" . $mes . " y el dia: " . $dias;
        echo "<br>";
    }
    ?>
</body>

</html>