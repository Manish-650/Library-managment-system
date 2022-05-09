<?php
include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>Edit profile</title>
	<link rel="stylesheet" href="style.css?=<?php echo time(); ?>">
</head>

<style>
	body {
		min-height: 100vh;
		width: 100%;
		background-image: linear-gradient(rgba(4, 9, 30, 0.4), rgba(0, 1, 3, 0.3)),
			url("./images/profBack.jpg");
		background-position: center;
		background-size: cover;
		position: relative;
	}
</style>

<body>

	<h2 style="text-align: center; color: white; font-family:Georgia, 'Times New Roman', Times, serif;margin-top:2%; ">Edit Information</h2>
	<?php

	$sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]'";
	$result = mysqli_query($db, $sql) or die(mysql_error());

	while ($row = mysqli_fetch_assoc($result)) {
		$first = $row['first'];
		$last = $row['last'];
		$username = $row['username'];
		$password = $row['password'];
		$email = $row['email'];
		$contact = $row['contact'];
	}

	?>


	<section class="edit_form">
		<div class="foC">
			<br><br>
			<form action="" method="post" enctype="multipart/form-data">
				<input class="form-control" type="file" name="file">


				<h4>First Name:</h4>

				<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">


				<h4>Last Name:</h4>

				<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">


				<h4>Username:</h4>
				<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">


				<h4>Password:</h4>

				<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">


				<h4>Email:</h4>

				<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">


				<h4>Contact No:</h4>

				<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

				<br>
				<div style="padding-left: 160px;">
					<button class="btn_btn-default" type="submit" name="submit">Save</button>
				</div>

			</form>
		</div>
	</section>

	<?php

	if (isset($_POST['submit'])) {
		move_uploaded_file($_FILES['file']['tmp_name'], "images/" . $_FILES['file']['name']);

		$first = $_POST['first'];
		$last = $_POST['last'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$pic = $_FILES['file']['name'];

		$sql1 = "UPDATE admin SET pic='$pic', first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact' WHERE username='" . $_SESSION['login_user'] . "';";

		if (mysqli_query($db, $sql1)) {
	?>
			<script type="text/javascript">
				alert("Saved Successfully.");
				window.location = "profile.php";
			</script>
	<?php
		}
	}
	?>
</body>

</html>