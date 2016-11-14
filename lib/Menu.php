<?php
	class lib_Menu {
		public $MenuItem = array("Home"=>"/index.php", "Catalog"=>"?route=controller", "TEST"=>"?route=administrator");

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
		public $AdminMenuItem = array("Просмотр"=>"/index.php", "Каталог"=>"?route=controller", "Выйти"=>"?route=exit", "Сохранить"=>"?route=administrator");

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