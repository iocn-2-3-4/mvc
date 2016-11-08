<?php
	class application_controllers_administrator extends lib_Controller {
		function index() {
			
			$model = new application_models_administrator("localhost", "mvccms", "", "mvccms");
			$users=$model->getUser();
			$this->user=$users;
			if(!empty($_POST)) {
				if (($users['login']===$_POST['login']) && ($users['pass']===$_POST['pass'])) { 
					//echo "opo";
					session_start();
					$value = "admin";
					$_SESSION["newsession"]=$value;
					print_r($_SESSION); 
					echo session_id();
					session_destroy();
					unset($_SESSION); 
				}
			 }

			//print_r($users['login']);
			//print_r($_POST['login']);
		}

		// function check($log,$pas) {
		// 	$model = new application_models_administrator("localhost", "mvccms", "", "mvccms");

		// 				$users=$model->getUser();
		// 	$this->user=$users;
		// 	print_r($users);
		// 	$a=$_POST['login'];
		// 	$b=$_POST['pass'];
		// 		$m = print_r($a);
		// 	print_r($_POST);

		// 	return $m;
		// }   
	}
