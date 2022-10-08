let formulario = document.getElementById("FormLogin")
let usuario=formulario.usuario;
let pass=formulario.pass;
const bt=document.getElementById("Login")

const Validar=async()=>{
  const validacion = await fetch ("php/validar.php");
  const sesion = await validacion.json();
  if(sesion=='true'){
    window.location.href="buscarFicha.html";
  }/*else{
    document.getElementById("lista").classList.toggle("mostrar");
  }*/
}
Validar();

bt.onclick = async(e) =>{
    e.preventDefault();
    const datos = new FormData(formulario);
    var $usuario=usuario.value;
    var $pass=pass.value;
    if(!$usuario){
      return Swal.fire({
        icon: "error",
        text: "Ingrese el usuario",
        timer: 1000, 
      });
    }
    if(!$pass){
      return Swal.fire({
        icon: "error",
        text: "Ingrese la contraseña",
        timer: 1000, 
      });
    }
    try{
        const enviar= await fetch("php/decodificar.php",{
        method: 'POST',
        body: datos
      });
      const respuesta = await enviar.json();
      if(respuesta=="true"){
        const con =await Swal.fire({
          icon: "success",
          text: "USUARIO Y CONTRASEÑA CORRECTA",
          confirmButtonColor: '#5da422',
        });
          if(con){
            usuario.value="";
            pass.value="";
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
    catch(e){
        Swal.fire({
        icon: "error",
        title: "Error de servidor",
        text: "Inténtalo de nuevo. El error es: " + e,
      });
    }
};

  

