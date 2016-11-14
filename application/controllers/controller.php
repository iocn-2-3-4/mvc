<?php

  class application_controllers_controller extends lib_Controller {

     function index() {
	       $model= new application_models_catalog("localhost", "mvccms", "", "mvccms");
		           //$sql = "SELECT * FROM product";
     //$result = mysqli_query($link, $sql)  or die(mysqli_error());

         $Items = $model->getList();	
		     $this->Items=$Items;

         // $Delete = $model->deleteProduct($id);
         // $this->Delete=$Delete;
     // $Charset = $model->Getcharset();
     // $this->Charset = $Charset;
		 //include ("application/views/view.php");
	 }
  }