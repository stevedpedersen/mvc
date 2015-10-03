<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        require 'models/help_model.php';
        $model = new Help_Model();
        $this->index();
    }
    
    public function index () {
        $this->view->render('help/index');
    }
    
    public function other ($arg = false){
        //echo "Optional: " . $arg . "<br />";
    }

}