<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Mensaje de bienvenida
    echo "<h1>Bienvenidos a mi página Web</h1> <br>";
    // Función para dar la bienvenida y mostrar el navegador
    function mostrarNavegador() {
        
        // Obtener información del agente de usuario (user agent) desde el que se está solicitando el script
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        
        // Mostrar el navegador
        echo "<h2>Estás ejecutando en el siguiente navegador:</h2>";
        echo "$user_agent";
    }

    // Llamar a la función para mostrar la bienvenida y el navegador
    mostrarNavegador();
    ?>
</body>
</html>