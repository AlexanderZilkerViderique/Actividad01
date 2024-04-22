<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Ejercicio4.- Escribe un programa que pida una frase y escriba:(30Pts)
            • Cuantas veces aparece la letra “o”. Ejemplo Hola → 1
            • Las vocales que aparecen. Ejemplo Hola → 2
            • Cuántas veces aparecen cada una de las vocales.Ejemplo Hola → o:1 , a:1
        */ 

        /*
            Para resolver este ejercicio y debido a que una de las consignas es resolver el problema mediante 
            funciones tendremos una para contar la vocal "o" y otra para las demas vocales 
        */

        // Función para contar la cantidad de veces que aparece la letra 'o'
        function contarLetraO($texto) {
            // Convertir el texto a minúsculas para hacer el conteo de forma insensible a mayúsculas
            $texto = strtolower($texto);
            // Inicializar contador
            $contador_o = 0;
            // Recorrer la frase para contar las letras 'o'
            for($i = 0; $i < strlen($texto); $i++) {
                if($texto[$i] == 'o') {
                    $contador_o++;
                }
            }
            return $contador_o;
        }

        // Función para contar la cantidad de veces que aparecen las demás vocales
        function contarOtrasVocales($texto) {
            // Convertir el texto a minúsculas para hacer el conteo de forma insensible a mayúsculas
            $texto = strtolower($texto);
            // Inicializar contador
            $contador_vocales = 0;
            // Inicializar arreglo asociativo para contar cada vocal
            $contador_vocal = array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);
            // Recorrer la frase para contar las vocales
            for($i = 0; $i < strlen($texto); $i++) {
                $caracter = $texto[$i];
                // Contar las vocales
                if(in_array($caracter, array('a', 'e', 'i', 'o', 'u'))) {
                    $contador_vocales++;
                    $contador_vocal[$caracter]++;
                }
            }
            return array($contador_vocales, $contador_vocal);
        }

        // Código principal
        if(isset($_GET['texto'])) {
            $texto = $_GET['texto'];
            // Llamada a la función para contar la letra 'o'
            $contador_o = contarLetraO($texto);
            // Llamada a la función para contar las demás vocales
            list($contador_vocales, $contador_vocal) = contarOtrasVocales($texto);
            
            // Mostrar los resultados
            echo "<h2>La Palabra o Oración es: $texto</h2><br>";
            echo "<p>Cantidad de veces que aparece la letra 'o': $contador_o</p>";
            echo "<p>Cantidad de vocales que aparecen: $contador_vocales</p>";
            echo "<p>Cantidad de veces que aparecen cada una de las vocales:</p>";
            foreach($contador_vocal as $vocal => $contador) {
                echo "<p>$vocal: $contador</p>";
            }
            echo '<a href="ac01ej4.php">Volver a la página anterior</a>';
        } else {
            // Mostrar el formulario para ingresar la frase
            echo '<form method="GET" action="">
                    <label for="texto">Introduce un texto</label>
                    <input type="text" id="texto" name="texto">
                    <button type="submit">Mostrar Cantidad de vocales</button>
                </form>';
        }
    ?>
</body>
</html>