<?php

  class application_controllers_controller extends lib_Controller {

     function index() {
	       $model=new application_models_catalog;
		 
         $Items = $model->getList();	
		     $this->Items=$Items;
     
     // $Charset = $model->Getcharset();
     // $this->Charset = $Charset;
		 //include ("application/views/view.php");
	 }
  }