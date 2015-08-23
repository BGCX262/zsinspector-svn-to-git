<?php
/**function.mailto.phpfunction.mailto.php
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty {assign} compiler function plugin
 *
 * Type:     compiler function<br>
 * Name:     assign<br>
 * Purpose:  assign a value to a template variable
 * @link http://smarty.php.net/manual/en/language.custom.functions.php#LANGUAGE.FUNCTION.ASSIGN {assign}
 *       (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com> (initial author)
 * @auther messju mohr <messju at lammfellpuschen dot de> (conversion to compiler function)
 * @param string containing var-attribute and value-attribute
 * @param Smarty_Compiler
 */

	//function smarty_function_dec2frac($params, &$smarty)
    function smarty_function_default_include($tag_args, &$compiler)
    {    	
        $attrs =$tag_args;
        $arg_list = array();

        if (empty($attrs['file'])) {
            $compiler->_syntax_error("missing 'file' attribute in include tag", E_USER_ERROR, __FILE__, __LINE__);
        }

        foreach ($attrs as $arg_name => $arg_value) {
            if ($arg_name == 'file') {
        		$arg_value = str_replace('"', '', $arg_value);
                $include_file = $arg_value;
                continue;
            } else if ($arg_name == 'assign') {
        		//$arg_value = str_replace('"', '', $arg_value);
                $assign_var = $arg_value;
                continue;
            }
            if (is_bool($arg_value))
                $arg_value = $arg_value ? 'true' : 'false';
                
	        $arg_list[] = "'$arg_name' => $arg_value";
        }

		$_smarty_tpl_vars = $compiler->_tpl_vars;
		
		$view = ($_smarty_tpl_vars['view_directory']);
//		print(APPPATH . "views/$view/$include_file");
		if(file_exists(APPPATH . "views/$view/$include_file")){
//			print('here');
			$include_file = "../$view/$include_file";
		}
		else
			$include_file = "../default/$include_file";
	
	
        $_smarty_tpl_vars = $compiler->_tpl_vars;


        $_params = array('smarty_include_tpl_file' =>  $include_file, 'smarty_include_vars' => (array)$arg_list);
        
		$compiler->_smarty_include($_params);
        
        
    }
