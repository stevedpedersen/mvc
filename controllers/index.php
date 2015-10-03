<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        $this->index();
    }
    
    public function index () {
        $this->view->render('index/index');
    }
    
    public function test ($param = null) {
        //echo "in test with parmater: $param<br />"; die;
    }

}