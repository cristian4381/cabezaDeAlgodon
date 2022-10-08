<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/ficha.css">
	<link rel="stylesheet" href="estilos/normalize.css">
	<script src="https://kit.fontawesome.com/08348ab59f.js" crossorigin="anonymous"></script>
    <title>General</title>
</head>
<body>
    <header>
        
        <div class="contenedor__titulo">
            <h1 class="titulo">Cabeza de Algodón</h1>
            <h2 class="subTitulo">Consulta</h3>
        </div>
        <div>
        
        </div>
        <div class="contenedor__nav">
            <nav>
                <ul>
                    <li class="li__nav"><i class="fas fa-sign-out-alt"></i><a class="ss" href="php/logout.php">Cerrar sesion</a></li>
                </ul>
            </nav>
            
        </div>
    </header>	
    <div class="option">
            <div class="contenedor">
                <div class="contenedor__subTitulos sub-box center-content">
                    <h3>SELECCIONE UNA OPCION</h3>
                </div>

                <input type="submit" class="button" value="Constulta" id="consulta">  
                <input type="submit" class="button" value="Ficha" id="Ficha"> 
                <input type="submit" class="button" value="Pendiente" id="">  
            </div> 
    </div>
    <script src="Js/VistaGeneral.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
</body>
</html>