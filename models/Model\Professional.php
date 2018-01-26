<?php

namespace Model;
/**
 *
 */
class Professional {
  private $id;
  private $name;
  private $job;

  function __construct($attr = []) {
    $this->id = $this->checkAttr($attr, 'id');
    $this->name = $this->checkAttr($attr, 'name');
    $this->job = $this->checkAttr($attr, 'job');
  }

  private function checkAttr($array, $value) {
    return (!empty($array[$value]))? $array[$value]: null;
  }
  
  public static function selectAll() {
    $str = file_get_contents(__DIR__.'/../database/professionals.json');
    return json_decode($str, false);
  }

  public function store() {

    $arr = self::selectAll();
    $this->id = $arr[count($arr) - 1]->id + 1;

    $obj = new \stdClass;
    $obj->id = $this->id;
    $obj->name = $this->name;
    $obj->job = $this->job;

    array_push($arr, $obj);

    $json = json_encode($arr);
    file_put_contents(__DIR__.'/../database/professionals.json', $json);
  }
}
