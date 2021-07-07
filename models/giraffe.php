<?php


class Giraffe {
  public $id = null;
  public $name = null;
  public $sex = null;
  public $diet = null;
  public $character = null;
  public $weight = null;
  public $height = null;
  public $color = null;
  public $aviaryId = null;
  public $imgUrl = null;


  public function __construct($id, $name, $sex, $weight, $height, $color, $character,  $diet, $aviaryId, $imgUrl)
  {
    $this->id = (int) $id;
    $this->name = $name;
    $this->sex = $sex;
    $this->weight = (int) $weight;
    $this->height = (int) $height;
    $this->color = $color;
    $this->character = $character;
    $this->diet = $diet;
    $this->aviaryId = (int) $aviaryId;
    $this->imgUrl = $imgUrl;
  }


}