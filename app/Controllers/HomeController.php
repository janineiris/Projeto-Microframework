<?php

    namespace App\Controllers;

    use Core\BaseController;

    class HomeController extends BaseController{

        public function index(){
            $this->setPageTitle('Home');
            //$this->view->nome = "Fareeha";
            $this->renderView('home/index.phtml', 'layout.phtml');
        }
    }
