<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Uno</title>
</head>

<body>
    <?php
    $vector = [
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    ];
    foreach ($vector as $dia) {
        echo $dia . "<br>";
    }
    ?>
</body>

</html>