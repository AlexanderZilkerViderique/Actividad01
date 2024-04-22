<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Ejercicio2.- Escribir un programa donde nos solicite un usuario y contraseña, validar la contraseña con
        “D153n0W3b2” y el usuario debería ser cualquiera de los siguientes nombres: juan, pedro, maria, raul.
        (20Pts)
        */

        /*
            Para resolver este ejercicio y debido a que una de las consignas es resolver el problema mediante 
            funciones tendremos una que retornara un booleano true si se confirma el usuario que esta en los arreglos
            y otra que devolvera un booleano true si se confirma que la contraseña es correcta
        */
        // Arreglo de usuarios válidos
        $Usuarios = array("juan", "pedro", "maria", "raul");
        // Contraseña permitida
        $Contraseña = "D153n0W3b2";
        // Bandera para verificar el usuario
        $bandera1 = false;
        // Bandera para verificar la contraseña
        $bandera2 = false;

        // Función para verificar el usuario
        function verificarUsuario($texto, $usuarios) {
            foreach($usuarios as $nombre) {
                if($nombre == $texto) {
                    return true;
                }
            }
            return false;
        }

        // Función para verificar la contraseña
        function verificarContraseña($texto, $contraseña) {
            return $texto === $contraseña;
        }
        
        // Verificar si hay un parámetro llamado Usuario y Contraseña en la URL mediante la variable global $_GET de PHP
        if(isset($_GET['Usuario']) && isset($_GET['Contraseña']))
        {
            // Verificar el usuario
            $bandera1 = verificarUsuario($_GET['Usuario'], $Usuarios);

            // Verificar la contraseña
            $bandera2 = verificarContraseña($_GET['Contraseña'], $Contraseña);

            // Verificar si ambas condiciones se cumplen mediante una escalera de if
            if(!$bandera1)
            {
                echo "Coloque un Usuario Valido <br>";
                echo '<a href="ac01ej2.php">Volver a iniciar sesion</a>';
            } elseif(!$bandera2)
            {
                echo "Coloque una Contraseña Valida <br>";
                echo '<a href="ac01ej2.php">Volver a iniciar sesion</a>';
            } else 
            {
                echo "<h1>Usuario Correcto Bienvenido</h1><br>";
                echo '<a href="ac01ej2.php">Volver a iniciar sesion</a>';
            }

        } else 
        {
            // Formulario para enviar el Usuario y la contraseña mediante el método GET
            echo '<form method ="GET" action="">
            <label for="Usuario">Usuario</label>
            <input type="text" id="Usuario" name="Usuario">
            <br>
            <label for="Contraseña">Contraseña</label>
            <input type="text" id="Contraseña" name="Contraseña">
            <br>
            <button type="submit">ENVIAR</button>
            </from>';
        }
    ?>
</body>
</html>