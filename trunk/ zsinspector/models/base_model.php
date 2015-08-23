<?php
	
	class base_model 
	{
		
		protected function __construct(){
			
		}
		
		protected function &ci(){
			return get_instance();
		}
		
		protected function &db(){
			self::ci()->load->database('default');
			return self::ci()->db;
		}
		
		protected function settings(){
			return session::get_value(session::SETTINGS, TRUE);
		}
	
	}

?>
