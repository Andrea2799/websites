<html>
    <body>
        <?php

$nro_producto= $_REQUEST['txtproducto'];
$stock = $_REQUEST['txtstock'];
$nombre =$_REQUEST['txtnombre1'];
$precio=$_REQUEST['txtprecio1'];


$conexion= mysqli_connect("localhost","root","","ventastienda") or 
    die("problemas de conecxion");
    
mysqli_query($conexion,"insert into productos (nro_producto,stock,nombre,precio )
    values('$nro_producto','$stock','$nombre','$precio');");
    
    mysqli_close($conexion);

    echo "el producto fue grabado";
?>

</body>
    </html>