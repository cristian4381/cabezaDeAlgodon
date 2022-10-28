const formulario = document.querySelector('.Buscarpaciente')
const botonBuscar= document.getElementById("buscar");
const botonRegresar=document.getElementById("Regresar");
const codigo =formulario.codigo;

botonRegresar.onclick = async() =>{
    const con =await Swal.fire({
        icon: "success"
    });
    if(con){
      location.reload();
        
    }
}
botonBuscar.onclick = async(e) =>{
    e.preventDefault();
    const datos = new FormData(formulario);
    if(!codigo.value){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el codigo del paciente",
            timer: 1000, 
          });
    }
    try {
        const enviar= await fetch("../php/buscarFicha.php",{
            method: 'POST',
            body: datos
          });
          const respuesta = await enviar.json();
          if(respuesta){
            const con =await Swal.fire({
              icon: "success",
              text: "Ficha encontrada",
              confirmButtonColor: '#5da422',
            });
              if(con){
                codigo.value="";
                document.getElementById("busrcarF").classList.toggle("oculto")
                cargarDatos(respuesta);
                document.getElementById("infoFicha").classList.toggle("visible");
              }             
            }
            else{
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
}
const cargarDatos=(datos)=>{
    let nombre=document.getElementById("nombre");
    let apellido=document.getElementById("apellido");
    let edad=document.getElementById("edad");
    let fechaVisita= document.getElementById("fechaVisita");
    let motivo= document.getElementById("motivo");
    let medicoT = document.getElementById("NombreUsuario");
    let examen= document.getElementById("examen");
    let resultado= document.getElementById("resultado");
    let diagnostico= document.getElementById("diagnostico");
    let observaciones= document.getElementById("observacion");
    let medicamento= document.getElementById("medicamento");
    let fechaMedicamento= document.getElementById("fechaMedicamento"); 
    let uso= document.getElementById("uso"); 
    nombre.innerHTML=datos.Nombre;
    apellido.innerHTML=datos.Apellido;
    edad.innerHTML=datos.edad;
    fechaVisita.innerHTML=datos.Fecha_Visita;
    motivo.innerHTML=datos.Motivo;
    medicoT.innerHTML=datos.Nombre_Medco; 
    examen.innerHTML=datos.Examen;
    resultado.innerHTML=datos.resultado;
    diagnostico.innerHTML=datos.Diagnostico;
    observaciones.innerHTML=datos.Observaciones;
    medicamento.innerHTML=datos.Nombre_Medicamento;
    fechaMedicamento.innerHTML=datos.Fecha_Recetado; 
    uso.innerHTML=datos.ModoUso;
}
/*
const Validar=async()=>{
  const validacion = await fetch ("../php/validar.php");
  const sesion = await validacion.json();
  if(sesion=='error'){
    window.location.href="index.html";
  }
}
Validar();*/