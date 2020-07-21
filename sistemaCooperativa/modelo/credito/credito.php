<?php
include_once 'ciudad.php';
include_once '../../modelo/persona.php';

class Credito {
    //private $tipoDocumento;
    //private $documento;
    //private $nombre;
    //private $apellido;
    //private $sexo;
    //private $email;
    //private $telefono;
    //private $estadoCivil;
    //private $direccion;

    private $tipoCredito;
    private $actLaboral;
    private $nomEmpresa;
    private $dirEmpresa;
    private $actEmpresa;
    private $ingreso;
    private $tiempo;
    private $avaluo;
    private $monto;
    private $plazo;

    private $copiaCedula;
    private $copiaPlanilla;
    private $copiaRol;
    private $estado;

    private $ciudad;
    private $persona;
    public function __construct()
    {
        $this->ciudad=new Localidad();
        $this->persona=new Persona();
    }
    public function credito(){}
    public function getTipoCredito(){
        return $this->tipoCredito;
    }
    public function setTipoCredito($tCredito){
        $this->tipoCredito=$tCredito;
    }
    /*public function getTipoDocumeto(){
        return $this->tipoDocumento;
    }
    public function setTipoDocumento($tDocumento){
        $this->tipoDocumento=$tDocumento;
    }
    public function setDocumento($documento){
        $this->documento=$documento;
    }
    public function getDocumento(){
        return $this->documento;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getApllido(){
        return $this->apellido;
    }
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setEstCivil($estadoCivil){
        $this->estadoCivil=$estadoCivil;
    }
    public function getEstadoCivil(){
        return $this->estadoCivil;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public  function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getTelefono(){
        return $this->telefono;
    }*/
    public function setActLaboral($actLaboral){
        $this->actLaboral=$actLaboral;
    }
    public function getActLaboral(){
        return $this->actLaboral;
    }
    public function setNomEmpresa($nomEmpresa){
        $this->nomEmpresa=$nomEmpresa;
    }
    public function getNomEmpresa(){
        return $this->nomEmpresa;
    }
    public function setDirEmpresa($dirEmpresa){
        $this->dirEmpresa=$dirEmpresa;
    }
    public function getDirEmpresa(){
        return $this->dirEmpresa;
    }
    public function setActEmpresa($actEmpresa){
        $this->actEmpresa=$actEmpresa;
    }
    public function getActEmpresa(){
        return $this->actEmpresa;
    }
    public function setIngreso($ingreso){
        $this->ingreso=$ingreso;
    }
    public function getIngreso(){
        return $this->ingreso;
    }
    public function setTiempo($tiempo){
        $this->tiempo=$tiempo;
    }
    public function getTiempo(){
        return $this->tiempo;
    }
    public function setAvaluo($avaluo){
        $this->avaluo=$avaluo;
    }
    public function getAvaluo(){
        return $this->avaluo;
    }
    public function setMonto($monto){
        $this->monto=$monto;
    }
    public function getMonto(){
        return $this->monto;
    }
    public function setPlazo($plazo){
        $this->plazo=$plazo;
    }
    public function getPlazo(){
        return $this->plazo;
    }
    public function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
    public function setPerona($persona){
        $this->persona=$persona;
    }
    public function getPersona(){
        return $this->persona;
    }
    public function setCopiaCedula($copiaCedula){
        $this->copiaCedula=$copiaCedula;
    }
    public function getCopiaCedula(){
        return $this->copiaCedula;
    }
    public function setCopiaPlanilla($copiaPlanilla){
        $this->copiaPlanilla=$copiaPlanilla;
    }
    public function getCopiaPlanilla(){
        return $this->copiaPlanilla;
    }
    public function setCopiaRol($copiaRol){
        $this->copiaRol=$copiaRol;
    }
    public function getCopiaRol(){
        return $this->copiaRol;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function getEstado(){
        return $this->estado;
    }
}
?>