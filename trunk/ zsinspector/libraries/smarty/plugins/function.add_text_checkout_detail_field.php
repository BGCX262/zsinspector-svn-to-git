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
function smarty_function_add_text_checkout_detail_field($params, &$smarty)
{
   	$reg_field = $params['field'];
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
		<input type=\"text\" name=\"$reg_field\" title=\"".$form->_fields[$reg_field]."\" ".$form->value($reg_field).">
	</td>
</tr>";
	return $html;

}
?>