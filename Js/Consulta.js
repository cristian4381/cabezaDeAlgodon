const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const paciente = document.getElementById("paciente");

//const formulario = document.querySelector(".Buscarpaciente");
const botonBuscar = document.getElementById("buscar");
//const codigo = formulario.codigo;
const botonRegresar = document.getElementById("Regresar");
const botonFormularioDerivacion = document.getElementById(
  "FormularioDerivacion"
);
const botonGuardarConsulta = document.getElementById("GuardarConsulta");
const botonEnviarSolicitud = document.getElementById("SolicitarDerivacion");
const formConsulta = document.getElementById("formConsulta");

let idPaciente;
let boxIdPaciente = document.getElementById("codigo");

botonFormularioDerivacion.onclick = async () => {
  document.querySelector(".flex").classList.toggle("visible2");
  botonFormularioDerivacion.classList.toggle("oculto");
  botonGuardarConsulta.classList.toggle("oculto");
  botonEnviarSolicitud.classList.toggle("visible");
  botonRegresar.classList.toggle("oculto");
};
botonRegresar.onclick = async () => {
  const con = await Swal.fire({
    icon: "success",
  });
  if (con) {
    location.reload();
  }
};

botonBuscar.onclick = async (e) => {
  e.preventDefault();
  obtenerIdPaciente();
  if (!boxIdPaciente.value) {
    return Swal.fire({
      icon: "error",
      text: "Ingrese el codigo del paciente",
      timer: 1000,
    });
  }
  try {
    let respuesta = await buscarPaciente();
    if (respuesta) {
      const con = await Swal.fire({
        icon: "success",
        text: "Paciente encontrado",
        confirmButtonColor: "#5da422",
      });
      if (con) {
        boxIdPaciente.value = "";
        document.getElementById("busrcarF").classList.toggle("oculto");
        cargarDatos(respuesta);
        document.querySelector(".datosP").classList.toggle("visible");
      }
    } else {
      Swal.fire({
        icon: "error",
        text: "Ocurrio un error, Revise los datos",
      });
    }
  } catch (error) {
    Swal.fire({
      icon: "error",
      title: "ERROR",
      text: "ERROR NO SE ENCONTRO LA FICHA",
    });
  }
};

botonGuardarConsulta.onclick = async (e) => { 
  let validacion= validarCamposFormularioConsulta();
  if(validacion=="camposValidos"){
    let data= await generData();
    let respuesta = await EnviarData(data);
    if(respuesta){
      const con = await Swal.fire({
        icon: "success",
        text: "Consulta Guardada"
      });
      if(con){
        limpiarFormularioConsulta();
        window.location.href="VistaMedicoGeneral.php";
      }
    }
    else{
      Swal.fire({
        icon: "error",
        text: "Ocurrio un error, Revise los datos",
      });
    }
  }
};

const EnviarData=async(data)=>{
  let enviar = await fetch("../php/guardarConsulta.php", {
    method: "POST",
    body: data,
  });
  return enviar.json;
}

const generData=async()=>{
  const validacion = await fetch("../php/InformacionUsuario.php");
  let tipoUsuario = await validacion.json();
  let formularioConsulta = new FormData(formConsulta);
  let datosConsulta = new FormData();
  datosConsulta.append("Paciente", idPaciente);
  datosConsulta.append("Medico", tipoUsuario.ID_Medico);
  datosConsulta.append("Fecha", formularioConsulta.get("fecha"));
  datosConsulta.append("Motivo", formularioConsulta.get("motivoConsulta"));
  datosConsulta.append("Diagnostico",formularioConsulta.get("diagnosticoConsulta"));
  return datosConsulta;
}

const validarCamposFormularioConsulta=()=>{
  if(!formConsulta.fechaConsulta.value){
    return Swal.fire({
      icon: "error",
      text: "Ingrese una fecha valida",
      timer: 1000, 
    });
  }
  if(!formConsulta.motivoConsulta.value){
    return Swal.fire({
      icon: "error",
      text: "Ingrese el motivo de la consulta",
      timer: 1000, 
    });
  }
  if(!formConsulta.diagnosticoConsulta.value){
    return Swal.fire({
      icon: "error",
      text: "Ingrese el diagnostico de la consulta",
      timer: 1000, 
    });
  }
  return "camposValidos";
}


const limpiarFormularioConsulta=()=>{
  formConsulta.fechaConsulta.value="";
  formConsulta.motivoConsulta.value="" ;
  formConsulta.diagnosticoConsulta.value="";
}

botonEnviarSolicitud.onclick = async () => {
  Swal.fire({
    title: "Enviar Solicitud",
    text: "Desa enviar la solicitud de derivacion",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "si",
    cancelButtonText: "no",
  }).then(async (result) => {
    if (result.isConfirmed) {
      const con = await Swal.fire({
        title: "Solicitudn enviada",
        icon: "success",
      });
      if (con) {
        location.reload();
      }
    }
  });
};
const cargarDatos = (datos) => {
  nombre.innerHTML = datos.Nombre;
  apellido.innerHTML = datos.Apellido;
  paciente.innerHTML = datos.Nombre + " " + datos.Apellido;
};
const buscarPaciente = async () => {
  let dato = new FormData();

  dato.append("codigo", idPaciente);
  let enviar = await fetch("../php/buscarPaciente.php", {
    method: "POST",
    body: dato,
  });
  return enviar.json();
};

const obtenerIdPaciente = () => {
  idPaciente = boxIdPaciente.value;
};
