<?php

class Database {

  private $host = '127.0.0.1:3306';
  private $user = 'root';
  private $password = 'root';
  private $db = 'girafee';

  private $connect = null;



  public function getConnection() {
     $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->db)
      or die("Error: " . mysqli_error($this->connect));

    return $this->connect;
  }


  public function closeConnection() {
    mysqli_error($this->connect);
  }

}






//class Animal {
//  protected function Walk() {}
//  private function Walk1() {}
//}
//class Cat extends Animal {
//  public function a() {
//    b();
//    c();
//    $this->Walk();
////    $this->Walk1();
//  }
//  private function b() {}
//  protected function c() {}
//}
//
//$a = new Test();
//$a->a();
//$a->Walk();
////$a->b();
////$a->c();

