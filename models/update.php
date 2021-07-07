<?php


class Update {
  public $id = null;
  public $date = null;
  public $giraffeId = null;
  public $aviaryId = null;
  public $statusId = null;
  public $actionId = null;



  public function __construct($id, $date, $giraffeId, $aviaryId, $statusId, $actionId)
  {
    $this->id = (int) $id;
    $this->date = $date;
    $this->giraffeId = (int) $giraffeId;
    $this->aviaryId = (int) $aviaryId;
    $this->statusId = (int) $statusId;
    $this->actionId = (int) $actionId;
  }


}