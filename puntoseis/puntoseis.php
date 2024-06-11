<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Seis</title>
</head>

<body>
    <?php
    $meses = array(
        "enero",
        "febrero",
        "marzo",
        "abril",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviembre",
        "diciembre"
    );
    sort($meses);
    foreach ($meses as $mes) {
        echo $mes . "<br>";
    }
    ?>
</body>

</html>