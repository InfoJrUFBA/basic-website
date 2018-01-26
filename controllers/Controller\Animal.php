<?php
namespace Controller;

class Animal {

  public function index() {
    $this->render('professionals/index', array('professionals' => $this->all()));
  }

  public function all() {
    return \Model\Animal::selectAll();
  }

  public function show($id) {
    $all = $this->all();
    $search = array_filter($all, function ($e) use (&$id) { return $e->id == $id; });
    $this->render('professionals/show', array('professional' => $search));
  }

  public function store() {

  }

  public function update() {

  }

  public function destroy() {

  }

  public function render($viewPath, $variables = array())
  {
    extract($variables);
    ob_start();
    include(__DIR__.'/../views/' . $viewPath . '.php');
    $mainTemplate = ob_get_clean();
    include(__DIR__.'/../views/template.php');
  }
}
