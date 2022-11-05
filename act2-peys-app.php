<!DOCTYPE html>
<html>
<head>
	<title>Peys App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="margin: 25px;">

	<h1>Peys App</h1>
	<form method="get">
		<label for="imgSize">Select Image Size:</label>
		<input type="range" name="imgSize"  id="imgSize" min="10" max="100"><br>
		<label for="borderColor">Select Border Color:</label>
		<input type="color" name="borderColor" id="borderColor"><br>
		<input type="submit" name="btnProcess" value="Process">
	</form>
	

	<?php
		$selectedSize = 20;
		$selectedColor = 'red';
		if(isset($_GET['btnProcess'])){
			$selectedSize = $_GET['imgSize'];
			$selectedColor = $_GET['borderColor'];		
		}
		echo '<img id="profile-img" class="profile-img-card rounded mx-auto d-block" style="border-style: solid; width: '.$selectedSize.'%; border-color: '.$selectedColor.';" src="https://images.pexels.com/photos/1236701/pexels-photo-1236701.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>';
	?>

	
	<script type="text/javascript" href="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" href="js/bootstrap.js"></script>

</body>
</html>