<?php
require_once '../includes/title.php';
$title = new Title();
$limit =  $_GET['num'];

$result = array();

for($i=0;$i<$limit;$i++){
  $result[] = $title->generate();
}
echo json_encode($result);
?>