<?php

namespace app;

use MF\init\Bootstrap;

class Route extends Bootstrap{

    protected function initRoutes(){

        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' =>  'index'
        );

        $routes['shortener'] = array(
            'route' => '/shortener',
            'controller' => 'indexController',
            'action' =>  'shortener'
        );

        $routes['redirect'] = array(
            'route' => '/redirect',
            'controller' => 'indexController',
            'action' =>  'redirect'
        );

        $this->setRoutes($routes);
    }



}
