<?php


class Action {
  public $id = null;
  public $name = null;



  public function __construct($id, $name)
  {
    $this->id = (int) $id;
    $this->name = $name;
  }


}