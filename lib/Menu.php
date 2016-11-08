<?php
	class lib_Menu {
		public $MenuItem = array("Home"=>"/index.php", "Catalog"=>"?route=controller", "Admin"=>"?route=administrator");

		public function getMenu() {
			$print="<ul>";
			foreach($this->MenuItem as $name=>$menuitem) {
				$print.='<li><a href="'.$menuitem.'">'.$name."</a></li>";
			}
			$print .= "</ul>";
			return $print;
		}
	}
?>