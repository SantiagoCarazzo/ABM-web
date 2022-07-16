<?php

    include("conexion.php");
    $con=conectar();

    $ID_producto=$_POST['ID_producto'];
    $nombre_producto=$_POST['nombre_producto'];
    $precio_producto=$_POST['precio_producto'];
    $cantidad_producto=$_POST['cantidad_producto'];


    $sql="INSERT INTO productos VALUES('$ID_producto', '$nombre_producto', '$precio_producto', '$cantidad_producto')";
    $query=mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    }

    else{

    }


?>