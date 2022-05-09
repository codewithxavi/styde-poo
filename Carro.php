<?php

/**
 * Clase Carro
 */
class Carro
{
  var $color;
  var $puertas;
  var $modelo;
  var $marca;
  function __construct($color, $puertas, $modelo, $marca)
  {
    $this->color = $color;
    $this->puertas = $puertas;
    $this->modelo = $modelo;
    $this->marca = $marca;
  }
  function acelerar()
  {
    return 'bbrrruuuuuummm';
  }
  function pitar()
  {
    return "pi pi pi pi pi";
  }
}
$nokia = new Carro('Blanco', 4, '370Z', 'Nissan');
