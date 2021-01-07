<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//GET todos los clientes
$app->get('/clientes', function(Request $request, Response $response){
    $sql = "SELECT * FROM public.user";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->query($sql);
        
        if($result->rowCount() > 0){
            $clientes = $result->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("No existen clientes");
        }
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

//Post crear clientes
$app->post('/clientes/nuevo', function(Request $request, Response $response){
    $id = $request->getParam('id');
    $firstname = $request->getParam('firstname');
    $lastname = $request->getParam('lastname');
    $email = $request->getParam('email');
    $city = $request->getParam('city');
    $country = $request->getParam('country');
    $year = $request->getParam('year');

    $sql = "INSERT INTO public.user (id,firstname,lastname,email,city,country,year) 
            values (:id,:firstname,:lastname,:email,:city,:country,:year)";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);

        $result->bindParam(':id',$id);
        $result->bindParam(':firstname',$firstname);
        $result->bindParam(':lastname',$lastname);
        $result->bindParam(':email',$email);
        $result->bindParam(':city',$city);
        $result->bindParam(':country',$country);
        $result->bindParam(':year',$year);

        $result->execute();
        echo json_encode("Datos guardados exitosamente");        
        
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

//PUT modificar clientes
$app->put('/clientes/{id}', function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    $firstname = $request->getParam('firstname');
    $lastname = $request->getParam('lastname');
    $email = $request->getParam('email');
    $city = $request->getParam('city');
    $country = $request->getParam('country');
    $year = $request->getParam('year');

    $sql = "UPDATE public.user SET 
            firstname = :firstname,
            lastname = :lastname,
            email = :email,
            city = :city,
            country = :country,
            year = :year
            where id = $id";
    try{
        $db = new db();
        $db = $db->conectDB();
        $result = $db->prepare($sql);

        $result->bindParam(':firstname',$firstname);
        $result->bindParam(':lastname',$lastname);
        $result->bindParam(':email',$email);
        $result->bindParam(':city',$city);
        $result->bindParam(':country',$country);
        $result->bindParam(':year',$year);

        $result->execute();
        echo json_encode("Datos editados exitosamente");        
        
        $result = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

//DELETE cliente
$app->delete('/clientes/{id}', function(Request $request, Response $response){
    $id = $request->getAttribute('id');

    $sql = "DELETE FROM public.user WHERE id = $id";

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


$app->post('/add', function ($request, $response, $args) {
    $sql = "INSERT INTO dim.dim_city   (id_dim_country, city, city_status) VALUES ( :id_country, :city, '1');";
    $db = getDB();
    $stmt = $db->prepare($sql);
    
    $body = $request->getBody();
    $form_data =$body;
    $city=$form_data['city'];
    $id_country=$form_data['id_country'];
    $stmt->bindParam(':id_country', $id_country, PDO::PARAM_INT);
    $stmt->bindParam(':city', $city);
    $stmt->execute();
    $id_city= $db->lastInsertId();
    $db = null;
    echo json_encode($id_city);
    });