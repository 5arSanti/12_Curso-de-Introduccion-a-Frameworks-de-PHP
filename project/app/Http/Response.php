<?php

    namespace App\Http;

    class Response {

        //Se puede retornar un array, un pdf, json ...
        protected $view;

        public function __construct($view) {  
            $this->view = $view; //Ejecuta las vista home, contactos, etc
        }


        public function getView() {
            return $this->view;
        }


        public function send() {
            $view = $this->getView();

            //home
            $content = file_get_contents(viewPath($view));

            require viewPath("layout");
        }

    }