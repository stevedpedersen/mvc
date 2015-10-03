<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        $this->index();
    }
    
    public function index () {
        $this->view->render('login/index');
    }
    
    public function login () {
        
    }

}