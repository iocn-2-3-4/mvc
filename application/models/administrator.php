<?php
	class application_models_administrator extends lib_Db {
		function getUser() {
			$sql = "SELECT login,pass FROM user";
        	$link = mysqli_connect("localhost", "mvccms", "", "mvccms");
			$result = mysqli_query($link, $sql)  or die(mysqli_error());
			
			while($data = mysqli_fetch_assoc($result)) {
				$list_users = array(
						"login"=>$data['login'],
						"pass"=>$data['pass']
					);
			}
			return $list_users;
		}
	}
?>