<?php
require_once '../includes/weapon.php';
$weapon = new Weapon();
$limit =  $_GET['num'];

$result = array();

for($i=0;$i<$limit;$i++){
  $result[] = $weapon->generate();
}
echo json_encode($result);
?>