<?php
include_once "controladorCredito.php";

$ccred=new ControladorCredito();
$resultado=$ccred->listaCreditosSolicitados();
$json= array();
            foreach($resultado as $key =>$value){
                $json[]=array(
                    'id'=>$value['cre_id'],
                    'identificacion'=>$value['Personas_per_identificacion'],
                    'amortizacion'=>$value['cre_tipo_amortizacion'],
                    'monto'=>$value['cre_monto'],
                    'plazo'=>$value['cre_plazo'],
                    'cuotas'=>$value['cre_numero_cuotas'],
                    'estado'=>$value['cre_estado'],
                    'interes'=>$value['cre_interes'],
                    'tasa'=>$value['cre_intereses_p'],
                    'actividad'=>$value['cre_act_laboral'],
                    'empresa'=>$value['cre_empresa'],
                    'dirempresa'=>$value['cre_dir_empresa'],
                    'tiempoempleo'=>$value['cre_tiempo_empleo'],
                    'ingreso'=>$value['cre_ingreso'],
                    'tipo'=>$value['cre_tipo'],
                    'proposito'=>$value['cre_proposito'],
                    'avaluo'=>$value['cre_avaluo'],
                    'garante'=>$value['cre_garante'],
                    'edad'=>$value['cre_edad'],
                    'total'=>$value['cre_total']
                );                
            }
            echo json_encode($json);