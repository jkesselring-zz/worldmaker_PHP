<?php
class Name{
  private $_json_file = '../json/name.js';
  private $name;

  function __construct(){
    $tmp = json_decode(file_get_contents($this->_json_file));
    $this->name = $tmp->name;
  }

  function generate(){
    $firstName = $this->name->firstName;
    $surname = $this->name->surname;
    $suffix = $this->name->suffix;

    $name = $firstName[array_rand($firstName)] . ' ' . $surname[array_rand($surname)];

    //Randomly spice the name up with a suffix. Woo!
    if(mt_rand(0, 100) > 75)
      $name .= ', ' . $suffix[array_rand($suffix)];
    return $name;
  }

}
?>