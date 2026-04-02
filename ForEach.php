<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica de bucles condicionales</title>
</head>

<body>
    <h1>For</h1>
    <?php
    for ($size = 1; $size <= 6; $size++) {
        echo "<span style=\"font-size:{$size}rem\">Tamaño: $size</span><br>";
    }
    ?>
    <h2>Fin de la practica 1</h2>
    <h1>ForEach</h1>
    <?php
    $monedas = ["USA" => "Dolar", "Espana" => "Euro", "Reino Unido" => "Libra"];
    foreach ($monedas as $pais => $moneda) {
        echo "<p>$pais: $moneda</p>";
    }
    ?>
</body>

</html>