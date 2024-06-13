<?php
namespace Dummy\Mobil;

class Honda extends Mobil {
   protected $efisiensi = 15;

   function getEfisiensi(){
    return $this->efisiensi;
   }
}