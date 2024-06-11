<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Cinco</title>
</head>

<body>
    <?php
    $jugadores = array(
        "diaz",
        "suarez",
        "pello",
        "erqueaga",
        "villamayor",
        "cecchini"
    );
    foreach ($jugadores as $jugador) {
        echo "La alineación del equipo está compuesta por " . $jugador . "<br>";
    }
    ?>
</body>

</html>