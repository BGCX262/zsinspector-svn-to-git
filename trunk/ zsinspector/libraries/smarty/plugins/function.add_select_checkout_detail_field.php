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
function smarty_function_add_select_checkout_detail_field($params, &$smarty)
{
   	$reg_field = $params['field'];
   	$select_list = $params['list'];
   	$country_code = $params['filter'];
   	$show_name = $params['show_name'];
   	$form = $smarty->_tpl_vars['form'];
   	$error_name =$reg_field."_error";
   	
   	
   	$html="";
   	   	
   	$html .= 
"<tr >
	<td>
		".($show_name?(ucwords($form->_fields[$reg_field])." ".($form->is_required($reg_field)===false?"":"*")):"")."
	</td>
	<td ".(($form->$error_name <> '')?"class='error' title='".$form->$error_name."'":"").">
		<select id=\"$reg_field\" name=\"$reg_field\">
			<option value=\"\">Select ".$form->_fields[$reg_field]."</option>";
			
			foreach($select_list as $select_item){
				if(($country_code == "") || (isset($select_item->country) && $country_code == $select_item->country->code) || $country_code == $select_item->code){
					$selected = ($select_item->code==$form->value($reg_field, false)?"selected":"");
					
					$html .= "<option  value=\"{$select_item->code}\" $selected>{$select_item->name}</option>";
				}		
			}
			
	$html.="
		</select>
	</td>
</tr>";

	return $html;

}
?>