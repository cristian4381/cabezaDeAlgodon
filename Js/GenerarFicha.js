const btGenerar = document.getElementById("generar");
const formulario= document.querySelector('.GenerarFicha');
/*const formulario = document.querySelector('.registro__form');*/

/*
const usuario = formulario.usuario;
const pass = formulario.pass;
const conPass = formulario.conPass;
const telefono = formulario.telefono;
const correo = formulario.correo;
const iden = formulario.iden;*/

const nombre = formulario.nombre;
const apellido = formulario.apellido;
const edad = formulario.edad;
const fechaVisita = formulario.fechaVisita;
const motivo =formulario.motivo;
const medicoT = formulario.medicoTratante;
const examen = formulario.examen;
const resultado = formulario.resultado;
const diagnostico =formulario.diagnostico;
const observaciones = formulario.observacion;
const medicamento= formulario.medicamento;
const fechaMedicamento = formulario.fechaMedicamento;
const uso = formulario.uso;

btGenerar.onclick = async (e) =>{
    e.preventDefault();
    console.log(formulario);

    const datos = new FormData(formulario);
    let Vnombre = nombre.value; 
    let Vapellido =	apellido.value; 
    let Vedad =	edad.value; 
    let VfechaVisita = fechaVisita.value;
    let Vmotivo = motivo.value; 
    let VmedicoT = medicoT.value; 
    let Vexamen = examen.value; 
    let Vresultado = resultado.value; 
    let Vdiagnostico = diagnostico.value;
    let Vobservaciones = observaciones.value;
    let Vmedicamento = medicamento.value;
    let VfechaMedicamento =	fechaMedicamento.value; 
    let Vuso = uso.value;

    /*var Vnombre =nombre.value;
    var Vapellido =apellido.value;
    var Vusuario =usuario.value;
    var Vpass =pass.value;
    var VconPass =conPass.value;
    var Vtelefono =telefono.value;
    var Vcorreo =correo.value;
    var Viden =iden.value;*/


    if(!Vnombre){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el nombre",
            timer: 1000, 
        });
    }
    if(!Vapellido){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el apellido",
            timer: 1000,
        });
    }
    if(!Vedad){
        return Swal.fire({
            icon: "error",
            text: "Ingrese la edad",
            timer: 1000, 
        });
    }
    if(!VfechaVisita){
        return Swal.fire({
            icon: "error",
            text: "Ingrese la fecha de la visita",
            timer: 1000,
        });
    }
    if(!Vmotivo){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el motivo de la visita",
            timer: 1000, 
        });
    }
    if(!VmedicoT){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el nombre del medito tratante",
            timer: 1000,
        });
    }
    if(!Vexamen){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el nombre del examen",
            timer: 1000, 
        });
    }
    if(!Vresultado){
        return Swal.fire({
            icon: "error",
            text: "Ingrese los resultados",
            timer: 1000,
        });
    }

    if(!Vdiagnostico){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el diagnostico",
            timer: 1000,
        });
    }
    if(!Vobservaciones){
        return Swal.fire({
            icon: "error",
            text: "Ingrese las observaciones",
            timer: 1000, 
        });
    }
    if(!Vmedicamento){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el nombre del medicamento",
            timer: 1000,
        });
    }
    if(VfechaMedicamento){
        return Swal.fire({
            icon: "error",
            text: "Ingrese la fecha en la que se receto el medicamento",
            timer: 1000,
        });
        
    }
    if(!Vuso){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el modo de aplicar el medicamento",
            timer: 1000,
        });
    }/*
    if(!Vcorreo){
        return Swal.fire({
            icon: "error",
            text: "Ingrese el correo",
            timer: 1000, 
        });
    }
    if(!Viden){
        return Swal.fire({
            icon: "error",
            text: "ingrese el numero de DPI O Pasaporte",
            timer: 1000,
        });
    }
*//*
    try{
        const enviar= await fetch("php/Registro.php",{
            method: 'POST',
            body: datos
        });
        const respuesta = await enviar.json();
        if(respuesta){
            Swal.fire({
                icon: "success",
                text: "Regristro Exitoso",
                timer: 2000, // <- Ocultar dentro de 0.7 segundos
            });
            nombre.value= apellido.value=usuario.value=pass.value=conPass.value=telefono.value=correo.value=iden.value='';
        }
        else{
            Swal.fire({
                icon: "error",
                text: "Ocurrio un error, Revise los datos",
            });
        }
    }
    catch(e){
        Swal.fire({
            icon: "error",
            title: "Error de servidor",
            text: "Inténtalo de nuevo. El error es: " + e,
        });
    }*/
};