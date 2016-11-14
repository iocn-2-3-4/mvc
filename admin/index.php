<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
//include_once("config.php");
 function __autoload ($class_name) //автоматическая загрузка кслассов
 {
    $path=str_replace("_", "/", $class_name);//разбивает имя класска получая из него путь
    include_once("".$path .".php");//подключает php файл по полученному пути	
 }
include_once("../lib/Router.php");

$router=new Router; //создаем объект, который будет искать нуджные контролеры
$member=$router->AdminRun();//Начинаем поиск нужного контролера
$member['init']=0;
  foreach ($member as $key => $value)
	{
	 	$$key= $value;
	 	//print_r($value);
	}

?>