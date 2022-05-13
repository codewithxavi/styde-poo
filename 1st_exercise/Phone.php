<?php

/**
 * Clase Telefono
 */
class Phone
{
  var $model;
  var $color;
  var $company;
  function __construct($model, $color, $company)
  {
    $this->model   = $model;
    $this->color   = $color;
    $this->company = $company;
  }
  function call()
  {
    return 'Estoy llamando a otro móvil';
  }
  function sms()
  {
    return "Estoy enviando un mensaje de texto";
  }
}
$nokia = new Phone('Nokia', 'Blanco', 'Movistar');
