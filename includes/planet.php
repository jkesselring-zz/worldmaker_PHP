<?php

class Planet{
  private $_json_file = '../json/planet.js';
  private $planet;
  function __construct(){
    $tmp = json_decode(file_get_contents($this->_json_file));
    $this->planet = $tmp->planet;
 }

  function generate(){
    $prefix = $this->planet->prefix;
    $suffix = $this->planet->suffix;
    $designations = $this->planet->designations;

    $chance = mt_rand(0, 100);
    if($chance < 70)
      return $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)];
    elseif($chance >= 70 && $chance < 94)
    {
      return $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)] . $suffix[array_rand($suffix)];
    }
    else
    {
      return $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)] . $suffix[array_rand($suffix)] . " " .$designations[array_rand($designations)];
    }
  }

}
?>