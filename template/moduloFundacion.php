<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../estilos/ficha.css">
	<link rel="stylesheet" href="../estilos/normalize.css">
	<script src="https://kit.fontawesome.com/08348ab59f.js" crossorigin="anonymous"></script>
	<title>Fundacion</title>
</head>

<body>
	<header>

		<div class="contenedor__titulo">
			<h1 class="titulo">Cabeza de Algodón</h1>
			<h2 class="subTitulo">Solicitudes</h3>
		</div>
		<div>

		</div>

		<div class="contenedor__nav">
			<nav>
				<ul>
					<li class="li__nav"><i class="fas fa-sign-out-alt"></i><a class="ss" href="../php/logout.php">Cerrar sesion</a></li>
				</ul>
			</nav>

		</div>
	</header>
	<div class="main">

		<div class="contenedor">
			<div class="contenedor__subTitulos">
				<h3>Solicitudes Pendientes</h3>
			</div>
			<table class="tabla">
				<thead class="thead">
					<tr>
						<th class="th" scope="col">Motivo solicitud</th>
						<th class="th" scope="col">Medico Remitente</th>
						<th class="th" scope="col">Paciente</th>
						<th class="th" scope="col">Fecha Solicitud</th>
						<th class="th" scope="col">Asignar Medico </th>
						<th class="th" scope="col">Asignar Fecha</th>
						<th class="th" scope="col"></th>
					</tr>
				</thead>
				<tbody class="tbody" id="tabla">
				</tbody>
			</table>
			</section>
			<script src="../Js/moduloFundacion.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
		</div>
</body>

</html>