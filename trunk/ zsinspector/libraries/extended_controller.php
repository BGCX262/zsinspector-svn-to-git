<?php

abstract class extended_controller extends Controller {

    protected $controller_name = NULL;
    protected $settings 	   = NULL;
    protected $auto_render_view= TRUE;    
    protected $global_page_error;



    public function __construct($auto_render=TRUE) {
        parent::__construct();
        $this->global_page_error = array();
        $this->controller_name = get_class($this);
    }

    protected function view($view_name='',$folder_name='') {
        $this->output_global_template_variables();
        if($this->auto_render_view)	$this->smarty_engine->view(strlen($view_name) ? $view_name :$this->controller_name, $folder_name);
    }

    public function fetch($view_name) {
        return $this->smarty_engine->fetch_template($view_name,$this->view_folder);
    }


    protected function output_global_template_variables() {        
        $this->smarty_assign('view_folder',$this->view_folder);
        $this->smarty_assign("global_page_error",  $this->get_all_errors());
    }

    protected function smarty_assign($name, $value) {
        $this->smarty_engine->assign($name, $value);
    }
    protected function smarty_ref_assign($name, $value) {
        $this->smarty_engine->assign_by_ref($name, $value);
    }


    protected function add_to_error_base($msg) {
        $this->global_page_error[] = format_error($msg);
    }

    protected function clear_error_base() {
        $this->global_page_error = array();
    }

    protected function get_all_errors() {
        return count($this->global_page_error) ? join('', $this->global_page_error) : "";
    }


}
?>
