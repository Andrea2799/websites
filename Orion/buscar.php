<html>
    <body>
        <?php


$conexion= mysqli_connect("localhost","root","","ventastienda") or 
die("problemas de conecxion");
$cod0=$_REQUEST ['txtproducto'];

$registros = mysqli_query($conexion,"select * from productos where nro_producto='$cod0'") or die
("problemas en el select:" .mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros))
{
  echo "PRODUCTO:" .$reg['nro_producto']."<br>";
  echo "STOCK:" .$reg['stock']."<br>";
  echo "NOMBRE:" .$reg['nombre']."<br>";
  echo "PRECIO:" .$reg['precio']."<br>";

echo"<br>";
echo"<hr>";
}


else 
echo "el codigo no existe";



mysqli_close($conexion);

?>

</body>
    </html>