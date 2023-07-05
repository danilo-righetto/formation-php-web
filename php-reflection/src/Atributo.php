<?php

namespace Alura\Reflection;

use Attribute;

@@Attribute
class Atributo
{
  private int $valor;
  
  public function __construct(int $valor = null) {
    $this->valor = $valor;
  }
}