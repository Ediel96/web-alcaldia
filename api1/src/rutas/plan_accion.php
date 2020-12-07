<?php
//GET todos los mp
$app->get('/plan_accion', function($request, $response, array $args){
    $sql = "SELECT id,cod_mp, escenario_cambio, prospective, escenario_apuesta, code_fut, sector, cod_sector, meta_bienestar, indicador_bienestar, bpin, programa_presupuestal, cod_program_presupuestal, pdm_indicator, id_mga, producto_mga, cod_ind_mga, indicador_mga, meta_pdm, linea_base, meta_cuatrienio, meta_vigencia, secretarie, valor_esperado, valor_ejecutado, cof_dept, cof_nacion, cof_credito, cof_otros, rec_propios, alimentacion_escolar, apsb, cultura, deporte, educacion, libre_destinacion, libre_inversion, rio_magdalena, pri_infancia, salud, regalias, funcionamiento, gestionados
	FROM strategic_new_schema.v_indicative_plan";
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

//GET un registro mp
$app->get('/plan_accion/{id}', function($request, $response, array $args){
    $id = $request->getAttribute('id');

    $sql = "SELECT id, cod_mp, escenario_cambio, prospective, escenario_apuesta, code_fut, sector, cod_sector, meta_bienestar, indicador_bienestar, bpin, programa_presupuestal, cod_program_presupuestal, pdm_indicator, id_mga, producto_mga, cod_ind_mga, indicador_mga, meta_pdm, linea_base, meta_cuatrienio, meta_vigencia, secretarie, valor_esperado, valor_ejecutado, cof_dept, cof_nacion, cof_credito, cof_otros, rec_propios, alimentacion_escolar, apsb, cultura, deporte, educacion, libre_destinacion, libre_inversion, rio_magdalena, pri_infancia, salud, regalias, funcionamiento, gestionados
	FROM strategic_new_schema.v_plan_accion where id=$id";
    
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        
        if($result->rowCount() > 0){
            $clientes = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("No existen datos en plan acción");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});