<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php
	$errName = $errPass = $errRePass = $errcom = $erremail = $errgender = '';
	$check = true;
	$name = $password = $repassword = $errGender = $email = $comment = $errCity = '';
	$checkMale = $checkFemale = $checkOther = '';
	$checkDN = $checkHN = $checkHCM = '';
	if (isset($_POST['submit'])) {
		//var_dump($_FILES);exit();
		$name = $_POST['name'];
		$password = $_POST['password'];
		$repassword = $_POST['re_password'];
		$comment = $_POST['comment'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		$avt = $_FILES['avatar']['name'];
   		$src = "img/".$avt;
		if ($name == '') {
			$check = false;
			$errName = 'Please input your name!';
		}
		if ($password == '') {
			$check = false;
			$errPass = 'Please input your password!';
		}
		if ($repassword != $password) {
			$check = false;
			$errRePass = 'Please input your password!';
		}
		if($comment == ''){
			$check = false;
			$errcom = 'Please input your comment';
		}
		if ($email == '') {
			$check = false;
		    $erremail = 'Please input your Email';
		  } else {
		   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 				$erremail = 'Invalid email format'; 
		  }
		}
		if ($gender == '') {
			$check = false;
			$errGender = 'Please choose your gender!';
		} else {
			if ($gender == 'male') {
				$checkMale = "checked";
			}
			if ($gender == 'female') {
				$checkFemale = "checked";
			}
			if ($gender == 'other') {
				$checkOther = "checked";
			}
		}
		if ($city == '') {
			$check = false;
			$errCity = 'Please choose your city!';
		} else {
			if ($city == 'danang') {
				$checkDN = "selected";
			}
			if ($city == 'hanoi') {
				$checkHN = "selected";
			}
			if ($city == 'hcm') {
				$checkHCM = "selected";
			}
		}
		if ($check) {
			echo "Tên là: ";
			echo $name;
			echo "<br>";
			echo "Email là: ";
			echo $email;
			echo "<br>";
			echo "password là: *********";
			echo "<br>";
			echo "tình trạng: ";
			echo $comment;
			echo "<br>";
			echo "có giới tính: ";
			echo $gender;
			echo "<br>";
			echo "sinh sống tại: ";
			echo $city;
			echo "<b>Avatar : </b> <img src="."img/".$avt." />";
			}
	}	
	?>
	<form action="#" name="RegisterForm" method="post" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name" value="<?php echo $name; ?>">
			<span class="error"><?php echo $errName;?></span>
		</p>
		<p>Email: <input type="text" name="email" value="<?php echo $email; ?>">
			<span class="error"><?php echo $erremail;?></span>
		</p>

		<p>Password: <input type="password" name="password" value="<?php echo $password; ?>">
			<span class="error"><?php echo $errPass;?></span>
		</p>
		<p>Re-Password: <input type="password" name="re_password" value="<?php echo $repassword; ?>">
			<span class="error"><?php echo $errRePass;?></span>
		</p>
		<p>Comment: <textarea name="comment" rows="5" cols="40" value="<?php echo $comment; ?>"></textarea>
			<span class="error"><?php echo $errcom;?></span>
		</p>

		<p>Gender:
			<input type="radio" name="gender" value="male" <?php echo $checkMale;?>> Male
			<input type="radio" name="gender" value="female" <?php echo $checkFemale;?>> Female
			<input type="radio" name="gender" value="other" <?php echo $checkOther;?>> Other
			<span class="error"><?php echo $errGender;?></span>
		</p>
		<p>City:
			<select name="city">
				<option value="">Choose city</option>
				<option value="danang" <?php echo $checkDN;?>>Da Nang</option>
				<option value="hanoi" <?php echo $checkHN;?>>Ha Noi</option>
				<option value="hcm" <?php echo $checkHCM;?>>Ho Chi Minh</option>
			</select>
			<span class="error"><?php echo $errCity;?></span>
		</p>
		<p>Avatar: <input type="file" name="avatar"></p>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>