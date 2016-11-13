<?php
	class lib_Menu {
		public $MenuItem = array("Home"=>"/index.php", "Catalog"=>"?route=controller", "Admin"=>"?route=auth", "TEST"=>"?route=administrator");

		public function getMenu() {
			$print="<ul>";
			foreach($this->MenuItem as $name=>$menuitem) {
				$print.='<li><a href="'.$menuitem.'">'.$name."</a></li>";
			}
			$print .= "</ul>";
			return $print;
		}
	}

		class lib_Admin_Menu {
		public $AdminMenuItem = array("Удалить"=>"/index.php", "Добавить"=>"?route=controller", "Выйти"=>"?route=exit", "Сохранить"=>"?route=administrator");

		public function getAdminMenu() {
			$print="<ul>";
			foreach($this->AdminMenuItem as $name=>$menuitem) {
				$print.='<li><a href="'.$menuitem.'">'.$name."</a></li>";
			}
			$print .= "</ul>";
			return $print;
		}
	}
?>