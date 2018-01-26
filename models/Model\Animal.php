<?php

namespace Model;
/**
 *
 */
class Animal {
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

  public function __get($name) {
    return $this->$name;
  }

  public static function selectAll() {
    $str = file_get_contents(__DIR__.'/../database/animals.json');
    return json_decode($str, false);
  }
}
