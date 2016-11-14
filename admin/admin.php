<?php
	class admin extends lib_Menu {
		function getAdminMenu() {
echo "adminochka";
			$menu = new lib_Menu;
		$admin_menu = $menu->getAdminMenu();
		echo $admin_menu;
}
}
?>