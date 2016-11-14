<?php

//представление личного кабинета (страница личного кабинета)
// session_start();
					// print_r($_SESSION); 

if(!$_SESSION["Auth"]==="admin"){
echo "Только администраторы могут пользоваться этим разделом!";
}
if($_SESSION["Auth"]==="admin") {
	// echo "string";
		// 	$menu = new lib_Admin_Menu;
		// $admin_menu = $menu->getAdminMenu();
		// echo $admin_menu;


		 // $exit = $_SESSION = array();
		// $exit.='<a href="'.$exit.'">'."Exit"."</a>";
 	// session_unset($_SESSION["newsession"]);
// session_destroy();

 }else {
 	// echo "fuck";
}  
?>



<!-- <a href="/?out=1"><??></a>) 
<form action="?route=administrator" method="POST">
  Логин: &nbsp;<input type="text" name="login" value="" /><br />
  Пароль: <input type="text" name="pass" value="" /><br />
  <input type="submit" value="Вход" />
</form> -->


<?php
if($_SESSION["Auth"] !== "admin"):
// echo "double";
?>
<form action="?route=administrator" method="POST">
  Логин: &nbsp;<input type="text" name="login" value="" /><br />
  Пароль: <input type="text" name="pass" value="" /><br />
  <input type="submit" value="Вход" />
</form>
<?php
endif;?>