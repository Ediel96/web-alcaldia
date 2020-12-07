<?php
// Conectando y seleccionado la base de datos  
$conn = pg_connect("host=sopo-2020 dbname=appalcaldia user=appalcaldia password=@pp@7c@7D1@")
    or die('No se ha podido conectar a la base de datos: ' . pg_last_error());
// Revisamos el estado de la conexion en caso de errores. 
if(!$conn) {
echo "<h3>Error: No se ha podido conectar a la base de datos</h3>";
} 
$url_service='https://pruebas.appalcaldia.website/api1/public/';
?>