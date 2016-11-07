<?php

 class application_models_catalog
  {	  
	  function getList()
	  {  
    	$link = mysqli_connect("localhost", "mvccms", "", "mvccms");
		 $sql = "SELECT * FROM product";
		 $result = mysqli_query($link, $sql)  or die(mysqli_error());
	
		 while ($row = mysqli_fetch_assoc($result))
		 {		 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"price"=>$row['price'],
				"url"=>$row['url']				
			);
		  }
		
		
		 return $сatalogItems; 
	  }
  } 
?>  
