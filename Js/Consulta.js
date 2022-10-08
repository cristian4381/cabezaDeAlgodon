const formulario = document.querySelector('.Buscarpaciente')
const botonBuscar= document.getElementById("buscar");
const codigo =formulario.codigo;
const botonRegresar=document.getElementById("Regresar");
const botonDerivacion=document.getElementById("Derivacion");

botonDerivacion.onclick=async()=>{
    document.querySelector(".flex").classList.toggle("visible2");
    botonDerivacion.classList.toggle("oculto");
}
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
        const enviar= await fetch("php/buscarPaciente.php",{
            method: 'POST',
            body: datos
          });
          const respuesta = await enviar.json();
          if(respuesta){
            const con =await Swal.fire({
              icon: "success",
              text: "Paciente encontrado",
              confirmButtonColor: '#5da422',
            });
              if(con){
                codigo.value="";
                document.getElementById("busrcarF").classList.toggle("oculto")
                cargarDatos(respuesta);
                document.querySelector(".datosP").classList.toggle("visible");
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
    let paciente=document.getElementById("paciente");
    nombre.innerHTML=datos.Nombre;
    apellido.innerHTML=datos.Apellido;
    paciente.innerHTML=datos.Nombre+" " +datos.Apellido;
}
const Validar=async()=>{
    const validacion = await fetch ("php/validar.php");
    const sesion = await validacion.json();
    if(sesion=='error'){
      window.location.href="index.html";
    }
}
Validar();