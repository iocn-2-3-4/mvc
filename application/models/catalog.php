<?php

 class application_models_catalog extends lib_Db {
      

	  function getList() {  
         
		 $sql = "SELECT * FROM product";
         //$result = $model->query($sql);
         $link = mysqli_connect("localhost", "mvccms", "", "mvccms");
		 $result = mysqli_query($link, $sql)  or die(mysqli_error());
		// $result = $model->query($sql);
		 while ($row = mysqli_fetch_assoc($result))
		 {		 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"price"=>$row['price'],
				"image_url"=>$row['image_url']				
			);
		  }
		
		
		 return $сatalogItems; 
	  }

	 //  function deleteProduct($id) {
	 //  	$sql = "DELETE FROM product WHERE id = '$id'";
	 //  	         $link = mysqli_connect("localhost", "mvccms", "", "mvccms");
		//  $result = mysqli_query($link, $sql)  or die(mysqli_error());
		// // $result = $model->query($sql);
		//  while ($row = mysqli_fetch_assoc($result))
		//  {		 
		// 	$сatalogItems[]=array(
		// 		"id"=>$row['id'],
		// 		"name"=>$row['name'],
		// 		"price"=>$row['price'],
		// 		"image_url"=>$row['image_url']				
		// 	);
		//   }
	 //  }
  } 
?>  
