<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/ficha.css">
    <link rel="stylesheet" href="../estilos/normalize.css">
    <title>Visita</title>
</head>

<body>
    <header>

        <div class="contenedor__titulo">
            <h1 class="titulo">Cabeza de Algodón</h1>
            <h2 class="subTitulo">Visita Medica</h3>
        </div>
        <div>
        </div>
        <div class="contenedor__nav">
            <?php
                include 'nav.php';
            ?>
        </div>
        <div class="main">
            <section class="datoP">
                <div class="contenedor">
                    <div class="contenedor__subTitulos">
                        <h3>Datos del paciente</h3>
                    </div>
                    <label for="" class="etiqueta">Nombre: </label>
                    <label for="" class="etiqueta">Apellido: </label>
                </div>
            </section>
            <section class="FichaMedica">
                <div class="contenedor">
                    <div class="contenedor__subTitulos">
                        <h3>FichaMedica</h3>
                    </div>
                    <input type="button" class="button" value="Mostrar Visita Medica 09/07/2021">
                    <input type="button" class="button" value="Mostrar Visita Medica 09/08/2021">
                </div>
            </section>
            <section class="Datos visita">
                <div class="contenedor">
                    <div class="contenedor__subTitulos">
                        <h3>Datos visita</h3>
                    </div>
                    <label for="" class="etiqueta">Motivo Visita: </label>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quibusdam odio molestias consectetur deserunt, neque labore ab debitis laborum commodi aut vitae, illo nemo enim totam cum veritatis excepturi! Unde. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis harum veniam fuga illo totam vitae, distinctio modi quisquam quas sed temporibus illum itaque voluptatem! Tenetur sapiente consectetur distinctio cumque rerum.</p>
                    <label for="" class="etiqueta">Observaciones</label>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, enim! Qui perspiciatis nostrum dignissimos assumenda fuga necessitatibus hic, inventore eius soluta reiciendis illum repudiandae saepe eveniet atque. Ullam, saepe ratione!</p>
                    <label for="" class="etiqueta">Diagnostico: </label>
                    <textarea name="" class="caja-texArea" id="" cols="30" rows="10"></textarea>
                    <input type="button" class="button" value="Guardar">
                </div>
            </section>
            <div class="flex">
                <div class="contenedor">
                    <div class="contenedor__subTitulos">
                        <h3>Solicitud Examenes</h3>
                    </div>
                    <label for="" class="etiqueta">Tipo Examen: </label>
                    <select name="" class="caja" id="">
                        <option value="">...</option>
                        <option value="">orina</option>
                        <option value="">sangre</option>
                        <option value="">pendiente</option>
                    </select>
                    <input type="button" class="button" value="Agregar Examen">
                    <table class="tabla">
                        <thead class="thead">
                            <th class="th">Tipo Examen </th>
                            <th class="th">Estado</th>
                            <th class="th">Resultados</th>
                            <th class="th"></th>
                        </thead>
                        <tbody class="tbody">
                            <th class="th">Nombre Examen</th>
                            <th class="th">Estado</th>
                            <th class="th"><input type="submit" class="button r" value="Mostrar"></th>
                            <th class="th">
                                <input type="submit" class="button" value="-">
                            </th>

                        </tbody>
                    </table>
                    <input type="button" class="button" value="Solicitar Examen">
                </div>
                <div class="contenedor">
                    <div class="contenedor__subTitulos">
                        <h3>Solicitud Medicamentos</h3>
                    </div>
                    <label for="" class="etiqueta">Medicamento: </label>
                    <select name="" class="caja" id="">
                        <option value="">...</option>
                        <option value="">aspirina</option>
                        <option value="">paracetamol</option>
                        <option value="">pendiente</option>
                    </select>
                    <label for="" class="etiqueta">Cantidad</label>
                    <input type="number" class="caja">
                    <!-- <label for="" class="etiqueta">Paciente: </label> -->
                    <label for="" class="etiqueta">Descripcion</label>
                    <textarea name="" class="caja-texArea" id="" cols="30" rows="10"></textarea>
                    <input type="button" class="button" value="Agregar Medicamento">
                    <table class="tabla">
                        <thead class="thead">
                            <th class="th">Nombre </th>
                            <th class="th">Cantidad</th>
                            <th class="th">Descripcion</th>
                            <th class="th"></th>
                        </thead>
                        <tbody class="tbody">
                            <th class="th">Nombre Medicamento</th>
                            <th class="th">0</th>
                            <th class="th">Descripcion</th>
                            <th class="th"><input type="submit" class="button" value="-"></a></th>

                        </tbody>
                    </table>
                    <input type="button" class="button" value="Solicitar Medicamento">
                </div>
            </div>
        </div>
</body>

</html>