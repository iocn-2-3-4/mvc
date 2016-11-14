
<?php
$i=6;
foreach($Items as $item){
				if($i%6==0) {
			echo '<div style="clear:both;"></div>';}
			// endif;
			echo '<div class="product">';
			if($_SESSION["Auth"] === "admin"):
			 echo '<ul class="edit_product">
				<li><a href="#">Удалить</a></li>
				<li><a href="#">Редактировать</a></li>
				<h4>'.$item["id"].'</h4>
			</ul>';
			endif;
			echo '
				<h4>
				'.$item["name"].'
				</h4>
				<div class="product_price">
				'.$item["price"].' 
				</div>
				<div class="product_image">
				<image src="/images/'.$item["image_url"].'" />
				</div>
			</div>';
			$i++;
			
		}	


?>