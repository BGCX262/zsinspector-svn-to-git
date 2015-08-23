<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
<Helper>
	<Name>authentication_helper</Name>
	<Type>Helper</Type>
	<Description>
		Group of functions for authentication tasks
	</Description>
</Helper>
**/

/**
<Function>
	<Name>validate_user_logged_in</Name>
	<Description>
		Checks if a user is logged in. If not they are forwarded to the main page.  
	</Description>
</Function>
**/
function validate_user_logged_in()
{
	if(session::get_value(session::USER) == NULL)
	{
		redirect(extended_controller::LOGIN_CONTROLLER);
	}
}

?>