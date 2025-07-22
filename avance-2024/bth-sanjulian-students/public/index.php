<?php
require '../vendor/autoload.php';

use Bramus\Router\Router;
use SQLiteDatabase\Sqlite;

$router = new Router();

$router->get( '/archivo/(\w+)', function($nombre){
    $title = 'facebook';
    $usuario = [
        'title' => $nombre,
        'description' => 'I an venture capital',
        'imagen' => '/assets/images/tux.png'
    ];

    $menus = [
        ['link' => '/archivo/gervacio' , 'title'=> 'Archivo'],
        ['link' => '/archivo/erick' , 'title'=> 'Edicion'],
        ['link' => '/archivo/shirley' , 'title'=> 'Vista'],
        ['link' => '/ingresar' , 'title'=> 'Login'],
    ];

    $content = '../templates/usuario.html';
    include '../templates/layout/base.html';
});

$router->get( '/ingresar', function(){
    $title = 'Ingresar al sistema';
    $content = '../templates/login.html';
    include '../templates/layout/base.html';
});

$router->post( '/login', function(){
    $request = $_POST;
    if ($request['contrasenia'] == '123') {
        header('Location: /');
    }else {
        header('Location: /ingresar');
    }
});

$router->get('/', function () {
    $menus = [
        ['link' => '/archivo/erick' , 'title'=> 'Archivo'],
        ['link' => '/archivo/shirley' , 'title'=> 'Edicion'],
        ['link' => '/archivo/gerbacio' , 'title'=> 'Vista'],
        ['link' => '/ingresar' , 'title'=> 'Login'],
    ];

    $usuario = [
        'title' => 'Juan',
        'description' => 'I an venture capital',
        'imagen' => '/assets/images/tux.png'
    ];

    $queryEstudiante = "SELECT * FROM estudiante ORDER BY apellidos DESC LIMIT 13";
    $estudiantes = Sqlite::fetchAll($queryEstudiante);

    include '../templates/index.html';
});

$router->get('/home/(\d+)/(\w+)', function ($id, $name) {
    echo "Hola mundo" . $id . $name;
});

$router->set404(function () {
    header('Location: /');
});

$router->run();
