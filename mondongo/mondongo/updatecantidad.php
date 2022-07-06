<?php

    include("conexion.php");
    $con=conectar();

    $ID_producto=$_POST['ID_producto'];
    
    $cantidad_producto=$_POST['cantidad_producto'];
    

    $sql="UPDATE productos SET cantidad_producto='$cantidad_producto' WHERE ID_producto='$ID_producto'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: index.php");
        }
    

?>

