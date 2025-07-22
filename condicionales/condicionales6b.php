<?php

function irDeViaje(): void {
  $tengoVISA = false;
  $viajoSolo = true;

  if ($tengoVISA || $viajoSolo) {
    echo "viajo feliz a bolivia";
  }
}

irDeViaje();

function puedoViajar(): void {
  $presupuesto = 700;
  $paqueteAgencia = 600;
  $tengoVISA = false;

  if (($presupuesto > $paqueteAgencia) && $tengoVISA) {
    echo "puedo viajar...";
    echo " puedo relajarme";
  }
}

puedoViajar();

function procesarNotas(): void{
  $esFinalTrimestre = true;

  if (!$esFinalTrimestre) {
    echo "Se procesaran las notas";
    echo " se sube al sistema";
  }
}

procesarNotas();
