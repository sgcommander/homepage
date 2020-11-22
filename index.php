<?php
//Inicio de sesion
session_start();

//Arrancamos el controlador principal
require 'libs/FrontController.php';
FrontController::main();
?>