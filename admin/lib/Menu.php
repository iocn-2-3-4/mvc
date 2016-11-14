<?php

		class lib_Menu {
		public $AdminMenuItem = array("Просмотр"=>"/index.php", "Каталог"=>"http://www.mvccms/?route=controller", "Сьебаться"=>"http://www.mvccms/?route=exit");

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