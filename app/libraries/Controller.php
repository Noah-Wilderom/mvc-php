<?php

    // Laad de Model & View in
    class Controller {
        public function model($model) {
            // Require model bestand
            require_once '../app/models/' . $model . '.php';
            // Laad de model in
            return new $model();
        }

        // Laad de view (checkt of het bestand bestaat)
        public function view($view, $data = []) {
            if(file_exists('../app/views/' . $view . '.php')) {
                require_once '../app/views/' . $view . '.php';
            } else {
                die("View bestaat niet");
            }
        }
    }