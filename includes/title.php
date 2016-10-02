<?php
class Title{
  private $_json_file = '../json/title.js';
  private $title;

  function __construct(){
    $tmp = json_decode(file_get_contents($this->_json_file));
    $this->title = $tmp->title;
  }

  public function generate()
  {
    $start = $this->title->start;
    $middle = $this->title->middle;
    $end = $this->title->end;

    return $start[array_rand($start)] . " " . $middle[array_rand($middle)] . " " . $end[array_rand($end)];
  }

}
?>