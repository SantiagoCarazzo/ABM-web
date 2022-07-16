<?php

    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM productos WHERE ID_producto='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Actualizar</title>
</head>
<body>
    
    <div class="container mt-5">

        <form action="update.php" method="POST">

            <input type="hidden" name="ID_producto" value="<?php echo $row['ID_producto'] ?>">

            <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre del producto" value="<?php echo $row ['nombre_producto'] ?>">
            <input type="number" step="any" class="form-control mb-3" name="precio_producto" placeholder="Precio del producto" value="<?php echo $row ['precio_producto'] ?>">
            <input type="number" class="form-control mb-3" name="cantidad_producto" placeholder="Cantidad del producto" value="<?php echo $row ['cantidad_producto'] ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

        </form>


    </div>

</body>
</html>