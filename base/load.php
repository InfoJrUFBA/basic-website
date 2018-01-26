<?php
namespace Master;

class Base
{
    function __construct()
    {
        spl_autoload_register(array($this, 'autoloadModel'));
        spl_autoload_register(array($this, 'autoloadController'));
    }

    protected function autoload($path)
    {
        if (is_readable($path)) {
            require_once($path);
        }
    }

    protected function autoloadModel($className)
    {
        $this->autoload(__DIR__.'/../models/'. $className . '.php');
    }

    protected function autoloadController($className)
    {
        $this->autoload(__DIR__.'/../controllers/'. $className . '.php');
    }
}
