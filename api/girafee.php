<?php

include_once '../database.php';
include_once '../models/giraffe.php';



header("Access-Control-Allow-Origin: *"); // CORS
header("Content-Type: application/json; charset=UTF-8");


$db = new Database();
$connection = $db->getConnection();


$id = $_GET['id'];



if ($id == Null) {
  $query = 'SELECT * FROM `giraffe`';
  $queryResult = mysqli_query($connection, $query);



  $data = [];
  for ($i = 0; $i < mysqli_num_rows($queryResult); $i++) {
    $row = mysqli_fetch_row($queryResult);

    array_push($data, new Giraffe( $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]));
  }

  echo json_encode($data);
} else {
  $query = 'SELECT * FROM `giraffe` WHERE id =' . $id;
  $queryResult = mysqli_query($connection, $query);

  $row = mysqli_fetch_row($queryResult);

  echo json_encode(new Giraffe( $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]));
}



