<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

if(empty($_POST['id'])){
  die('nessun id');
}

$id = $_POST['id'];

removeID($conn, 'stanze', $id, $basepath);
