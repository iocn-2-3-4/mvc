<?php
	class lib_Db extends mysqli {

		public function __construct($host, $user, $pass, $db) {

			parent::__construct($host, $user, $pass, $db);

			if (mysqli_connect_error()) {
            	die('Ошибка подключения (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        	}
		}
	} 
?>