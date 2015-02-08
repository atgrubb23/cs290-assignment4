<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

if(!($_GET) && !($_POST)) {
  $emptyInput = array();
  $emptyInput['Type'] = '[GET|POST]';
  $emptyInput['paramters'] = null;
  echo json_encode($emptyInput);
}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
  echo json_encode($_GET);
}

elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo json_encode($_POST);
}
?>