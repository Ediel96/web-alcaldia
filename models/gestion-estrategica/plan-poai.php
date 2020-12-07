<?php
$module = $_GET['mod']; 
$section = $_GET['sec'];
$_SESSION["module"] = "Gestión estratégica";
$_SESSION["section"] = "Plan operativo POAI";

$url_service=$url_service.'plan_indicativo';
$data_plan_indicativo = json_decode( file_get_contents($url_service), true );
?>