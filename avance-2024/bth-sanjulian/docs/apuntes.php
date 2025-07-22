<?php

// Ejecuta una consulta SQL para insertar datos en todas las columnas de la tabla
/*$query = 'insert into persona values(?,?,?)';
$datos = [4,'juan', 'vladimir'];
Sqlite::executeQuery($query, $datos);*/

// Ejecuta una consulta SQL para insertar datos en algunas columnas de la tabla

// Retorna todos los datos encontrados


// Retorna todos los datos encontrados segun una condicion de busqueda
//$rows = Sqlite::fetchAll('select * from persona where id > ?;', [1]);
//var_dump($rows);

// Retorna el primer dato encontrado
//$rows = Sqlite::fetchOne('select * from persona;');
//var_dump($rows);

// Retorna el primer dato encontrado segun una condicion de busqueda
//$rows = Sqlite::fetchOne('select * from persona where nombres=?;',['juan']);
//var_dump($rows);

// Accede a una cela de una fila del registro buscado
//var_dump($rows['nombres']);