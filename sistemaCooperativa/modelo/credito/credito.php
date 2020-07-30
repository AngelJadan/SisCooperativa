<?php
include_once 'ciudad.php';
include_once '../../modelo/persona.php';

class Credito {

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

    private $tAmortizacion;
    private $nCuotas;

    private $tasa;
    private $interes;
    private $total;

    private $garante;
    private $proposito;
    private $edad;

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
    public function setTamortizacion($tAmortizacion){
        $this->tAmortizacion=$tAmortizacion;
    }
    public function getTamortizacion(){
        return $this->tAmortizacion;
    }
    public function setNcuotas($nCuotas){
        $this->nCuotas=$nCuotas;
    }
    public function getNcuotas(){
        return $this->nCuotas;
    }
    public function setTasa($tasa){
        $this->tasa=$tasa;
    }
    public function getTasa(){
        return $this->tasa;
    }
    public function setInteres($interes){
        $this->interes=$interes;
    }
    public function getInteres(){
        return $this->interes;
    }
    public function setTotal($total){
        $this->total=$total;
    }
    public function getTotal(){
        return $this->total;
    }
    public function setGarante($garante){
        $this->garante=$garante;
    }
    public function getGarante(){
        return $this->garante;
    }
    public function setProposito($proposito){
        $this->proposito=$proposito;
    }
    public function getProposito(){
        return $this->proposito;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function getEdad(){
        return $this->edad;
    }
}
?>