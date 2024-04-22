<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Ejercicio3.- Escribir un programa para imprimir N numeros primos generados de forma aleatorio, que
        no se repitan y cargado en un array que sean menores al 110.(20Pts)*/

        /*
            Para resolver este ejercicio y debido a que una de las consignas es resolver el problema mediante 
            funciones tendremos una para verificar si los numeros generados son primos 
            y otra para generar numeros aleatoriamente por debajo de 110 segun la cantidad ingresada por
            el usuario
        */

        //primero crearemos una funcion para verificar si los numeros generados son primos
        function esPrimo($numero)
        {
            // Verificar si el número es menor o igual a 1, en cuyo caso no es primo
            if ($numero <= 1) {
                return false;
            }
            
            if($numero <= 3){
                return true;
            }
            //si dentro del rango dado hay un divisor de ese numero entonses es falso de caso contrario estonces
            //el numero generado es primo
            for($i=4;$i<$numero;$i++)
            {
                if($numero % $i ==0)
                {
                    return false;
                }
            }

            return true;

        }

        //creamos otra funcion para generar numeros aleatereos segun la cantidad de numeros dictada por el usuario
        function generarNumerosPrimos($cantidad)
        {
            $numerosPrimos = [];
            //creamos un ciclo While que se repetira hasta que la cantidad del arreglo se menor
            //que la cantidad generada
            while (count($numerosPrimos) < $cantidad) {
                //Generar numeros primos menores al 110
                $numero = rand(1, 110);
                // Verificar si el número generado es primo y no está en el arreglo
                if (esPrimo($numero) && !in_array($numero, $numerosPrimos)) 
                {
                    //si es primo se guarda en el arreglo
                    $numerosPrimos[] = $numero;
                }
            }
            return $numerosPrimos;
        }

        //aqui verificamos si hay un parametro llamado numero en la URL. mediante la 
        //variable global $_GET de php que recoge datos enviados mediante el metodo Get
        if(isset($_GET['numero']))
        {
            $cantidadNumerosPrimos = $_GET['numero'];
            //Invocamos al metodo generar numeros primos y le pasamos la cantidad a generar y lo guardamos
            //en un arreglo
            $numerosPrimos = generarNumerosPrimos($cantidadNumerosPrimos);
            //mediante un foreach imprimos el arreglo con numeros primos generados
            $contador = 1;
            foreach ($numerosPrimos as $numeroPrimo) {
                echo "Número primo [$contador]: $numeroPrimo <br>";
                $contador ++;
            }
            echo'<a href="ac01ej3.php">Volver a la página anterior</a>';
        }
        else
        {
            //Formulario para obtener la cantidad de numeros primos a generar
            //cabiamos en tipo a number para que solo se pueda ingresar numeros enteros
            echo '<form method="GET" action="">
                    <label for="numero">Introduce un Número para la cantidad de numeros primos a generar:</label><br>
                    <br><input type="number" id="numero" name="numero">
                    <button type="submit">Mostrar Números Primos</button>
                </form>';
        }
    ?>
</body>
</html>