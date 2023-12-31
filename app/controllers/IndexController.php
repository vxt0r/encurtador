<?php

namespace app\controllers;

use MF\controller\Action;
use MF\model\Container;


class IndexController extends Action{

    public function index(){

        $shortener = Container::getModel('Shortener');
        $this->view->data = $shortener->getURLS();
        $this->view->url = 'http://localhost:8080/r?id=';
        $this->render('index','layout');
    }

    public function remove(){
        $shortener = Container::getModel('Shortener');
        $shortener->delete($_POST['id']);
        header('location:/');
    }

    public function shortener(){
        $shortener = Container::getModel('Shortener');
        $shortener->saveURL($_POST['url']);
        header('location:/');
    }

    public function redirect(){
        $shortener = Container::getModel('Shortener');
        $url = $shortener->getURL($_GET['id'])['url'];
        header('location:'.$url);
        die();
    }

}
