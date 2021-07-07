<?php

include_once '../database.php';
include_once '../models/aviary.php';



header("Access-Control-Allow-Origin: *"); // CORS
header("Content-Type: application/json; charset=UTF-8");


$db = new Database();
$connection = $db->getConnection();

$query = 'SELECT * FROM `aviary`';
$queryResult = mysqli_query($connection, $query);



$data = [];
for ($i = 0; $i < mysqli_num_rows($queryResult); $i++) {
  $row = mysqli_fetch_row($queryResult);

  array_push($data, new Aviary( $row[0]));
}



echo json_encode($data);

