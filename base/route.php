<?php
namespace Route;

class Base {
  protected $routes = [];
  protected $root = [];
  private $method;
  private $uriParts;
  private $entity;
  private $controller;
  private $toCall;
  private $index;

  function __construct() {
    $this->uriExplode();
    $this->identifyRoute($this->method, $this->uriParts);
    $this->callAction();
  }

  private function uriExplode() {
    $uri = $_SERVER['REQUEST_URI'];
    $this->method = $_SERVER['REQUEST_METHOD'];
    $this->uriParts = explode('/', $uri);
    $this->index = (!empty($this->uriParts[3]) && is_numeric($this->uriParts[3])) ? $this->uriParts[3]: null;
  }

  private function identifyRoute($method, $parts) {
    $route = ($parts[2])? ($this->index)? $parts[2].'/{id}': $parts[2]: $this->getRootRoute($method);
    $routes = ($parts[2])? $this->routes: $this->root;
    $this->toCall = $this->routes[$method][$route];
    $this->controller = "Controller\\". ($this->getController($parts[2], $method));
  }

  private function getController($entity, $method) {
    return ($entity)? ucfirst($entity): ucfirst(array_keys($this->root[$method])[0]);
  }

  private function getRootRoute($method) {
    $entity = array_keys($this->root[$method])[0];
    return $entity;
  }

  private function callAction() {
    if (!empty($this->toCall)) {
      (session_status() == PHP_SESSION_ACTIVE)?: session_start();

      $ctr = new $this->controller();
      if (method_exists($ctr, $this->toCall)) {
        $call = $this->toCall;
        ($this->index)? $ctr->$call($this->index) : $ctr->$call();
      }
    }
  }
}
