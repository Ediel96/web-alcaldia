<?php
//GET activities plan
//ver todos
$app->get('/define_accounting_periods/year', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    $sql = "select  ayd.year_id, ayd.year_date, acc.active_date, ayd.active from accounting_schema.accounting_year_date ayd 
            inner join accounting_schema.accounting_active acc on acc.active_id  = ayd.active ";
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


//Desabilitar 
$app->post('/define_accounting_periods/year/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');

    $active = $request->getParam('active');


    $sql = "UPDATE accounting_schema.accounting_year_date 
            SET 
            active = :active  
            WHERE year_id = $id;";

    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);
        $result->bindParam(':active', $active);
        $result->execute();
        echo json_encode("Datos guardados exitosamente");        
        $result = null;
        $db = null;

    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

//Ver todos los meses del año
$app->get('/define_accounting_periods/month/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');
    
    $sql = "select * from accounting_schema.accounting_monthandyear_date amd 
        inner join accounting_schema.accounting_month_date amd2 on amd.mm_date = amd2.month_id
        where amd.yy_date = $id;";
    
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

//Guardar los cambios de mes año
$app->post('/define_accounting_periods/month/{idy}/{idm}', function($request, $response, array $args){
    $idy = $request->getAttribute('idy');
    $idm = $request->getAttribute('idm');

    $activemmyy = $request->getParam('activemm');
    $activemy = $request->getParam('activem');
    

    $sql = "UPDATE accounting_schema.accounting_monthandyear_date
            SET valueym = :activemy, valueyymm = :activemmyy
            WHERE mm_date = $idm AND yy_date = $idy";

    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);
        $result->bindParam(':activemy', $activemy);
        $result->bindParam(':activemmyy', $activemmyy);

        $result->execute();
        echo json_encode("Datos guardados exitosamente, $activemmyy , $activemy , $idy , $idm");        
        
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }

});

