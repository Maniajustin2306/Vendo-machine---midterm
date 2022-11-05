<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom-login.css">
	<title>Login Form</title>
</head>
<body>

	<div class="container mt-5">
	<?php
		$inputUser = '';
		$selectedType = '';
		if(isset($_POST['btn-login'])){

			
			$selectedType = $_POST['drpType'];
			$inputUser = $_POST['inputUser'];
			$inputPass = $_POST['inputPass'];


			$arrUser = array('admin', 'renmark', 'pepito', 'juan', 'pedro', 'johnpaulo');
			$arrPass = array('pass1234', 'pogi1234', 'manaloto', 'delacruz', 'penduko', 'gapal');



			if ($selectedType == 'admin'){
				if (($inputUser == $arrUser[0] && $inputPass == $arrPass[0]) or ($inputUser == $arrUser[1] && $inputPass == $arrPass[1])) {
					echo '<div class="alert alert-success text-center w-25 p-3 mx-auto" role="alert">Welcome to the System: '.$inputUser.'</div>';
				}
				else
					echo '<div class="alert alert-danger text-center w-25 p-3 mx-auto" role="alert">Invalid Username / Password</div>';
			}
			elseif ($selectedType == 'contentManager'){
				if (($inputUser == $arrUser[2] && $inputPass == $arrPass[2]) or ($inputUser == $arrUser[3] && $inputPass == $arrPass[3])) {
					echo '<div class="alert alert-success text-center w-25 p-3 mx-auto" role="alert">Welcome to the System: '.$inputUser.'</div>';
				}
				else
					echo '<div class="alert alert-danger text-center w-25 p-3 mx-auto" role="alert">Invalid Username / Password</div>';
			}
			elseif ($selectedType == 'systemUser'){
				if (($inputUser == $arrUser[4] && $inputPass == $arrPass[4]) or ($inputUser == $arrUser[5] && $inputPass == $arrPass[5])) {
					echo '<div class="alert alert-success text-center w-25 p-3 mx-auto" role="alert">Welcome to the System: '.$inputUser.'</div>';
				}
				else
					echo '<div class="alert alert-danger text-center w-25 p-3 mx-auto" role="alert">Invalid Username / Password</div>';
			}


		};

	?>
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <select name="drpType" id="drpType" class="form-control" style="margin-bottom: 10px"> <!-- naglagay po ako ng style para po di na kailangan custom css na ginawa ko sir -->
				  <option value="admin">Admin</option>
				  <option value="contentManager">Content Manager</option>
				  <option value="systemUser">System User</option>
				</select>
                <input type="text" name="inputUser" id="inputEmail" class="form-control" placeholder="User Name" value="<?php echo $inputUser; ?>" required autofocus>
                <input type="password" name="inputPass" id="inputPassword" class="form-control" placeholder="Password" required>      
                <input type="submit" name="btn-login" class="btn btn-lg btn-primary btn-block btn-signin" value="Login">
            </form>     
        </div>
    </div>
	<script type="text/javascript" href="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" href="js/bootstrap.js"></script>

	


</body>
</html>