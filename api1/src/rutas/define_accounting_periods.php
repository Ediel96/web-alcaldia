<?php
//GET activities plan
//ver todos
$app->get('/define_accounting_periods', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "select * from accounting_schema.define_accounting_periods;";
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

//agregar
$app->post('/define_accounting_periods', function($request, $response, array $args){

    $action = $request->getParam('actiond');
    $subperiod = $request->getParam('subperiod');
    $amountofperiod = $request->getParam('amountofperiod');
    $accounting_period = $request->getParam('accounting_period');
    $since = $request->getParam('since');
    $until = $request->getParam('until');

    $sql = "INSERT INTO accounting_schema.define_accounting_periods
            (actiond, accounting_period, since, untild, subperiod, amountofperiod) 
            VALUES( :actiond, :accounting_period, :since, :until, :subperiod, :amountofperiod)";

    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);

        $result->bindParam(':actiond', $action);
        $result->bindParam(':subperiod', $subperiod);
        $result->bindParam(':amountofperiod', $amountofperiod);
        $result->bindParam(':accounting_period', $accounting_period);
        $result->bindParam(':since' ,$since);
        $result->bindParam(':until' ,$until);

        $result->execute();
        echo json_encode("Datos guardados exitosamente");        
        
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }

});

//Eliminar
$app->delete('/define_accounting_periods/{id}', function($request, $response, array $args){

    $id = $request->getAttribute('id');
    $sql = "DELETE FROM accounting_schema.define_accounting_periods WHERE idp = $id";

    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);
        $result->execute(); 
        if($result->rowCount() >0 ){
            echo json_encode("Dato eliminado correctamente");
        }else{
            echo json_encode("No existe el id enviado");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }

});

//Editar
$app->post('/define_accounting_periods/{id}', function($request, $response, array $args){

    $id = $request->getAttribute('id');

    $action = $request->getParam('actiond');
    $subperiod = $request->getParam('subperiod');
    $amountofperiod = $request->getParam('amountofperiod');
    $accounting_period = $request->getParam('accounting_period');
    $since = $request->getParam('since');
    $until = $request->getParam('untild');

    $sql = "UPDATE accounting_schema.define_accounting_periods  
            SET 
            actiond = :action,
            subperiod = :subperiod,
            amountofperiod  = :amountofperiod,
            accounting_period = :accounting_period, 
            since = :since, 
            untild = :until 
            WHERE idp = $id;";

    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);

        $result->bindParam(':action',$action);
        $result->bindParam(':subperiod',$subperiod);
        $result->bindParam(':amountofperiod',$amountofperiod);
        $result->bindParam(':accounting_period',$accounting_period);
        $result->bindParam(':since',$since);
        $result->bindParam(':until',$until);

        $result->execute();

        echo json_encode("Datos guardados exitosamente $sql");        
        
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }

});


$app->get('/define_accounting_periods/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "select * from accounting_schema.define_accounting_periods WHERE idp = $id;";
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

