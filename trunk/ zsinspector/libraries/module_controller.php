<?php
require_once APPPATH.'models/m_route_data.php';
abstract class module_controller extends extended_controller{
    protected $m_data;
    protected $messages;
    protected $nav_buttons;
    const ERROR_MSG = 1;
    const INFO_MSG  = 2;
    public function __construct(){
        parent::__construct();
        if(!$this->validate_module()) show_404();
        
    }    
    public function get_module_view_file($view=NULL){
        return "../modules/".$this->get_module_name()."/views/".($view ? $view : get_class($this));
    }
    public function module_view($view){
        $this->view($this->get_module_view_file($view));
    }
    public function include_module_model($class){
        require_once APPPATH."modules/".$this->get_module_name()."/models/".$class.EXT;
    }
    protected function output_global_template_variables(){
        $this->smarty_assign('menu', $this->m_data->build_menu());
        $this->smarty_assign('msg', join('',$this->messages));
        $this->smarty_assign('btns', join('',$this->nav_buttons));

        parent::output_global_template_variables();
    }
    public function validate_module(){
        $this->m_data = new m_route_data();
        $this->m_data = $this->m_data->fetch();        
        return $this->m_data->validate_module($this->get_module_name());

    }
    protected function add_error_msg($msg){
        $this->messages[] =  "<span style='color:red'>- $msg</span><br>";
    }
    protected function add_info_msg($msg){
        $this->messages[] =  "<span style='color:#E9FF50'>- $msg</span><br>";
    }

    protected function add_button($caption,$function,$title='',$params=NULL,$controler=NULL,$module=NULL){
        if(!$module)
            $module = $this->get_module_name();
        if(!$controler)
            $controler = $this->m_data->get_default_page($this->m_data->get_module($this->get_module_name()));
        $link = base_url()."install.php/".$module."/$controler/".$function;
        $this->nav_buttons[] = "<a href='$link' title = '$title' class='nav_a'>$caption</a><br>";
    }

    public abstract function get_module_name();


}

?>
