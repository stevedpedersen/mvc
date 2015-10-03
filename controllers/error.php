<?php

class Error extends Controller {

    const DEFAULT_MESSAGE = "Unknown Error";
    
    function __construct() {
        parent::__construct();
        $this->index();
    }
    
    public function index () {
        $this->view->render('error/index');
    }
    
    public function message ($message = self::DEFAULT_MESSAGE) {
        $this->view->message = $message;
    }

}

