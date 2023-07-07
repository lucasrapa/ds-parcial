<?php

class paciente {
    public $id;
    public $Nombre;
    public $Apellido;
    public $Documento;
    public $Edad;
    public $Email;
    public $PublicTurnos =array();
}

public function MostrarDatos();
public function getEdad();


{
    echo '<hr>';
echo 'Paciente';
echo '<hr>';
echo 'Id' $this->Id '<br>';
echo 'Nombre' $this-> Nombre '<br>';
echo 'Apellido' $this-> Apellido '<br>';
echo 'Documento' $this-> Documento '<br>';
echo 'Edad' $this -> Edad '<br>';
echo 'Email' $this-> Email '<br>';
echo '<hr>';

{
    echo 'Especialidad';
echo 'Id'  . $this->especialidad->Id '<br>';
echo 'Descripcion' . $this->especialidad->Descripcion '<br>';
echo '<hr>';

{
    echo 'Turno';
echo 'Id' . $this->Turno-> Id '<br>';
echo 'Fecha' . $this->Turno->Fecha '<br>';
echo 'Hora' . $this->Turno-> Hora '<br>';
echo 'Medico' . $this->Turno->Medico '<br>';
echo 'Especialidad' . $this->Turno-> '<br>';
echo '<hr>';
}
}
}




