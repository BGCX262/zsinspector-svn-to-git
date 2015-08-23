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
function smarty_function_add_password_registration_field($params, &$smarty)
{

   	$reg_field = $params['field'];
   	
   	$html="";
   	
   	if($reg_field->error_message <> ''){
   		$html.="";
	}
   	
   	$html .= 
"<tr >
	<td>
		".$reg_field->display_name." ".(strpos($reg_field->rules, "required")===false?"":"*")."
	</td>
	<td ".(($reg_field->error_message <> '')?"class='error' title='$reg_field->error_message'":"").">
		<input type=\"password\" name=\"$reg_field->field_name\" id=\"$reg_field->field_name\" title=\"$reg_field->display_name\" value=\"$reg_field->value\">
	</td>
</tr>";

	return $html;

}
?>