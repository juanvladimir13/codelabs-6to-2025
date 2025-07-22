<?php

function calcularPresupuesto(): void {
  $dineroBilletera = 100;
  $precioCena = 75;
  $laPersonaLoVale = false;

  if (($dineroBilletera > $precioCena) && !$laPersonaLoVale ) {
    echo "puedo invitar una cena...";
  }
}

calcularPresupuesto();

function irAJuegos(): void{
  $dineroSuficiente = true;

  if (!$dineroSuficiente) {
    echo "Puedo ir a los juegos";
    echo " con mis amig@s";
  }
}

irAJuegos();
