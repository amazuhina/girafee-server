<?php

include_once '../database.php';
include_once '../models/update.php';



header("Access-Control-Allow-Origin: *"); // CORS
header("Content-Type: application/json; charset=UTF-8");


$db = new Database();
$connection = $db->getConnection();

$query = 'SELECT * FROM `update`';
$queryResult = mysqli_query($connection, $query);



$data = [];
for ($i = 0; $i < mysqli_num_rows($queryResult); $i++) {
  $row = mysqli_fetch_row($queryResult);

  array_push($data, new Update( $row[0], $row[1], $row[2], $row[3], $row[4], $row[5]));
}



echo json_encode($data);

