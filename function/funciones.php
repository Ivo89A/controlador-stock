<?
class stock{
    public $idstock;
    public $tipodeproducto;
    public $producto;
    public $precio;
    public $fechadevencimiento;

    public function __construct($tipoprod,$prod,$prec,$fechavenc){
        $this->tipodeproducto=$tipoprod;
        $this->producto=$prod;
        $this->precio=$prec;
        $this->fechadevencimiento=$fechavenc;
    }
    public function guardar()
    {
        $mysql= new mysqli("localhost","root","","bdstock");
        if ($mysql->connect_error)
        die('Problema de conexion de datos');
        
        $cadena='insert into stock(idstock,tipodeproducto,producto,precio,fechadevencimiento) values(null,"'.$this->tipodeproducto.'","'.$this->producto.'","'.$this->precio.'","'.$this->fechadevencimiento.'")';

        $mysql->query($cadena) or die($mysql->error);
        $mysql->close();
    }

public function listar()
{
    $mysql= new mysqli("localhost","root","","bdstock");
    $cadena= "select idstock,tipodeproducto,producto,precio,fechadevencimiento from stock order by tipodeproducto";
    $registros=$mysql->query($cadena) or die($mysql->error);
    echo "<table class='pure-table' border='1'>";
    while($reg=$registros->fetch_array()){
        echo "<thead>";
        echo "<tr>";
        echo "<th>TIPO DE PRODUCTO</th>";
        echo "<th>PRODUCTO</th>";
        echo "<th>FECHA DE VENCIMIENTO</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td class='pure-table-odd'>".$reg['tipodeproducto']."</td";
        echo "<br>";
        echo "<td>".$reg['producto']."</td";
        echo "<br>";
        echo "<td>$".$reg['precio']."</td";
        echo "<br>";
        echo "<td>".$reg['fechadevencimiento']."</td";
        echo '<td><a href="eliminar_stock.php?='.$reg["idstock"].'">Eliminar</td>';
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    $mysql->close();
}


public function eliminar($id)
{
    $mysql = new mysqli("localhost","root","","bdstock");
    $cadena="delete from stock where idstock=".$id;
    $registros=$mysql->query($cadena) or die($mysql->error);
    echo "Se elimino el registro";
    $mysql->close();
}

}



?>