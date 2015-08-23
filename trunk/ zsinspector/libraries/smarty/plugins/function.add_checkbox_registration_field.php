<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.eightball.php
 * Type:     function
 * Name:     eightball
 * Purpose:  outputs a random magic answer
 * -------------------------------------------------------------
 */
function smarty_function_add_checkbox_registration_field($params, &$smarty)
{

   	$reg_field = $params['field'];
   	$on_click = $params['on_click'];
   	
   	$html="";
   	
   	
   	$html .= "<input type=\"checkbox\" onclick=\"$on_click\" name=\"$reg_field->field_name\" id=\"$reg_field->field_name\" title=\"$reg_field->display_name\" ".($reg_field->value==""?"":"checked='true'")." value=\"on\">".$reg_field->display_name." ".(strpos($reg_field->rules, "required")===false?"":"*");

   	if($reg_field->error_message <> ''){
   		$html.=
"<br /><span class='error'>{$reg_field->error_message}</span>";
	}
	return $html;

}
?>