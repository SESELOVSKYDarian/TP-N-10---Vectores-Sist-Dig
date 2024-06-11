<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Siete</title>
</head>

<body>
    <?php
    $usuarios = array(
        'juan' => 'c1',
        'diego' => 'c2',
        'francisco' => 'c3',
        'federico' => 'c4',
        'tiziano' => 'c5',
    );
    foreach ($usuarios as $nombre => $contrasena) {
        echo "El nombre es: " . $nombre . " con la contraseña: " . $contrasena;
        echo "<br>";
    }
    ?>
</body>

</html>