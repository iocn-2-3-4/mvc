
<?php
foreach($Items as $item){
			echo '<div class="product">
				<h2>
				'.$item["name"].'
				</h2>
				<div class="product_price">
				'.$item["price"].' 
				</div>
				<div class="product_image">
				<image src="/images/'.$item["image_url"].'" />
				</div>
			</div>';
		}	


?>