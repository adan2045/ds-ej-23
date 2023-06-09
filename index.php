
<?php

require_once 'modelos/persona.php';
require_once 'modelos/nacionalidad.php';





$m=new Nacionalidad;
$m->Id=45654;
$m->Descripcion='pais de nacimiento';


$p=new Persona();
$p->Edad=30;
$p->Nombre='juan carlos';
$p->Documento=33847857;
$p->Direccion='j.m de rosas 1184';
$p->Nacionalidad=$m;

$p->MostrarDatos();


