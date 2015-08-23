<?php

/**
<Class>
	<Name>home</Name>
	<Type>Controller</Type>
	<Description>Processes all requests on the Home page of the site</Description>
</Class>
**/
class home 
	extends extended_controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * Generic call to this page without any parameters, used to display the default page and data
	 */
	public function index()
	{
		$this->build_display();
	}
	
	/*
	 * This is a helper function that performs 2 tasks:
	 *	- Pulls standard data from the database for display
	 *	- Pushes to the display
	 */
	
	protected function build_display()
	{		
		if($this->auto_render_view)
		{
			$this->view();
		}
	}

}
?>