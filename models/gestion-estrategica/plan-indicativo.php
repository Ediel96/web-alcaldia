<?php
$module = $_GET['mod']; 
$section = $_GET['sec'];
$_SESSION["module"] = "Gestión estratégica";
$_SESSION["section"] = "Plan indicativo";

$url_service=$url_service.'plan_indicativo';
$data_plan_indicativo = json_decode( file_get_contents($url_service), true );

/*$result = pg_query($conn, "SELECT id_poai_font, name_poai_font FROM budget_schema.t_poai_font;");
while ($row = pg_fetch_array($result)) {
    echo $row['id_poai_font']." ";
    echo $row['name_poai_font']."<br>";
}*/  
// Close connection
pg_close($conn);
?>