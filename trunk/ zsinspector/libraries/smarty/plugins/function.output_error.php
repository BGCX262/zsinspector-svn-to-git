<?php

function smarty_function_output_error($params, &$smarty)
{
	return $params['error']<>''?"<span class=\"error\">".$params['error']."</span>":"";
}
?>