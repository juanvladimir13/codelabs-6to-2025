<?php

function saldoSuficiente(): void {
  $dineroEnBilletera = 100;
  $precioProducto = 25;
  
  if ($dineroEnBilletera > $precioProducto) {
    echo "puedo comprar producto";
  }
}

saldoSuficiente();

function solicitarPedidoPollo(): void
{
  $dineroSuficiente = true;
  $hayPollosAlaVenta = true;

  if (!$dineroSuficiente && $hayPollosAlaVenta) {
    echo "puedo comprar pollo";
    echo " porque hay existencias";
  }
}

solicitarPedidoPollo();
