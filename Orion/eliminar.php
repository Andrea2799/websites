<html>
    <body>
        <?php


$conexion= mysqli_connect("localhost","root","","ventastienda") or 
die("problemas de conecxion");
$cod=$_REQUEST ['txtproducto'];

$registros = mysqli_query($conexion,"select * from productos where nro_producto='$cod'") or die
("problemas en el select:" .mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros))
{
    $registros = mysqli_query($conexion,"delete from productos where nro_producto='$cod'") or die
    ("problemas en el select:" .mysqli_error($conexion));
     echo "el codigo buscado fue eliminado";
}
else{ 
echo "el codigo buscado no existe";
}




mysqli_close($conexion);
?>

</body>
    </html>