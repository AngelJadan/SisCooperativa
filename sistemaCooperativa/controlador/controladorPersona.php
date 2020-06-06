<?php
include_once '/conexiondb/conexiondb.php';
include_once '/modelo/persona.php';


$persona=new Persona();

class ControladorPersona extends conexion{

    /**
     * Guarda los datos de la clase persona en la base de datos.
     * @param Recibe los datos de la persona.
     * @return Retorna un mensaje de que si se guardo o no los datos.
     */
    public function insertarPersona($persona){
        $this->persona=$persona;
        $resultado=$this->conexion->query("INSERT INTO personas VALUES(null,'$persona->getNombre',
        '$persona->getApellido','$persona->getIdentificacion','$persona->getCorreo','$persona->getDireccion','$persona->getTelefono')")or die($this->conexion->error);
        if($resultado){
            return 'Datos de la persona guardados correctamente';
        }else{
            return 'No se pudo guardar los datos de la persona.';
        }
    }
    /**
     * @return Devuelve un los datos de todas las personas de la base de datos.
     */
    public function listarPersona(){
        $resultado=$this->conexion->query("SELECT * FROM personas");
        return $this->resultado;
    }

    public function eliminarPersona(){
    }

    public function buscarPersona(){
    }

    public function actualizarPersona(){
    }
}
?>