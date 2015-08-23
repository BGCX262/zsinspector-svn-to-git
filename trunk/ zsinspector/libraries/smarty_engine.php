<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('smarty/Smarty.class.php');

class smarty_engine extends Smarty {

    const LEFT_DELIM 		= '{{';
    const RIGHT_DELIM       = '}}';
    const VIEWS_EXT         = '.tpl';

    private $CI;
    private $base_url;

    function __construct() {

        $this->CI =& get_instance();
        $this->Smarty();
        $this->left_delimiter 	= self::LEFT_DELIM;
        $this->right_delimiter	= self::RIGHT_DELIM ;
        $this->compile_check 	= true;
        $this->base_url 		= $this->__config('base_url');
        $this->debugging 		= $this->__config('smarty_debugging');

    }

    function view($view_name, $view_directory) {

        $this->compile_dir 	 = $this->__config('base_view_compile_dir').'/'. $view_directory;;
        $this->template_dir  = $this->__config('base_view_dir').'/'. $view_directory;
        $stylesheet_location = $this->__config('css_location') . '/' . $view_directory;
        $javascript_location = $this->__config('javascript_location') . '/' . $view_directory;
        $image_location      = $this->__config('image_location') . '/' . $view_directory;

        $this->assign('image_location',      $image_location);
        $this->assign('stylesheet_location', $stylesheet_location);
        $this->assign('javascript_location', $javascript_location);
        $this->assign('yui_build',	     $this->__config('yui_build_location'));
        $this->assign('yui_asset', 	     $this->__config('yui_asset_location'));
        $this->assign('base_url', 	     $this->base_url);
        $this->assign('base_index_url',      $this->CI->config->site_url());
        $current_tpl =   empty ($view_directory)? strtolower($view_name).self::VIEWS_EXT : $view_directory.''.strtolower($view_name).self::VIEWS_EXT;
        $this->assign('current_tpl',  $current_tpl );

        $this->display('index' . self::VIEWS_EXT);
    }

    function fetch_template($template_name,$view_dir) {
        $this->compile_dir 	 = $this->__config('base_view_compile_dir').'/'. $view_dir;;
        $this->template_dir  = $this->__config('base_view_dir').'/'. $view_dir;
        $this->assign('real_image_location',      "file:///".str_replace("system", "",BASEPATH)."images");
        return $this->fetch($template_name . self::VIEWS_EXT);
    }

    protected function __config($item_name) {
        return $this->CI->config->item($item_name);
    }
}

?>