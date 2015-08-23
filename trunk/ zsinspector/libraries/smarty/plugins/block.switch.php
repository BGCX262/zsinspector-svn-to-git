<?php

/**
* Smarty {switch}{/switch} block plugin
*
* Type: block function<br>
* Name: switch<br>
* Purpose: container for {case}...{/case} blocks
* @param array
* Params: value: integer or null (null)
* @param string contents of the block
* @param Smarty
* @return string
* Reference: http://www.phpinsider.com/smarty-forum/viewtopic.php?p=7069#7069
* Usage Example:

	{{switch value=$browse_type}}
		{{case value="manufacturer"}}
			{{$mfg->name}}
		{{/case}}
		{{case}}
			{{*default action*}}
		{{/case}}
	{{/switch}} 
	
*/
function smarty_block_switch($params, $content, &$smarty, &$switch)
{
	if (is_null($content) && !array_key_exists('value', $params)) {
		$smarty->trigger_error("{switch}: parameter 'value' not given");
	}
	return $content;
}

?> 