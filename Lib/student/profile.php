<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>Profile</title>
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
	<form action="" method="post">
	<button class="btn_btn-default" style=" float:right;margin-right:30px;" name="submit1" type="submit">Edit</button>
	</form>
	<section class="prof">
		<div class="wrapper_profile">
			<div class="sip" style="margin:3%;">
				<?php

				if (isset($_POST['submit1'])) {
				?>
					<script type="text/javascript">
						window.location = "edit.php"
					</script>
				<?php
				}
				$q = mysqli_query($db, "SELECT * FROM student where username='$_SESSION[login_user]' ;");
				?>


				<?php
				$row = mysqli_fetch_assoc($q);

				echo "<div style='text-align: center'>
 					<img class='img-square profile-img' height=270 width=280 src='images/" . $_SESSION['pic'] . "'>
 				 </div>";
				?>
			</div>
			<div class="sip" style="width:100%; margin-left:3%;margin-top:3%;margin-right:-5%;">
			<?php
				echo "<div class='inprof' style= width:100%;'>";

				echo "<div class='name1' style='font-size:40px; margin-top:5%;'>";
				echo "<h1>";
				echo $row['first'];
				echo " ";
				echo $row['last'];
				echo "<hr style='border :1px solid black'; >";
				echo "</h1>";

				echo "</div>";



				echo "<div class='name2' style='font-size=:30px; '>";
				echo "<h2>";
				echo "About";
				echo "</h2>";
				echo "<hr style='border :1px solid black'; margin-right:10%;>";
				echo "</div>";


				echo "<div  style='font-size=:20px;'>";
				echo "<h3>";
				echo "<b> User Name: </b>";
				echo $row['username'];
				echo "</h3>";
				echo "</div>";

				echo "<div  style='font-size=:20px;'>";
				echo "<h3>";
				echo "<b> Password: </b>";
				echo $row['password'];
				echo "</h3>";
				echo "</div>";


				echo "<div  style='font-size=:20px;'>";
				echo "<h3>";
				echo "<b> Email: </b>";
				echo $row['email'];
				echo "</div>";

				echo "<div  style='font-size=:20px;'>";
				echo "<h3>";
				echo "<b> Contact: </b>";
				echo $row['contact'];
				echo "</h3>";
				echo "</div>";


				echo "</div>";
				?>
			</div>
		</div>
	</section>
</body>

</html>