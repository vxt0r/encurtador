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
            'route' => '/r',
            'controller' => 'indexController',
            'action' =>  'redirect'
        );

        $routes['remove'] = array(
            'route' => '/remove',
            'controller' => 'indexController',
            'action' =>  'remove'
        );

        $this->setRoutes($routes);
    }



}
