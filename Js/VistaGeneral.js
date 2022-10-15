const botonConsulta = document.getElementById("consulta");
const botonFicha = document.getElementById("Ficha");

botonConsulta.onclick=async()=>{
    const con =await Swal.fire({
        icon: "success"
    });
    if(con){
      window.location.href="Consulta.php";
    }
}
botonFicha.onclick=async()=>{
    const con =await Swal.fire({
        icon: "success"
    });
    if(con){
      window.location.href="buscarFicha.html";
    }
}