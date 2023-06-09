<?php


class Persona {


public $Nombre;
public $Direccion;
public $Documento;
public $Edad;
public $Nacionalidad;

public function MostrarDatos(){

    
    
    echo 'persona direccion: '. $this->Direccion . '<br>';
    echo 'persona Nombre: '. $this->Nombre . '<br>';
    echo 'persona documento: '. $this->Documento . '<br>';
    echo 'persona edad : '. $this->Edad . '<br>';
    echo  '<br>';
    echo 'nacionalidad id: '. $this->Nacionalidad->Id . '<br>';
    echo 'nacionalidad descripcion: '. $this->Nacionalidad->Descripcion . '<br>';
}


}
