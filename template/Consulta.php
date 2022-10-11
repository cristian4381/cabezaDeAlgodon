<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../estilos/ficha.css">
	<link rel="stylesheet" href="../estilos/normalize.css">
	<script src="https://kit.fontawesome.com/08348ab59f.js" crossorigin="anonymous"></script>
	<title>Consulta General</title>
</head>

<body>
	<header>

		<div class="contenedor__titulo">
			<h1 class="titulo">Cabeza de Algodón</h1>
			<h2 class="subTitulo">Consulta</h3>
		</div>
		<div>

		</div>

		<?php
			include 'nav.php';
		?>
	</header>
	<div class="main">
		<?php

		include 'buscarPaciente.php'

		?>
		<section class="datosP oculto">

			<div class="contenedor">
				<div class="contenedor__subTitulos">
					<h3>Datos del paciente</h3>
				</div>
				<label for="nombre" class="etiqueta">Nombre: <span class="text" id="nombre"></span> </label>
				<label for="apellido" class="etiqueta">Apellido: <span class="text" id="apellido" name="apellido"></span> </label>
			</div>
			<div class="contenedor">
				<div class="contenedor__subTitulos">
					<h3>Datos Consulta</h3>
				</div>
				<form id="formConsulta">
					<label for="" class="etiqueta">Fecha Consulta</label>
					<input type="date" class="caja" name="fecha" id="fechaConsulta">
					<label for="" class="etiqueta">Motivo de la consulta: </label>
					<textarea name="motivoConsulta" class="caja-texArea" id="motivoConsulta" cols="30" rows="10"></textarea>
					<label for="" class="etiqueta">Diagnostico: </label>
					<textarea name="diagnosticoConsulta" class="caja-texArea" id="diagnosticoConsulta" cols="30" rows="10"></textarea>
					<input id="GuardarConsulta" type="button" class="button" value="Guardar">
				</form>
			</div>

			<form id="formDerivacion">
				<div class="flex oculto">
					<div class="contenedor">
						<div class="contenedor__subTitulos">
							<h3>Solicitar Derrivación</h3>
						</div>
						<label for="" class="etiqueta">Fecha</label>
						<input type="date" class="caja">
						<label for="" class="etiqueta">Motivo: </label>
						<textarea name="" class="caja-texArea" id="" cols="30" rows="10"></textarea>
						<label for="" class="etiqueta">Diagnostico: </label>
						<textarea name="" class="caja-texArea" id="" cols="30" rows="10"></textarea>
						<!--	<input type="button" class="button" value="Guardar"> -->
					</div>
					<div class="contenedor">
						<div class="contenedor__subTitulos">
							<h3>Asignar Enfermero</h3>
						</div>
						<label for="" class="etiqueta">Nombre: </label>
						<select name="" class="caja" id="">
							<option value="">...</option>
							<option value="">juan</option>
							<option value="">pedro</option>
							<option value="">maria</option>
						</select>
						<label for="" class="etiqueta">Fecha</label>
						<input type="date" class="caja">
						<label for="" class="etiqueta">Paciente: <span class="text" id="paciente"></span> </label>
						<label for="" class="etiqueta">Descripcion</label>
						<textarea name="" class="caja-texArea" id="" cols="30" rows="10"></textarea>
						<!--	<input type="button" class="button" value="Asingnar enfermero"> -->
					</div>
				</div>
			</form>
			<input type="button" class="button bt-warning" value="Solicitar Derivacion" id="FormularioDerivacion">
			<input type="button" class="button oculto" value="Enviar Solicitud" id="SolicitarDerivacion">
			<input type="button" class="button" value="Buscar Otro Paciente" id="Regresar">
		</section>
		<script src="../Js/Consulta.js"></script>
		<script src="../JS/Regresar.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
	</div>
</body>

</html>