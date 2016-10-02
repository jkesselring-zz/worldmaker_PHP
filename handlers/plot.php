<?php
require_once '../includes/plot.php';
$plot = new Plot();
$limit =  $_GET['num'];

$result = array();

for($i=0;$i<$limit;$i++){
  $result[] = $plot->generate();
}
echo json_encode($result);
?>