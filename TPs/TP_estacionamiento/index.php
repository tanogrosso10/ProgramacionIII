<?php
require 'vendor/autoload.php';
require 'clases/AccesoDatos.php';
require 'clases/usuario.php';

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

$app->get('/traertodos', function ($request, $response) {
    $usuarios = Usuario::TraerTodosLosUsuariosBD();
    return $response->withJson($usuarios);
});
$app->get('/traeruno/[{id}]', function ($request, $response, $args) {
          $uno = Usuario::TraerUnUsuarioBD($args['id']);
          return $response->withJson($uno);
        });
$app->post('/alta', function ($request, $response) {
    require_once("funciones/altaenBD.php");
    // return $response->write("alta.");
});
$app->delete('/baja', function ($request, $response) {
    return $response->write("delete.");
});
$app->put('/modificacion', function ($request, $response) {
    return $response->write("modificacion.");
});
$app->patch('/cambiarestado', function ($request, $response) {
    return $response->write("cambiarestado.");
});
$app->post('/validarusuario', function ($request, $response) {
    return $response->write("validarusuario.");
});




// $app->get('/funciones/[{id}]', function ($request, $response, $args) {
//          $sth = $this->db->prepare("SELECT * FROM tasks WHERE id=:id");
//         $sth->bindParam("id", $args['id']);
//         $sth->execute();
//         $todos = $sth->fetchObject();
//         return $this->response->withJson($todos);
//     });

// Run app
$app->run();
?>