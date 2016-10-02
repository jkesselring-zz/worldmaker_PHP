<?php
require_once '../includes/name.php';
$name = new Name();
$limit =  $_GET['num'];

$result = array();

for($i=0;$i<$limit;$i++){
  $result[] = $name->generate();
}
echo json_encode($result);
?>