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
function smarty_function_add_select_registration_field($params, &$smarty)
{

   	$reg_field = $params['field'];
   	$divisions = $params['array'];
   	if(isset($params['filter']))
	   	$country_code = $params['filter'];
	else
	   	$country_code="";
	   	
   	$html="";
   	
   	if($reg_field->error_message <> ''){
   		$html.=
"";
	}
   	
   	$html .= 
"<tr>
	<td>
		".$reg_field->display_name." ".(strpos($reg_field->rules, "required")===false?"":"*")."
	</td>
	<td ".(($reg_field->error_message <> '')?"class='error' title='$reg_field->error_message'":"").">
		<select id=\"$reg_field->field_name\" name=\"$reg_field->field_name\">
			<option value=\"\">Select Province</option>";

	foreach($divisions as $division){
		if(($country_code == "") || ($division->country && $country_code == $division->country->code) || $country_code == $division->code){
			$selected = ($division->code==$reg_field->value?"selected":"");
			
			$html .= "<option  value=\"{$division->code}\" $selected>{$division->name}</option>";
		}		
	}
	$html.="
		</select>
	</td>
</tr>";

	return $html;

}
?>