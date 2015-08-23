<?php

/**
* Smarty {case}{/case} block plugin
*
* Type: block function<br>
* Name: case<br>
* Purpose: element inside {switch}...{/switch} block
* author: messju mohr <messju@lammfellpuschen.de>
* @param array
* Params: value: integer or null (null)
* @param string contents of the block
* @param Smarty
* @return string
*/
function smarty_block_case($params, $content, &$smarty, &$repeat)
{
	if (is_null($content)) {
		/* handle block open tag */
		
		/* find corresponding {switch}-block */
		for ($i=count($smarty->_tag_stack)-1; $i>=0; $i--) {
		list($tag_name, $tag_params) = $smarty->_tag_stack[$i];
		if ($tag_name=='switch') break;
	}
	
	if ($i<0) {
		/* {switch} not found */
		$smarty->tigger_error("{case}: block not inside switch}-context");
		
		return;
	}
	
	if (isset($tag_params['_done']) && $tag_params['_done']) {
		/* another {case} was already found */
		$repeat = false;
		return;
	}
	
	if (isset($params['value']) && ($params['value']!=$tag_params['value'])) {
		/* case doesn't match */
		$repeat = false;
		return;
	}
	
		/* case found */
		$smarty->_tag_stack[$i][1]['_done'] = true;
		return;
	
	} else {
		/* handle block close tag */
		return $content;
	
	}

}

?> 