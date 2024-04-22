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
        Ejercicio5.- En base a 2 array de nombres y apellidos, genere un nuevo array combinando de forma
        aleatoria ambos, formatee los nombres convirtiendo el primer elemento del nombre y apellido en
        mayúscula y el resto en minúscula .(20Pts)
    */

    /* 
        Para resolver este ejercicio y debido a que una de las consignas es resolver el problema mediante 
        funciones tendremos una funcion que tendra como parametros la cantidad de nombres completos a generar 
        un arreglo de nombres y apellidos y retornara un arreglo de nombres completos que nosotros mediante 
        un foreach lo mostraremos en el navegador
    */
        $nombresCompletos = array();
        // Arreglo de nombres
        $nombres = array(
            "juan",
            "maría",
            "pedro",
            "ana",
            "luis",
            "laura",
            "carlos",
            "sofía",
            "miguel",
            "elena"
        );

        // Arreglo de apellidos
        $apellidos = array(
            "garcía",
            "martínez",
            "lópez",
            "gonzález",
            "rodríguez",
            "fernández",
            "pérez",
            "sánchez",
            "ramírez",
            "torres"
        );
        //Utilizamos una funcion para realizar la combinacion
        function generarNombresCompletos($numeroDeNombres,$nombres,$apellidos){
            $nombresCompletos;
            for($i=0;$i<$numeroDeNombres;$i++)
            {
                //La función ucfirst() convierte la primera letra de una cadena a mayúscula
                $nombre = ucfirst($nombres[rand(0, count($nombres) - 1)]);
                $apellido = ucfirst($apellidos[rand(0, count($apellidos) - 1)]);
                //Guardamos los nombres completos con la primera letra en Mayuscula en un nuevo arreglo
                $nombresCompletos[] = $nombre . " " . $apellido;
            } 
            return $nombresCompletos;
            
        }

        //llamamos al procedimiento
        $nombresCompletos = generarNombresCompletos(10,$nombres,$apellidos);
        //Imprimimos los nombres mediante un arreglo
        foreach ($nombresCompletos as $nombreCompleto) {
            echo $nombreCompleto . "<br>";
        }

    ?>
</body>
</html>