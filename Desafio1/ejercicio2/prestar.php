<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header id="inset">
        <h2>Calculadora del prestamo</h2>
    </header>
    <section>
        <article>
            <?php
            if (isset($_POST['calcular'])) {
               $dia = isset($_POST['dia']) ? $_POST['dia'] : 0; 
               $mes = isset($_POST['mes']) ? $_POST['mes'] : 0;
               $year = isset($_POST['year']) ? $_POST['year'] : 0;
               $monto = isset($_POST['monto']) ? $_POST['monto'] : 0;
               $interes = isset($_POST['interes']) ? $_POST['interes'] : 0;
               $perido = isset($_POST['periodo']) ? $_POST['periodo'] : "" ;
               $plazo = isset($_POST['plazo']) ? $_POST['plazo'] : 0 ;
            }

            echo "Fecha del prestamo:"; 
            echo "\t<br>$dia/$mes/$year";
            echo "\t<br>Monto: $monto.00\n\t\t";
            echo " \n\tInteres: $interes .00%";
            echo "\t<br>Periodo: $perido";
            echo "\n\t <br>Plazo: $plazo";
            echo "<br>";
            echo "<br>";
            echo "<table>\n";
            echo "\t<tr>\n\t\t<td>Fecha\n\t\t</td>\n\t\t<td>Cuota\n\t\t</td>\n\t\t<td>Capital\n\t\t</td>\n\t\t<td>Interes\n\t\t</td>\n\t\t<td>Saldo\n\t\t</td>\n\t</tr>\n";
            ?>
        </article>
    </section>
</body>
</html>