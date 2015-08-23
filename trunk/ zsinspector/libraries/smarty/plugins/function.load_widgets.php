<?php

	//function smarty_function_dec2frac($params, &$smarty)
    function smarty_function_load_widgets($params, &$smarty)
    {
		$glue = $smarty->_tpl_vars['glue']; 
		$templates = $smarty->_tpl_vars['template_config']; 
		$controller = $smarty->_tpl_vars['controller_name']; 
		$main_template = $smarty->_tpl_vars['main_template']; 
		$main_template = substr($main_template, 0, -4);
		
    	if (!empty($params['content'])) {
			foreach($glue->get_widgets_for_content($params['content'], $templates)  as $widget){
				if(is_array($widget))
					smarty_function_load_widget($widget, $smarty); 
				else
					smarty_function_load_widget(array("name"=>$widget), $smarty);
			}
		}
        else if (!empty($params['section'])) {
			if($controller <> $main_template){
				foreach($glue->get_widgets_for_sections($params['section'], $main_template, $templates, false)  as $widget){
					if(is_array($widget))
						smarty_function_load_widget($widget, $smarty); 
					else
						smarty_function_load_widget(array("name"=>$widget), $smarty);
				}
			}
			foreach($glue->get_widgets_for_sections($params['section'], $controller, $templates)  as $widget){
				if(is_array($widget))
					smarty_function_load_widget($widget, $smarty); 
				else
					smarty_function_load_widget(array("name"=>$widget), $smarty);
			}
		}
		else{
            print("missing 'section' or 'content' attribute in load_widgets tag");
        } 
    }
