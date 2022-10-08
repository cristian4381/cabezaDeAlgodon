<?php
session_start();


if(isset($_SESSION["S_Usuario"]) == true){
    echo json_encode('true');
}
else{
    echo json_encode('error');
}

?>