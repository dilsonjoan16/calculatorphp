<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colores.css">
    <title>.:.Calculator.:.</title>
</head>
<body class="fondo">
<div class="container">
<form class="box" action="index.php" method="get" onsubmit=" return validar();">
<h1 class="titulo">CALCULATOR</h1>
<h2 class="titulo2">
    OPERACIONES DISPONIBLES
</h2>
    <div class="container">    
        <div>
           + Sumar     - Restar
        </div>
        <div>
           * Multiplicar    / Dividir
        </div>
        <div><p>**Nota:escriba la operacion en minuscula</p></div>
    </div>
<input type="text"    name="condicion" value="" placeholder="INGRESE ALGUNA OPERACION" required>
<input type="number"  name="a" value="" placeholder="Ingrese el primer numero" required>
<input type="number"  name="b" value="" placeholder="Ingrese el segundo numero" required>
<input type="submit"  name=""  value="RESPUESTA">
<input type="reset"   name=""  value="LIMPIAR">
<output type="number" name="resultado">
</form>
</div>
</body>
</html>

<?php
$condicion=$_GET["condicion"];

switch ($condicion) {
    case 'sumar':
        $a=$_GET["a"]; $b=$_GET["b"];
        echo $a+$b;
        break;
    case 'restar':
        $a=$_GET["a"]; $b=$_GET["b"];
        echo $a-$b;
        break;
    case 'multiplicar':
        $a=$_GET["a"]; $b=$_GET["b"];
        echo $a*$b;
        break;
    case 'dividir':
        $a=$_GET["a"]; $b=$_GET["b"];
        if($b==0){
            echo "LA DIVISION ENTRE CERO NO ESTA DEFINIDA <br>";
        }
        else {
            echo $a/$b;
        }
        break;
    default:
    if ($condicion==0) {
        echo "<h1>SU ELECCION NO ES CORRECTA PROCEDA NUEVAMENTE</h1>";
    }
    else{
         echo "Usted eligio".$condicion;   
        }
        break;
}
?>