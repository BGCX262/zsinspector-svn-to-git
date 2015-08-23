<?php

class m_route_data {
    protected $modules;
    protected $file_name ;

    public function  __construct() {
        $this->modules = array();
        $this->file_name = APPPATH.'config/module_config';
    }

    public function add_module($name,$author='unknown',$description='n/a',$home='module_home') {
        $this->modules[$name] = array('name'=>$name,'default_page'=>$home, status=>1,'date_added'=>date("Y-m-d"),'author'=>$author,'description'=>$description);
    }
    public function remove_module($name) {
        unset($this->modules[$name]);
    }
    public function enable_module($name) {
        $module = $this->get_module($name) ;
        if($module) {
            $module['status'] = 1;
            $this->set_module($module);
            return TRUE;
        }

        return FALSE;
    }
    public function get_all_modules() {
        return $this->modules;
    }
    public function disable_module($name) {
        $module = $this->get_module($name) ;
        if($module) {
            $module['status'] = 0;
            $this->set_module($module);
            return TRUE;
        }

        return FALSE;
    }

    public function get_module($name) {
        if(!empty ($this->modules[$name]))
            return $this->modules[$name];
        else return NULL;
    }
    public function set_module($module) {
        $this->modules[$module['name']] = $module;
    }
    public function save() {
        if(!$fp=fopen($this->file_name,'w')) {
            trigger_error('Error opening object file',E_USER_ERROR);
        }else {
            flock($fp, LOCK_EX);
            if(!fwrite($fp, base64_encode(serialize($this)))) {
                flock($fp, LOCK_UN);
                trigger_error('Error writing data to object',E_USER_ERROR);
            }
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    }

    public function fetch() {
        $obj=NULL;
        if(!$obj=unserialize(base64_decode(file_get_contents($this->file_name)))) {
            trigger_error('Error fetching object from file',E_USER_ERROR);
        }
        return $obj;
    }

    public function validate_module($name) {
        $module =  $this->get_module($name);
        if($module && $module['status']===1) {
            return $module;
        }else {
            return FALSE;
        }
    }
    public function get_name($module) {
        return isset($module['name']) ? $module['name']:NULL;
    }
    function get_default_page($module) {
        return strlen($module['default_page'])>0 ? $module['default_page'] : 'module_home';
    }
    function get_description($module) {
        return $module['description'];
    }

    public function build_menu() {
        $link;
        foreach($this->modules as $module) {
            $name = $this->get_name($module);
            $page = $this->get_default_page($module);
            $href = base_url()."install.php/$name/$page";
            $desc = $this->get_description($module);
            $link[] = "<a href='$href' class='nav_a' title='$desc' > $name </a>";
        }

        return $link;
    }
}



?>
