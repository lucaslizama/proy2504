<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $miconn = new mysqli("10.20.26.58","root","avaras08","datospersonales");

            if($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error . "\n";
            }
            echo $miconn->host_info . "\n<br>";

            // Consultas de seleccion que devuelven un conjunto de resultados
            if($resultado = $miconn->query("SELECT * FROM persona"))
                echo "La seleccion deviolvio N° " . $resultado->num_rows . " filas";

            // Liberar el conjunto de resultados
            $resultado->close();
            $miconn->close();
        ?>
    </body>
</html>

