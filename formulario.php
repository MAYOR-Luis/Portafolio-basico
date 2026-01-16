<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer formulario en PHP</title>
</head>
<body>
    <h2>Formulario de registro</h2>

    <form method="post">

        <label>
            Nombre:
            <input type="text" name="nombre" required value="<?php echo $_POST['nombre'] ??''; ?>">
        </label>
        <br><br>

        <label>
            Edad:
            <input type="number" name="edad" required value="<?php echo $_POST ['edad'] ?? ''; ?>">
        </label>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>

        <?php 
        //Verificamos si el formulario fue enviado

        if($_POST){
            //Recibimos los datos
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];

            //Lógica con if
            if($edad >= 18){
                $mensaje="Eres mayor de edad";
            } else {
                $mensaje = "Eres menor de edad";
            }

            //Mostramos el resultado
            echo "<h3>Resultado:</h3>";
            echo "Hola <strong>$nombre</strong>,tienes <strong>$edad</strong> años.<br>";
            echo $mensaje;
        }
        ?>
</body>
</html>