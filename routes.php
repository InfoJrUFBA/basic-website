<?php

require_once('base/route.php');
/**
 *
 */
class Routes extends \Route\Base {

    protected $routes = [
      'GET' => [
        'professional' => 'index',
        'professional/{id}' => 'show',
        'animal' => 'index'
      ],
      'POST' => [

      ]
    ];

    protected $root = [
      'GET' => [
        'professional' => 'index'
      ]
    ];
}
