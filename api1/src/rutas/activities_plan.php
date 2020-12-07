<?php
//GET activities plan
$app->get('/activities_plan/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "SELECT ac.id, ac.id_mp, ac.description, ac.contractual_object, sm.name
    FROM strategic_new_schema.t_activity_poai ac 
    inner join strategic_new_schema.t_selection_mode sm on sm.id= ac.id_selection_mode	
    where id_mp=$id order by ac.id;";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        
        if($result->rowCount() > 0){
            $clientes = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("No existen actividades en este plan");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});