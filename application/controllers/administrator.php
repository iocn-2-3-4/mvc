<?php
	class application_controllers_administrator extends lib_Controller {
		function index() {
			// $_SESSION["Auth"]=true;
			
			$model = new application_models_administrator("localhost", "mvccms", "", "mvccms");
			$users=$model->getUser();
			$this->user=$users;
			if(!empty($_POST)) {
				if (($users['login']===$_POST['login']) && ($users['pass']===$_POST['pass'])) { 
// session_start();

					echo "opo";
					$value = "admin";
					// $_SESSION["newsession"]=$value;
					$_SESSION["Auth"]=$value;
					// print_r($_SESSION); 

					// echo session_id();
					// session_destroy();
					// unset($_SESSION); 
				}
			 }
// session_start();


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
