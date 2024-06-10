<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="pure-menu pure-menu-horizontal">
    <a href="principal.php" class="pure-menu-heading pure-menu-link">Ingreso de Stock</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item">
            <a href="disponible.php" class="pure-menu-link" >Stock disponible</a>
        </li>
    </ul>
 </div>
    
    
<?php
include("function/funciones.php");
$tipoprod=$_REQUEST['tipo_prod'];
$prod=$_REQUEST['prod'];
$prec=$_REQUEST['precio'];
$fechavenc=$_REQUEST['fecha_vencimiento'];
$obj_stock= new stock($tipoprod,$prod,$prec,$fechavenc);
echo "<h2>MOSTRANDO OBJETO STOCK CREADO</h2>";
echo $obj_stock->tipodeproducto;
echo "<br>";
echo $obj_stock->producto;
echo "<br>";
echo $obj_stock->precio;
echo "<br>";
echo $obj_stock->fechadevencimiento;
$obj_stock->guardar();
echo "<br>Stock creado en la base de datos"
?>
</body>
</html>