<?php
$products  = array(
	'ipx' => array(
			'name' => 'Iphone X'
			'price' => '30.000.000'
			'image'=> 'iphonex.png'
			'description' => 'Dòng điện thoại mới của Apple..'
		),
	'j7prime' => array(
			'name' => 'J7 Prime'
			'price' => '6.000.000'
			'image'=> 'j7prine.png'
			'description' => 'Dòng điện thoại mới của sasung..'
		)
	);
function showimage($image){
	return "<img src = '$image' alt =''>";
	}
	function priceDiscount($price, $discount) {
		return $price * (100 - $discount);
	}
function listProducts ($products ) {
		$i = 1;
		foreach ($products as $key => $value) {
			if(isset($value['discount'])){
				echo $i.' - '. $value['name'].' - '. $value['price'].' - '. showimage($value['image']).' - '. $value['description'].' - '. priceDiscount($value['price'], $value['discount'])."<br>";
			}else{
				echo $i.' - '. $value['name'].' - '. $value['price'].' - '. showimage($value['image']).' - '. $value['description']."<br>";
			}
			
		}
	}
	listClass($products);
	$products['iphonex']['discount'] = 10;
	$products['j7prime']['discount'] = 15;
	echo "<br><br>";


?> 