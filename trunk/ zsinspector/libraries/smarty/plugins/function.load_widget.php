<?php

	//function smarty_function_dec2frac($params, &$smarty)
    function smarty_function_load_widget($params, &$smarty)
    {
        $arg_list = array();
		
        if (empty($params['name'])) {
            $smarty->_syntax_error("missing 'name' attribute in include tag", E_USER_ERROR, __FILE__, __LINE__);
        }

		$cnt=true;
		
		$_smarty_tpl_vars = $smarty->_tpl_vars;
		
		if(isset($params['condition'])){
			if($params['condition']=="logged_in" && $_smarty_tpl_vars['user'] == "" ){
				$cnt=false; 
			}
			else if($params['condition']=="logged_out" && $_smarty_tpl_vars['user'] != ""){
				$cnt=false;
			}
		}
		
		
		$view = ($_smarty_tpl_vars['view_directory']);
		$include_file = $params['name'].".tpl";
		
		if(file_exists(APPPATH . "views/$view/widgets/$include_file"))
			$include_file = "../$view/widgets/$include_file";
		else
			$include_file = "../default/widgets/$include_file";
	
	
        $_params = array('smarty_include_tpl_file' =>  $include_file, 'smarty_include_vars' => (array)$params);

        if($cnt)
			$smarty->_smarty_include($_params);
        
    }
