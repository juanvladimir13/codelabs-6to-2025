<?php

/**
 * @author juanvladimir13 <juanvladimir13@gmail.com>
 * @see https://github.com/juanvladimir13
 */

require '../vendor/autoload.php';

use SQLiteDatabase\Sqlite;
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function () {
    include './menus.php';
    include './teachers.php';

    include '../templates/index.html';
});

$router->get('/categoria/(\d+)',function(int $id){
    echo $id;
});

$router->post('/logout', function () {

});

$router->set404(function () {
    echo '404';
    exit();
});

$router->run();
