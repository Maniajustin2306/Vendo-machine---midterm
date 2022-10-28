<!DOCTYPE html>
<html>
<head>
	<title>Vendo Machine</title>
</head>
<body>
	<h1>Vendo Machine</h1>
	<form method="post">
		<input type="checkbox" name="checkDrinks[]" id="checkCoke" value="Coke"><label for="checkCoke">Coke - ₱ 15</label><br>
		<input type="checkbox" name="checkDrinks[]" id="checkSprite" value="Sprite"><label for="checkSprite">Sprite - ₱ 20</label><br>
		<input type="checkbox" name="checkDrinks[]" id="checkRoyal" value="Royal"><label for="checkRoyal">Royal - ₱ 20</label><br>
		<input type="checkbox" name="checkDrinks[]" id="checkPepsi" value="Pepsi"><label for="checkPepsi">Pepsi - ₱ 15</label><br>
		<input type="checkbox" name="checkDrinks[]" id="checkMountainDew" value="MountainDew"><label for="checkMountainDew">Mountain Dew - ₱ 20</label><br>
		<br>
		<select name="drpSize" id="drpSize">
		  <option value="Regular">Regular</option>
		  <option value="Up-Size">Up-Size (Add ₱5)</option>
		  <option value="Jumbo">Jumbo (Add ₱10)</option>
		</select>

		<input type="number" name="inputQuantity" value="0" max="100" min="0">

		<input type="submit" name="btnCheckout" value="Check out">
	</form>

	<?php

	if(isset($_POST['btnCheckout']) && isset($_POST['checkDrinks'])):?>

	<?php

		$arrDrinks = $_POST['checkDrinks'];
		$selectedSize = $_POST['drpSize'];
		$inputQuantity = $_POST['inputQuantity'];
	?>

	<br>
	<hr>
	<h3>Purchase Summary:</h3>

	<?php 
	$totalFinal = 0;

		for($i = 0; $i < sizeof($arrDrinks); $i++){

			if ($arrDrinks[$i] == 'Coke') {
				$price = 15;
			}
			elseif ($arrDrinks[$i] == 'Sprite') {
				$price = 20;
			}
			elseif ($arrDrinks[$i] == 'Royal') {
				$price = 20;
			}
			elseif ($arrDrinks[$i] == 'Pepsi') {
				$price = 15;
			}
			else
				$price = 20;

			if ($selectedSize == 'Up-Size') {
				$size = 5;
			}
			elseif ($selectedSize == 'Jumbo') {
				$size = 10;
			}
			else
				$size = 0;


			$totalPrice = ($inputQuantity*($price+$size));
			$totalItems = $inputQuantity * sizeof($arrDrinks);
			
			echo "<ul>
					<li>$inputQuantity pieces of $selectedSize $arrDrinks[$i] to ₱ $totalPrice </li>
				</ul>";

			$totalFinal += $totalPrice;
		
		}

		echo '<b>Total Number of Items:  ₱ ' . $totalItems . '<br>Total Amount: ₱ ' . $totalFinal . '</b>';

	else:
		echo '<hr>No selected Product, Try Again';

	?>


	<?php endif; ?>

</body>
</html>
		
	
	


