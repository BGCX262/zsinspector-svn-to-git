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
function smarty_function_product_code_url($params, &$smarty)
{
	$curr_prod = $params['product_code'];
	$base_index_url = $smarty->_tpl_vars['base_index_url'];
	
	if(isset($params['assign']))
		$smarty->_tpl_vars[$params['assign']] = $base_index_url."/browse/category/id/".urlencode($curr_prod->id);
	
	else
		return $base_index_url."/browse/category/id/".urlencode($curr_prod->id);
	

}
?>