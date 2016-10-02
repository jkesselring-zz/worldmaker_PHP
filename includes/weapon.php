<?php
class Weapon{
  private $_json_file = '../json/weapon.js';
  private $weapon;

  function __construct(){
    $tmp = json_decode(file_get_contents($this->_json_file));
    $this->weapon = $tmp->weapon;
  }

  public function generate()
  {
    $make = $this->weapon->make;
    $type = $this->weapon->type;
    $element = $this->weapon->element;
    $modifier = mt_rand(1, 3);
    $chance = mt_rand(0, 100);
    $weapon = $make[array_rand($make)] . ' ' . $type[array_rand($type)];
    if($chance > 98)
      $weapon .= ' of ' . $element[array_rand($element)];
    if ($chance > 85)
      $weapon .= ' + ' . $modifier;
    return $weapon;
  }

}
?>