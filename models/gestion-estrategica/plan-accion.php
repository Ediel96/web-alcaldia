<?php
$module = $_GET['mod']; 
$section = $_GET['sec'];
$section = $_GET['item'];
$_SESSION["module"] = "Gestión estratégica";
$_SESSION["section"] = "Plan de acción";

$url_service_plan_accion=$url_service.'plan_indicativo';
$data_plan_accion = json_decode( file_get_contents($url_service_plan_accion), true );

$url_detalle_plan_accion=$url_service.'plan_accion/'.$section;
$detalle_plan_accion = json_decode( file_get_contents($url_detalle_plan_accion), true );

$url_activities_plan_accion=$url_service.'activities_plan/'.$section;
$activities_plan_accion = json_decode( file_get_contents($url_activities_plan_accion), true );

$total=$detalle_plan_accion[0]['cof_dept']+$detalle_plan_accion[0]['cof_nacion']+$detalle_plan_accion[0]['cof_credito']+$detalle_plan_accion[0]['cof_otros']+$detalle_plan_accion[0]['rec_propios']+$detalle_plan_accion[0]['alimentacion_escolar']+$detalle_plan_accion[0]['apsb']+$detalle_plan_accion[0]['cultura']+$detalle_plan_accion[0]['deporte']+$detalle_plan_accion[0]['educacion']+$detalle_plan_accion[0]['libre_destinacion']+$detalle_plan_accion[0]['libre_inversion']+$detalle_plan_accion[0]['rio_magdalena']+$detalle_plan_accion[0]['pri_infancia']+$detalle_plan_accion[0]['salud']+$detalle_plan_accion[0]['regalias']+$detalle_plan_accion[0]['funcionamiento']+$detalle_plan_accion[0]['gestionados'];
?>