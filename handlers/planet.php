<?php
require_once '../includes/planet.php';
$planet = new Planet();
$limit =  $_GET['num'];

$result = array();

for($i=0;$i<$limit;$i++){
  $result[] = $planet->generate();
}
echo json_encode($result);
?>