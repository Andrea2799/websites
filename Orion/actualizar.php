<html>
    <body>
        <?php


$conexion= mysqli_connect("localhost","root","","ventastienda") or 
die("problemas de conecxion");
$cod=$_REQUEST ['txtproducto'];
$cod1=$_REQUEST ['txtstock'];
$cod2=$_REQUEST ['txtnombre1'];
$cod3=$_REQUEST ['txtprecio1'];

/*if ($cod=="select * from productos where nro_producto"){*/
    $registros = mysqli_query($conexion,"select * from productos where nro_producto='$cod'") or die
    ("problemas en el select:" .mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros))
{

  $registros = mysqli_query($conexion,"update productos set stock='$cod1', nombre='$cod2',precio='$cod3'where nro_producto='$cod'") or die
  ("problemas en el updtae:" .mysqli_error($conexion));
   echo "el codigo buscado fue actulizado";

   echo"<br>";  
echo"<hr>";

echo "PRODUCTO:" .$reg['nro_producto']."<br>";
echo "STOCK:" .$reg['stock']."<br>";
echo "NOMBRE:" .$reg['nombre']."<br>";
echo "PRECIO:" .$reg['precio']."<br>";


}
else 
echo "el codigo no exite";

/*}*/





 

echo"<br>";
echo"<hr>";





mysqli_close($conexion);

?>

</body>
    </html>