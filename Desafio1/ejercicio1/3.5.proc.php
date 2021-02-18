<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
	<link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/salario.css">
    <link rel="stylesheet" href="css/link.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script> 
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <section>
            <article>
<?php
$moneda = $_POST['lista_actual'];
$moneda2 = $_POST['lista_despues'];
$euro_dolar = 1.21;
$euro_libra = 0.88;
$euro_yen = 172.21;
$dolar_euro = 0.83;
$dolar_libra = 0.72;
$dolar_yen = 104.96;
$libra_euro = 1.14;
$libra_dolar = 1.38;
$libra_yen = 145.28;
$yen_euro = 0.0079;
$yen_dolar = 0.0095;
$yen_libra = 0.0069;  
 
echo "<table>\n";
echo "Tu moneda vale:";
echo "</table>\n";

 
switch ($moneda and $moneda2) {
    
    case $moneda == "dolar" and $moneda2 == "euro1":     
    echo "<div>".$_POST['valor'] * $dolar_euro."&#8364"." Euros"."</div>";
    break;
    
    case $moneda == "dolar" and $moneda2 == "libra1":     
    echo "<div>".$_POST['valor'] * $dolar_libra."&#163"." Libras"."</div>";     
    break;
    
    case $moneda == "dolar" and $moneda2 == "yen1":     
    echo "<div>".$_POST['valor'] * $dolar_yen." yenes"."</div>";     
    break;
    
    case $moneda == "euro" and $moneda2 == "dolar1":     
    echo "<div>".$_POST['valor'] * $euro_dolar."&#36"." Dolares"."</div>";     
    break;
    
    case $moneda == "euro" and $moneda2 == "libra1":     
    echo "<div>".$_POST['valor'] * $euro_libra."&#163"." Libras"."</div>";     
    break;
    
    case $moneda == "euro" and $moneda2 == "yen1":     
    echo "<div>".$_POST['valor'] * $euro_yen." yenes"."</div>";     
    break;
    
    case $moneda == "libra" and $moneda2 == "dolar1":     
    echo "<div>".$_POST['valor'] * $libra_dolar."&#36"." Dolares"."</div>";     
    break;
    
    case $moneda == "libra" and $moneda2 == "euro1":     
    echo "<div>".$_POST['valor'] * $libra_euro."&#8364"." Euros"."</div>";     
    break;
    
    case $moneda == "libra" and $moneda2 == "yen1":     
    echo "<div>".$_POST['valor'] * $libra_yen." yenes"."</div>";     
    break;
    
    case $moneda == "yen" and $moneda2 == "dolar1":     
    echo "<div>".$_POST['valor'] * $yen_dolar."&#36"." Dolares"."</div>";     
    break;
    
    case $moneda == "yen" and $moneda2 == "euro1";    
    echo "<div>".$_POST['valor'] * $yen_euro."&#8364"." Euros"."</div>";     
    break;
    
    case $moneda == "yen" and $moneda2 == "libra1":     
    echo "<div>".$_POST['valor'] * $yen_libra."&#163"." Libras"."</div>";     
    break;                  
}
?>
<a href="conversor_divisas.html" class="a-btn">
    <span class="a-btn-symbol">i</span>
    <span class="a-btn-text">Ingresar</span>
    <span class="a-btn-slide-text">Nueva Divisa</span>
    <span class="a-btn-slide-icon"></span>
</a>
</article>
</section>
</div>
</div>


</body>
</html>