<html>
    <body>
        <?php


$conexion= mysqli_connect("localhost","root","","ventastienda") or 
die("problemas de conecxion");

$registros = mysqli_query($conexion,"select * from productos") or die
("problemas en el select:" .mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros))
{
  echo "PRODUCTO:" .$reg['nro_producto']."<br>";
  echo "STOCK:" .$reg['stock']."<br>";
  echo "NOMBRE:" .$reg['nombre']."<br>";
  echo "PRECIO:" .$reg['precio']."<br>";
  

echo"<br>";
echo"<hr>";
}



mysqli_close($conexion);

?>

</body>
    </html>