<?php

require_once 'Modelo/especialidad.php';
require_once 'Modelo/paciente.php';
require_once 'Modelo/Turno.php';

$P =New paciente;
$P-> Id=1;
$P-> Nombre= "Alberto";
$P-> Apellido= "Juarez";
$P-> Documento=12123456;
$P-> Edad 
$P-> Email="aj@gmail.com";

$E1 =new especialidad;
$E1-> Id=1;
$E1-> Descripcion= "Clinica";

$E2 =new especialidad;
$E2-> Id=2;
$E2-> Descripcion= "Traumatologia";

$T =new Turno;
$T-> Id=1;
$T-> Fecha=01-06-2023;
$T-> Hora='17:00';
$T-> Medico="Armando Rodriguez";
$T-> Especialidad= $E1;

$T2=new Turno;
$T2-> Id=2;
$T2-> Fecha=01-07-2023;
$T2-> Hora= '18:00';
$T2-> Medico= "Graciela Mendez";
$T2-> Especialidad = $E2;

