<?php

    include("conexion.php");
    $con=conectar();

    $ID_producto=$_POST['ID_producto'];
    
    $precio_producto=$_POST['precio_producto'];
    

    $sql="UPDATE productos SET precio_producto='$precio_producto' WHERE ID_producto='$ID_producto'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: index.php");
        }
    

?>

