<?php
class Plot{
  private $_json_file = '../json/plot.js';
  private $plot;

  function __construct(){
    $tmp = json_decode(file_get_contents($this->_json_file));
    $this->plot = $tmp->plot;
  }

  public function generate() {
    $protag = $this->plot->protag;
    $means  = $this->plot->means;
    $thing   = $this->plot->thing;

    return 'A ' . $protag[array_rand($protag)] . ' ' . $means[array_rand($means)] . ' ' . $thing[array_rand($thing)] . '.';
  }

}
?>