<?php 

	// Conditional Statements
	
	$price = 20;

	if($price < 30){
		echo 'if condition met';
	} elseif($price === 20) {
		echo 'elseif condition met';
	} else {
		echo 'condition not met';
	}
    $products = [
		['name' => 'Sword ni Panday', 'price' => 20],
		['name' => 'Green Lantern Ring', 'price' => 10],
		['name' => 'Red Pill', 'price' => 15],
		['name' => 'Gold Slug', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'Mjolnir', 'price' => 2]
	];

	foreach($products as $product){

		if($product['price'] < 15 && $product['price'] > 2){
			echo $product['name'] . '<br />';
		}

		if($product['price'] > 20 || $product['price'] < 10){
			echo $product['name'] . '<br />';
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>UC2L02</title>
</head>
<body>
    <h1 align="center">Conditional Statements</h1>
	<div>
		<ul>
			<?php foreach($products as $product){ ?>
				<?php if($product['price'] > 15){ ?>
					<li><?php echo $product['name'] ?></li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>

</body>
</html>