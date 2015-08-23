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
function smarty_function_dec2frac($params, &$smarty)
{

   	$decTotal = $params['dec'];
	if($decTotal == 0)
	{
		return $decTotal;
	}
	else
	{
	   	$UpperPart=1;
	   	$LowerPart=1;
	
	   	$decCurr = $UpperPart / $LowerPart;
	
	   	while($decCurr <> $decTotal)
	   	{
			if($decCurr < $decTotal)
			{
	         	$UpperPart = $UpperPart + 1;
	        }
	      	elseif($decCurr > $decTotal)
	      	{
				 $LowerPart = $LowerPart + 1;
			}
	
			$decCurr = $UpperPart / $LowerPart;
	  	}
	  	$strNum='';//$UpperPart.'/'.$LowerPart;
		if($LowerPart == 1)
		{
			$strNum = $UpperPart;
		}
		else
		{
			if($UpperPart < $LowerPart)
			{
				$strNum = $UpperPart.'/'.$LowerPart;
			}
			else
			{
				$strNum = (int)($UpperPart / $LowerPart). '-'. $UpperPart % $LowerPart .'/'.$LowerPart;
			}
		}
	
		return $strNum ;
	}

}
?>