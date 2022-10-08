<?php
session_start();
unset($_SESSION["S_Usuario"]);
session_destroy();
header("Location:../index.html");
?>