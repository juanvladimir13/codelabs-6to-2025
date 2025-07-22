<?php
$usuario = 'Juan';
$hobby = 'Programar';

$estudiante = [
  'nombres' => 'Juan Vladimir',
  'edad' => 13,
  'editable' => true,
  'carnet' => '85246679'
];

$estudiantesDB = [
  ['nombres' => 'Marisol', 'apellidos'=> 'Reyna'],
  ['nombres' => 'Anibal', 'apellidos'=> 'Arce']
];

$cursosDB = [
  ['curso' => 'QUINTO', 'paralelo' => 'A' ] ,
  ['curso' => 'SEXTO', 'paralelo' => 'B'],
  ['curso' => 'CUARTO', 'paralelo' => 'C'],
];

include './index.html';


