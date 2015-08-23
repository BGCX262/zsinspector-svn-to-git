<?php
require_once APPPATH.'libraries/module_controller.php';
require_once APPPATH.'models/m_route_data.php';
class module_home extends module_controller {

    private $rdata;
    public function __construct() {
        parent::__construct();
        $this->rdata = $this->read();
        $this->smarty_assign("modules",$this->rdata);
        $this->add_button("add_new", 'go_to_add_module');
    }

    public function index() {
        $this->module_view();
    }

    public function get_module_name() {
        return "module";
    }
    private function read() {
        $obj  = new m_route_data();
        $obj = $obj->fetch();
        return $obj->get_all_modules();
    }

 
    public function go_to_add_module() {
        $this->add_button("back");
        $this->module_view('add_new');
    }

    public function add_module() {
        if($this->input->post('name') && strlen(trim($this->input->post('name')))  && $this->input->post('author') && strlen(trim($this->input->post('author')))) {
            $name   = strtolower($this->input->post('name'));
            $author =$this->input->post('author');
            $description = $this->input->post('description');
            $status = $this->input->post('status');
            $default_controller = strtolower($this->input->post('module_home'));
            $obj  = new m_route_data();
            $obj = $obj->fetch();
            if(!$obj->get_module($name)) {
                $obj->add_module($name,$author,$description,$default_controller);
                $obj->save();
                redirect("module");
            }else {
                $this->add_error_msg("Module already exists.");
            }

        }else {
            $this->add_info_msg("Missing required info.");
        }

        $this->go_to_add_module();
    }

    public function delete($name) {
        $obj  = new m_route_data();
        $obj = $obj->fetch();
        if($obj->get_module($name)) {
            $obj->remove_module($name);
            $obj->save();
            redirect("module");
        }else {
            $this->add_error_msg("Module doesn't exists.");
        }
    }


}
?>