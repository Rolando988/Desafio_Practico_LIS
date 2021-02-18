<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
	<link rel="stylesheet" href="css/salario.css">
    <link rel="stylesheet" href="estilos.css">
    
    <title>Document</title>
</head>
<body>
<header style="height: 70px">
    </header> 
    <br>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
   
        <h2>Calculadora del prestamo</h2>
    
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
            echo " \t<br>Interes: $interes .00%";
            echo "\t<br>Periodo: $perido";
            echo "\n\t <br>Plazo: $plazo";
            echo "<br>";
            echo "<br>";
            echo "<table>\n";
            echo "\t<tr>\n\t\t<td>Fecha\n\t\t</td>\n\t\t<td>Cuota\n\t\t</td>\n\t\t<td>Capital\n\t\t</td>\n\t\t<td>Interes\n\t\t</td>\n\t\t<td>Saldo\n\t\t</td>\n\t</tr>\n";
            ?>
        </article>
    </section>
   
        </div>
        </div>
        </div>
         <a href="amortizacion.html" class="a-btn">
    <span class="a-btn-text">Regresar</span>
</a>
</body>
</html>