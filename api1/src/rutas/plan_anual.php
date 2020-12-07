<?php
//GET todos los mp
$app->get('/plan_anual', function($request, $response, array $args){
    $sql = "SELECT id_plan_annual, cod_mp, unspsc, descripcion, fecha_estimada_inicio, duracion_contrato, vigencias_futuras, estado_solicitud, responsable, date_creation
	FROM strategic_new_schema.v_plan_annual;";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        
        if($result->rowCount() > 0){
            $clientes = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("No existen datos en plan anual de adquisiciones");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

//GET un registro mp
$app->get('/plan_anual/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');

    $sql = "SELECT id_plan_annual, cod_mp, unspsc, descripcion, fecha_estimada_inicio, duracion_contrato, vigencias_futuras, estado_solicitud, responsable, date_creation
	FROM strategic_new_schema.v_plan_annual where id_plan_annual=$id";
    
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        
        if($result->rowCount() > 0){
            $clientes = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("No existen datos en plan indicativo");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});