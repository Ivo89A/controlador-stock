<?php
include("function/funciones.php");
$id=$_REQUEST['id'];
    $obj_stock=new stock("","","",0);
    $obj_stock->eliminar($id);
    ?>