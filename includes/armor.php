<?php
class Armor{
  private $_json_file = '../json/armor.js';
  private $armor;

  function __construct(){
    $tmp = json_decode(file_get_contents($this->_json_file));
    $this->armor = $tmp->armor;
  }

  public function generate() {
    $make = $this->armor->make;
    $type = $this->armor->type;
    $element = $this->armor->element;
    $modifier = mt_rand(1, 3);
    $chance = mt_rand(0, 100);
    $armor = $make[array_rand($make)] . ' ' . $type[array_rand($type)];
    if($chance > 98)
      $armor .= ' of ' . $element[array_rand($element)];
    if ($chance > 85)
      $armor .= ' + ' . $modifier;
    return $armor;
  }

}
?>