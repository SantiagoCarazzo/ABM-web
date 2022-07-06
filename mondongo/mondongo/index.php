<?php

    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM productos";
    $query=mysqli_query($con,$sql);

    
    
?>

<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Mondongo S.A</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet">
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/logo.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">Mondongo</a></h1>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">Sobre Nosotros</a></li>
						<li><a href="#two">Planilla de Productos</a></li>
						<li><a href="#three">Nuestras Galletitas</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="image main" data-position="center">
									<img src="images/bannerp.jpg" alt="" />
								</div>
								<div class="container">
									<header class="major">
									 <h2 class="text-center">Mondongo</h2>
										<p class="text-secondary text-center">De la abuela a tu mesa</p>
									</header>
									<p class="text-secondary text-center">Somos una empresa dedicada a la producción y comercialización de galletas, hechas con amor</p>
								</div>
							</section>

						<!-- Two -->
							<section id="two">

							<div class="container">

<div class="container mt-5">

	<h1 class="text-center mb-5 fst-italic">Formulario de ingreso</h1>

	<form action="insertar.php" method="POST">

		<input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre del producto">
		<input type="number" class="form-control mb-3" name="precio_producto" placeholder="Precio del producto">
		<input type="number" class="form-control mb-3" name="cantidad_producto" placeholder="Cantidad del producto">

		<div class="d-grid gap-2 col-6 mx-auto">
			<input type="submit" class="btn btn-outline-primary">
		</div>
		

	</form>


</div>


<div class="container mt-5">

	<h1 class="text-center mb-5 fw-lighter">Modificar tablas</h1>

	<table class="table">

		<thead class="table-light table-striped">

			<tr>
				<th>ID producto</th>
				<th>Nombre del producto</th>
				<th>Precio del producto</th>
				<th>Cantidad del producto</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>

		</thead>

		<div class="container">



			<?php
				while($row=mysqli_fetch_array($query)){

			?>
					
				<tr>
					<th><?php echo $row['ID_producto']?></th>
					<th><?php echo $row['nombre_producto']?></th>
					<th><?php echo $row['precio_producto']?></th>
					<th><?php echo $row['cantidad_producto']?></th>
					<th><a href="actualizar.php?id=<?php echo $row['ID_producto'] ?>" class="btn btn-success">Editar</a></th>
					<th><a href="actualizarprecio.php?id=<?php echo $row['ID_producto'] ?>" class="btn btn-primary">Precio</a></th>
					<th><a href="actualizarcantidad.php?id=<?php echo $row['ID_producto'] ?>" class="btn btn-primary">Cantidad</a></th>
					<th><a href="eliminar.php?id=<?php echo $row['ID_producto'] ?>" class="btn btn-danger">Eliminar</a></th>
				
				</tr>

			<?php

				}
			?>

		</div>

	</table>

</div>

</div>
							</section>
							<section id="three">
								<div class="container">
									<h1 class="text-secondary text-center">Nuestras Galletitas</h1>
									<p class="text-secondary text-center mb-5">Nuestras galletitas más vendidas</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/image.jpg" alt="" /></a>
											<div class="inner">
												<h4 class="text-secondary text-center">La mondoguiana</h4>
												<p class="text-secondary text-center">La receta de la abuela</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/imagegalle.jpg" alt="" /></a>
											<div class="inner">
												<h4 class="text-secondary text-center">Oreos</h4>
												<p class="text-secondary text-center">La más vendidas </p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/galle.jpg" alt="" /></a>
											<div class="inner">
												<h4 class="text-secondary text-center">Bizcochitos</h4>
												<p class="text-secondary text-center">Los mejores para el mate</p>
											</div>
										</article>
									</div>
								</div>
			</section>

					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Todos los derechos reservados.</li><li>Design: <a href="#">Mondongo S.A.</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>