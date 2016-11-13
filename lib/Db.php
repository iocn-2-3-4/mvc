<?php
	class lib_Db extends mysqli {
		private $host; 
		private $user; 
		private $pass; 
		private $db; 

		public function __construct($host, $user, $pass, $db) {
			parent::__construct($host, $user, $pass, $db);

			if (mysqli_connect_error()) {
            	die('Ошибка подключения (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        	}
		}
	} 
?>