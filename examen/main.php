<?php

/* Crear una funcion llamada calcular gastos de almuerzo que tenga de
parametros precioSopa, precioSegundo, precioRefrezco y el resultado sea
el monto total */
function calcularGastosAlmuerzo (int $precioSopa, string $precioSegundo, int $precioRefrezco): int {
  return $precioRefrezco + $precioSopa;
}

$montoTotal = calcularGastosAlmuerzo(5, 12, 1);
var_dump($montoTotal);

/* Crear una funcion llamada cotizar producto, donde los parametros
sean el nombre del producto, cantidad, tiempo vigencia, fecha de registro, el valor de retorno sea un boolean */
function cotizarProducto (string $nombreProducto, int $cantidad, string $fechaRegistro, int $tiempoVigencia): bool {
  return true;
}

$res = cotizarProducto('Laptop', 2, '13-05-2025', 10);
var_dump($res);
