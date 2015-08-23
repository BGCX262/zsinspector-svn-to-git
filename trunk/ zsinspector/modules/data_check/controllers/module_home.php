<?php
include APPPATH."libraries/module_controller.php";
class module_home extends module_controller {

    public function __construct(){
        parent::__construct();

    }
    public function index(){
        $this->module_view();
    }
    public function get_module_name(){
        return "data_check";
    }

    public function book_price(){
        
        
    }

    public function user(){
        
    }
}
?>
