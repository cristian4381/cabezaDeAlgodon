const tabla = document.getElementById("tabla");
let medicoAsignado;
const llenarTabla = async () => {
  const buscarSolicitud = await fetch("../php/buscarSolicitud.php");
  let solicitudes = await buscarSolicitud.json();
  tabla.innerHTML = "";

  for (const solicitud of solicitudes) {
    const fila = document.createElement("tr");

    const celdaBoton = celda();
    const celdaLista = celda();
    const celdaFechaHora = celda();

    const $lista = await lista();
    const $boton = boton();
    const $fechaHora = fechaHora();

    let medicoAsignado;

    $lista.addEventListener("change", () => {
      medicoAsignado = $lista.value;
    });

    $boton.onclick = async () => {
      if(validar($fechaHora,"fecha")==true){
        let medicoValidado=validarMedico(medicoAsignado,$lista);
        guardarInformacion(solicitud.ID_Solicitud,medicoValidado,$fechaHora.value);


      }
    };
    celdaBoton.appendChild($boton);
    celdaLista.appendChild($lista);
    celdaFechaHora.appendChild($fechaHora);

    fila.appendChild(llenarCelda(solicitud.Motivo));
    fila.appendChild(llenarCelda(solicitud.NombreUsuario));
    fila.appendChild(llenarCelda(solicitud.Nombre));
    fila.appendChild(llenarCelda(solicitud.fecha));
    fila.appendChild(celdaLista);
    fila.appendChild(celdaFechaHora);
    fila.appendChild(celdaBoton);
    tabla.appendChild(fila);
  }
};
const celda = () => {
  const $celda = document.createElement("th");
  $celda.classList.add("th");
  return $celda;
};
const llenarCelda = (variable) => {
  const $celda = celda();
  $celda.innerText = variable;
  return $celda;
};
const lista = async () => {
  const Medicos = document.createElement("select");
  Medicos.classList.add("cajaTabla");
  const enviar = await fetch("../php/medicosEspecialistas.php");
  const respuesta = await enviar.json();
  for (const res of respuesta) {
    let option = document.createElement("option");
    option.value = res.ID_Medico;
    option.text = res.NombreUsuario;
    Medicos.appendChild(option);
  }

  return Medicos;
};
const celdaLista = async () => {
  let $lista = await lista();
  const $celda = celda();
  $celda.appendChild($lista);
  return $celda;
};

const fechaHora = () => {
  const input = document.createElement("input");
  input.setAttribute("type", "datetime-local");
  input.classList.add("cajaTabla");

  return input;
};
const boton = () => {
  const butonAsignar = document.createElement("button");
  butonAsignar.classList.add("buttonTabla", "bt-primary");
  butonAsignar.textContent = "Asignar";
  return butonAsignar;
};
const validar=(campo, mensaje)=>{
  if(!campo.value){
    return Swal.fire({
      icon: "error",
      text: "Ingrese una "+mensaje+" valida",
      timer: 1000, 
    });
  }
  return true;
}
const validarMedico=(indice,lista)=>{
  if(indice==undefined){
    return lista.value;
  }
  return indice;
}
const MensajeConfirmacion = async (mensaje) => {
  const respuestaConfirmacion = await Swal.fire({
    title: "Confirmación",
    text: mensaje,
    icon: "warning",
    showCancelButton: true,
    cancelButtonColor: "#3085d6",
    confirmButtonColor: "#d33",
    confirmButtonText: "Sí",
    cancelButtonText: "Cancelar",
  });

  return respuestaConfirmacion;
};

const mensajeConfirmacionExitosa = async (mensaje) => {
  Swal.fire({
    icon: "success",
    text: mensaje,
    timer: 700, // <- Ocultar dentro de 0.7 segundos
  });
};
const mensajeConfirmacionEror = async (mensaje) => {
  Swal.fire({
    icon: "error",
    text: mensaje,
  });
};

const guardarInformacion=async(solicitud,medicoAsignado,fechaHora)=>{
  const confirmacion = await MensajeConfirmacion("Desea aprobar la solucitud");
  if(confirmacion.value){
    const datos= generarFormData(solicitud,medicoAsignado,fechaHora);

    const respuesta = await EnviarData(datos);
    if(respuesta){
      mensajeConfirmacionExitosa("Solictud Aprobada");
      llenarTabla();
    }
    else{
      mensajeConfirmacionEror("ocurrio un error");
    }
  }
}

const generarFormData=(solicitud,medicoAsignado,fechaHora)=>{
  let datosSolicitudAprobada = new FormData();
  datosSolicitudAprobada.append("Solicitud", solicitud);
  datosSolicitudAprobada.append("Medico", medicoAsignado);
  datosSolicitudAprobada.append("Fecha", fechaHora);
  return datosSolicitudAprobada;
}
const EnviarData=async(data)=>{
  let enviar = await fetch("../php/aprobarSolicitud.php", {
    method: "POST",
    body: data,
  });

  return enviar.json;
}
llenarTabla();
