<?php

    namespace Core;

    class Container{

        public static function newController($controller){
            $objcontroller = "App\\Controllers\\" . $controller;
            return new $objcontroller;
        }

        public static function pageNotFound(){
            if(file_exists(__DIR__ . "/../app/Views/404.phtml")){
                return require_once __DIR__ . "/../app/Views/404.phtml";
            }else {
                echo "Error 404: Page not found.";
            }
        }
    }
