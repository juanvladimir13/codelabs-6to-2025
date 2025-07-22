<?php

require '../vendor/autoload.php';

use SQLiteDatabase\Sqlite;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Inserta una nueva unidad educativa
  $sie = $_POST['sie'];
  $nombre = $_POST['nombre'];
  $dependencia = $_POST['dependencia'];

  $query = 'insert into unidad_educativa (sie,nombre,dependencia) values(?,?,?)';
  $datos = [$sie, $nombre, $dependencia];
  Sqlite::executeQuery($query, $datos);
}

// Retorna todos los datos encontrados
$query = 'SELECT ue.id, ue.sie, ue.nombre, ue.dependencia FROM unidad_educativa ue ORDER BY ue.nombre';
$unidadesEducativas = Sqlite::fetchAll($query);
include '../templates/unidadeducativa.html';