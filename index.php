<?php

header("Access-Control-Allow-Origin: *"); // CORS
header("Content-Type: application/json; charset=UTF-8");

/*
 * API - application program interface
 * rest ful API
 *
 * entry points
 * domain/api/path..
 *
 * */


$obj = [
  'first' => 'data'
];


echo json_encode($obj);
//echo __FILE__;

//$a = 1;
/*
 *
 *
 * */

// uuid
// 1234-1234-1234-1234


// Подключить БД
// Описать модели + DTO
// Запросы CRUD
// entry points

/*
 * CRUD
 * - create
 * - read
 * - update
 * - delete
 *
 * */

//class User {
//  public $Id;
//  public $Name;
//}
//
//class UserCreateDto {
//  public $Name;
//}