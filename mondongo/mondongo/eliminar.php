<?php

    include("conexion.php");
    $con=conectar();

    $ID_producto=$_GET['id'];

    $sql="DELETE FROM productos WHERE ID_producto='$ID_producto'";
    $query=mysqli_query($con, $sql);

        if($query){
            Header("Location: index.php");
        }

?>