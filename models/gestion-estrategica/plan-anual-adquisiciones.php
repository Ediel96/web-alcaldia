<?php
$module = $_GET['mod']; 
$section = $_GET['sec'];
$_SESSION["module"] = "Gestión estratégica";
$_SESSION["section"] = "Plan anual de adquisiciones";
$url_service_information=$url_service.'general_information';
$data = json_decode( file_get_contents($url_service_information), true );

$url_service_plan=$url_service.'plan_anual';
$data_plan_anual = json_decode( file_get_contents($url_service_plan), true );
?>