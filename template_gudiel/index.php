<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Templatea</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="index.php?page=ejercicio1.php">Ejercicio1</a></li>
    <li><a href="index.php?page=ejercicio2.php">Ejercicio2</a></li>
    <li><a href="index.php?page=ejercicio3.php">Ejercicio3</a></li>
    <li><a href="index.php?page=ejercicio4.php">Ejercicio4</a></li>
    <li><a href="index.php?page=ejercicio5.php">Ejercicio5</a></li>
</ul>

    <?php
    if(isset($_GET['page'])){
        include ($_GET['page']);
    }
    ?>
    
</body>
</html>