<?php
require_once '../includes/armor.php';
$armor = new Armor();
$limit =  $_GET['num'];

$result = array();

for($i=0;$i<$limit;$i++){
  $result[] = $armor->generate();
}
echo json_encode($result);
?>