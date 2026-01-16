<?php
$course ="Curso profesional de PHP";
$CarModel ="Auto,Camioneta,4x4.";
$CarOne = "Audi R8";
$PickupTruckModel= "Ford Expedition Platinum Max";
$fourx4Model = "Ford Raptor F-150";
$nombre ="Luis";
$meta ="Entrar a una empresa como Dev Frontend";
$anio =2026;
$mensaje ="Sigo avanzando en PHP";
$edad =15;
$curso ="PHP";
$avance =true;
$complete=false;
$nota=10;
$edadOne=29;
$esEstudiante=false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePHP.css">
    <title><?= $course ?></title>
</head>
<body>
    <h1><?= $course ?></h1>

    <h2>Bienvenido,<?php echo $nombre; ?> al</h2>
    <p>Curso:<?php echo $meta; ?> en este <?php echo $anio; ?>.</p>
    <p>En esta pagina web,encontraras cuales son los precios
        de cada auto,camioneta,suvburban,etc, 
    </p>
    <h2>Gustos personales,entre ellos <?=$CarModel ?></h2>

    <div class="container-cars">

        <div class="CarOne">
            <p>Si te gusta la velocidad y la adrenalina, <br>
            el <?= $CarOne ?> es para tì.</p>
            <img class="CarOneImg"  src="Audi-R8-.png" alt="Audi R8">
        </div>
        <div class="CarOne">
            <p>Si buscas salir fuera de la ciudad y con tu familia<br>
            esta <?= $PickupTruckModel?> es la mejor opcion. </p>
            <img class="CarOneImg"  src="image.png" alt="Audi R8">
        </div>
        <div class="CarOne">
            <p>Diseñada para todo tipo de terreno,
            si imponer respeto<br> quieres,la <?= $fourx4Model?> es la idiscutible.</p>
            <img class="CarOneImg"  src="fpe-billboard-f-150-raptor.avif" alt="Audi R8">
        </div>
    </div>
    <h3><?php echo $mensaje; ?></h3>

    <?php 
    if ($edad >=18){
        echo "Eres mayor de edad";
    } else {
        echo "Eres menor de edad";
    }
    ?>
    <br>
    <?php 
    if ($avance){
        echo "Bien hecho $nombre,sigues avanzando en $curso";
    } else {
        echo "Ànimo $nombre,no te rindas";
    }
    ?>

    <br>
    <?php 
    if ($complete){
        echo"Curso completado";        
    } else{
        echo"Curso en progreso";
    }
    ?>

    <br>
    <?php 
    if($nota >= 11){
        echo "$nombre Angel,aprobado";
    } else{
        echo"$nombre Angel,Desaprobado";
    }

    ?>

    <br>

    <?php 
    if($esEstudiante || $edadOne < 21) {
        echo "si cuenta con descuento aplicado.";
    } else{
        echo "No cuenta con descuento aplicado .";
    }


    ?>
</body>
</html>