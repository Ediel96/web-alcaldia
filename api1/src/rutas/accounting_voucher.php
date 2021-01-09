<?php
//GET activities plan
//ver todos
$app->get('/accounting_vouchers', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "select * from accounting_schema.accounting_vouchers;";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        
        if($result->rowCount() > 0){
            $clientes = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("No existen actividades ");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});


$app->get('/accounting_vouchers/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "select * from accounting_schema.accounting_vouchers WHERE id = $id;";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        
        if($result->rowCount() > 0){
            $clientes = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("No existen actividades ");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

//agregar
$app->post('/accounting_vouchers', function($request, $response, array $args){

    $accounting_account = $request->getParam('accounting_account');
    $third = $request->getParam('third');
    $detail = $request->getParam('detail');
    $description = $request->getParam('description');
    $cost_center = $request->getParam('cost_center');
    $debit = $request->getParam('debit');
    $credits = $request->getParam('credits');
    $dateofelaboration = $request->getParam('dateofelaboration');
    $type_account = $request->getParam('type_account');
    $nombre = $request->getParam('nombre');

    $sql = "INSERT INTO accounting_schema.accounting_vouchers
            (accounting_account, third, detail, description, cost_center, debit, credits, dateofelaboration, type_account , nombre)
            VALUES(:accounting_account, :third, :detail, :description, :cost_center, :debit, :credits, :dateofelaboration, :type_account, :nombre);";

        try{
            $db = new db();
            $db = $db->conectDB();
            $result = $db->prepare($sql);


            $result->bindParam(':accounting_account', $accounting_account);
            $result->bindParam(':third', $third);
            $result->bindParam(':detail', $detail);
            $result->bindParam(':description', $description);
            $result->bindParam(':cost_center' ,$cost_center);
            $result->bindParam(':debit' ,$debit);
            $result->bindParam(':credits' ,$credits);
            $result->bindParam(':dateofelaboration' ,$dateofelaboration);
            $result->bindParam(':type_account' ,$type_account);
            $result->bindParam(':nombre' ,$nombre);

            $result->execute();
            echo json_encode("Datos guardados exitosamente");        
            
            $result = null;
            $db = null;
        }catch(PDOException $e){
            echo '{"error" : {"text":'.$e->getMessage().'}';
        }

});

//Eliminar
$app->delete('/accounting_vouchers/{id}', function($request, $response, array $args){

    $id = $request->getAttribute('id');
    $sql = "DELETE FROM accounting_schema.accounting_vouchers WHERE id = $id";

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
$app->post('/accounting_vouchers/{id}', function($request, $response, array $args){

    $id = $request->getAttribute('id');
  
    $accounting_account = $request->getParam('accounting_account');
    $third = $request->getParam('third');
    $detail = $request->getParam('detail');
    $description = $request->getParam('description');
    $cost_center = $request->getParam('cost_center');
    $debit = $request->getParam('debit');
    $credits = $request->getParam('credits');
    $dateofelaboration = $request->getParam('dateofelaboration');
    $type_account = $request->getParam('type_account');
    $nombre = $request->getParam('nombre');

    $sql = "UPDATE accounting_schema.accounting_vouchers 
            SET 
            accounting_account = :accounting_account,
            third = :third,
            detail  = :detail,
            description = :description, 
            cost_center = :cost_center, 
            debit = :debit, 
            credits = :credits, 
            dateofelaboration = :dateofelaboration, 
            type_account = :type_account, 
            nombre = :nombre 
            WHERE id = $id;";

    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);


        $result->bindParam(':accounting_account', $accounting_account);
        $result->bindParam(':third', $third);
        $result->bindParam(':detail', $detail);
        $result->bindParam(':description', $description);
        $result->bindParam(':cost_center' ,$cost_center);
        $result->bindParam(':debit' ,$debit);
        $result->bindParam(':credits' ,$credits);
        $result->bindParam(':dateofelaboration' ,$dateofelaboration);
        $result->bindParam(':type_account' ,$type_account);
        $result->bindParam(':nombre' ,$nombre);

        $result->execute();
        echo json_encode("$sql");        
        
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }

});