<?php
class application_controllers_exit extends lib_Controller {
	function index() {
// session_unset($_SESSION["Auth"]);
// session_destroy();
// session_start();
		
					// print_r($_SESSION); 
$_SESSION = array();
$_SESSION["Auth"]=true;
// $_SESSION = array();
}
}
?>