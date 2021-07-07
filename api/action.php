<?php

include_once '../database.php';
include_once '../models/action.php';



header("Access-Control-Allow-Origin: *"); // CORS
header("Content-Type: application/json; charset=UTF-8");


$db = new Database();
$connection = $db->getConnection();

$query = 'SELECT * FROM `action`';
$queryResult = mysqli_query($connection, $query);



$data = [];
for ($i = 0; $i < mysqli_num_rows($queryResult); $i++) {
  $row = mysqli_fetch_row($queryResult);

  array_push($data, new Action( $row[0], $row[1]));
}



echo json_encode($data);

