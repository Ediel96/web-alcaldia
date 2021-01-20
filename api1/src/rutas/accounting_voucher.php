<?php
//GET activities plan

//ver todos todo los años
$app->get('/accounting_vouchers', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "select av.id as id_cod, * from accounting_schema.accounting_vouchers av 
            inner join accounting_schema.t_voucher_type tv on tv.id = typea;";
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

// mostrar todo los tipos
$app->get('/accounting_vouchers/type', function($request, $response, array $args){
    $id = $request->getAttribute('id');

    $sql = "SELECT id, cod, description
            FROM accounting_schema.t_voucher_type;";

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

// mostrar todas las cuenta contables
$app->get('/accounting_vouchers/accounting', function($request, $response, array $args){
    $id = $request->getAttribute('id');

    $sql = "SELECT cod_account, "."name".", id_account_type, id_balance_type, id_nature, cod_group, type_account
            FROM accounting_schema.t_account;";

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

//ver la relacion de la cuentas con lo terciarios
$app->get('/accounting_vouchers/accounting/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "select * from accounting_schema.accounting_voucherssub avb
            inner join accounting_schema.accounting_vouchers avbs on avb.cont_vou_id = avbs.id 
            where avbs.id = $id";
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


//mostrar las cuentas tercerias
$app->get('/accounting_vouchers/tree/{id_cont}', function($request, $response, array $args){
    $id_cont = $request->getAttribute('id_cont');
    
    $sql = "SELECT cod_account_sub, "."name".", id_balance_type, id_nature, cod_account, type_account
    FROM accounting_schema.t_account_sub
    where cod_account = $id_cont;";
    
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

//agregar count
$app->post('/accounting_vouchers/count', function($request, $response, array $args){

    $dateofelaboration = $request->getParam('date');
    $nameuser = $request->getParam('nameuser');
    // $active = $request->getParam('detail');
    $typea = $request->getParam('type');
    $val = $request->getParam('val');
    $datenow = $request->getParam('datenow');

    $sql = "INSERT INTO accounting_schema.accounting_vouchers
            (dateofelaboration, nameuser, active, typea, val,  datenow)
            VALUES( :dateofelaboration, :nameuser, true, :typea, :val,  :datenow);";

        try{
            $db = new db();
            $db = $db->conectDB();
            $result = $db->prepare($sql);

            $result->bindParam(':dateofelaboration', $dateofelaboration);
            $result->bindParam(':nameuser', $nameuser);
            $result->bindParam(':typea', $typea);
            $result->bindParam(':val', $val);
            $result->bindParam(':datenow' ,$datenow);

            $result->execute();

            try{
                $query = "SELECT * FROM accounting_schema.accounting_vouchers av 
                        WHERE av.datenow = '$datenow';";
    
                $data = new db();
                $data = $data->conectDB();
                $response = $data->prepare($query);
                $response->execute();

                if($result->rowCount() > 0){
                    $data = $response->fetchAll(PDO::FETCH_OBJ);
                    echo json_encode($data);
                }else{
                    echo json_encode("Error al traer el id");
                }

            }catch(PDOException $e){
                echo '{"error" : {"text":'.$e->getMessage().'}';
            }        
            
            $result = null;
            $db = null;

        }catch(PDOException $e){
            echo '{"error" : {"text":'.$e->getMessage().'}';
        }
});

//agregar count_sub
$app->post('/accounting_vouchers/count_sub', function($request, $response, array $args){

    $cod_account_id = $request->getParam('cod_account_id');
    $cod_account_sub_id = $request->getParam('cod_account_sub_id');
    $description = $request->getParam('description');
    $debit = $request->getParam('debit');
    $credit = $request->getParam('credit');
    $datenow = $request->getParam('datenow');
    $cont_vou_id = $request->getParam('id_contu');


    $sql = "INSERT INTO accounting_schema.accounting_voucherssub
            (cont_vou_id, cod_account_id, cod_account_sub_id, description, debit, credit, datenow)
            VALUES(:cont_vou_id, :cod_account_id, :cod_account_sub_id, :description, :debit, :credit, :datenow);";

        try{
            $db = new db();
            $db = $db->conectDB();
            $result = $db->prepare($sql);

            $result->bindParam(':cont_vou_id', $cont_vou_id);
            $result->bindParam(':cod_account_id', $cod_account_id);
            $result->bindParam(':cod_account_sub_id', $cod_account_sub_id);
            $result->bindParam(':description', $description);
            $result->bindParam(':debit', $debit);
            $result->bindParam(':credit', $credit);
            $result->bindParam(':datenow', $datenow);

            $result->execute();
            echo json_encode("Datos guardados exitosamente");        
            
            $result = null;
            $db = null;
        }catch(PDOException $e){
            echo '{"error" : {"text":'.$e->getMessage().'}';
        }
});


//

//Eliminar
$app->delete('/accounting_vouchers/{id}', function($request, $response, array $args){

    // $id = $request->getAttribute('id');
    // $sql = "DELETE FROM accounting_schema.accounting_vouchers WHERE id = $id";

    // try{
    //     $db = new db();
    //     $db = $db->conectDB();
    //     $result = $db->prepare($sql);
    //     $result->execute(); 
    //     if($result->rowCount() >0 ){
    //         echo json_encode("Dato eliminado correctamente");
    //     }else{
    //         echo json_encode("No existe el id enviado");
    //     }
    //     $result = null;
    //     $db = null;
    // }catch(PDOException $e){
    //     echo '{"error" : {"text":'.$e->getMessage().'}';
    // }

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