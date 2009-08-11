<?php
	/**
	* Login Redirector
	* 
	* @package login_redirector
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/

	function set_user_redirect(){
		global $CONFIG;

		$username = get_loggedin_user()->username;

		$custom = get_plugin_setting("custom_redirect","login_redirector");

		if(!empty($custom)){
		$custom = str_replace("[wwwroot]",$CONFIG->wwwroot,$custom);
		 $custom = str_replace("[username]",$username,$custom);
		 $_SESSION['last_forward_from'] = $custom;
		}
		
	}

register_elgg_event_handler('create','user','set_user_redirect');

?>