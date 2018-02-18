<?php

    namespace App\Controllers;

    use Core\BaseController;

    class PostsController extends BaseController{

        public function index(){
            $this->setPageTitle('Posts');
            $this->renderView('/posts.phtml', 'layout.phtml');
        }

        public function show($id, $request){
            echo $id . '<br>';
            echo $request->get->nome . '<br>';
            echo $request->get->idade . '<br>';
        }
    }
