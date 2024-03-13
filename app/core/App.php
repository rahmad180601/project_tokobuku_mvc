<?php

class App {
    protected $controller = "Login";
    protected $method = "index";
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
       

        if (isset($url[0]) && file_exists('../app/controller/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'],"/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

    // public function route($url) {
    //     if(empty($url[0])) {
    //         // Jika tidak ada controller yang ditentukan, gunakan controller default
    //         $controller = 'HomeController';
    //     } else {
    //         // Ambil controller dari URL
    //         $controller = ucfirst($url[0]) . 'Controller';
    //     }

    //     // Cek apakah controller ada
    //     if(class_exists($controller)) {
    //         // Instansiasi controller
    //         $controller = new $controller();

    //         // Jika tidak ada metode yang ditentukan, gunakan metode default
    //         if(isset($url[1])) {
    //             $method = $url[1];
    //         } else {
    //             $method = 'index';
    //         }

    //         // Cek apakah metode ada
    //         if(method_exists($controller, $method)) {
    //             // Ambil parameter dari URL
    //             $params = array_slice($url, 2);

    //             // Panggil metode dengan parameter
    //             call_user_func_array([$controller, $method], $params);
    //         } else {
    //             // Jika metode tidak ada, gunakan metode default
    //             call_user_func([$controller, 'index']);
    //         }
    //     } else {
    //         // Jika controller tidak ada, gunakan controller default
    //         $controller = new HomeController();
    //         call_user_func([$controller, 'index']);
    //     }
    // }
}

?>