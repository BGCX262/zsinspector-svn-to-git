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
function smarty_function_product_url($params, &$smarty)
{
	$curr_prod = $params['product'];
	$base_index_url = $smarty->_tpl_vars['base_index_url'];
	
	
	if(isset($params['assign']))
		$smarty->_tpl_vars[$params['assign']] = $base_index_url."/product_details/view_product/warehouse/".urlencode($curr_prod->warehouse->id)."/part_num/".urlencode(urlencode($curr_prod->part_num));
	
	else
		return $base_index_url."/product_details/view_product/warehouse/".urlencode($curr_prod->warehouse->id)."/part_num/".urlencode(urlencode($curr_prod->part_num));
	

}
?>