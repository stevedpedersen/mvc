<?php

class Bootstrap {

    function __construct() {
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //echo "<pre>"; print_r($url); echo "</pre>";
        
        // allows for index to be called, with or without specifying /index.php
        if (count($url) == 1) {
            require_once 'controllers/index.php';
            $controller = new Index();
            return false;
        }

        // look into not having 'controllers/' be hard coded.
        // should be an option in a config.ini file
        $file = 'controllers/' . $url[1] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/error.php';
            $controller = new Error();           
            return false;
        }
        
        $controller = new $url[1];

        switch (count($url)) {
            case 6:
                $controller->{$url[2]}($url[3], $url[4], $url[5]);
                break;
            case 5:
                $controller->{$url[2]}($url[3], $url[4]);
                break;
            case 4:
                $controller->{$url[2]}($url[3]);
                break;
            case 3:
                $controller->{$url[2]}();
                break;
            default:
                $controller->index();
                break;
        }
        
    }

}