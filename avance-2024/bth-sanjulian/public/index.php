<?php

require '../vendor/autoload.php';

use SQLiteDatabase\Sqlite;

$estudiantes = [];
$unidadEducativaId = 0;

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	$unidadEducativaId = $_POST['unidad_educativa_id'];
	
	$query = 'SELECT e.registro, e.nombres, e.apellidos ';
	$query .= 'FROM matricula m, estudiante e, unidad_educativa ue ';
	$query .= 'where m.estudiante_id = e.id and ';
	$query .= 'm.unidad_educativa_id = ue.id and ue.id = ' . $unidadEducativaId;
	$query .= ' ORDER BY e.apellidos;';
	$estudiantes = Sqlite::fetchAll($query);
}

$unidadesEducativas = Sqlite::fetchAll('SELECT * FROM unidad_educativa;');
include '../templates/index.html';
