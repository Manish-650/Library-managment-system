<?php
  include "navbar.php";
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
    	body {
			background-image: url("images/feed.jpg");
			background-position: center;
			background-size: cover;
			position: relative;
			min-height: 100vh;
			width: 100%;
		}

		.wrapper {
			border-radius: 20px;
			padding: 10px;
			margin: -20px auto;
			width: 700px;
			height: 500px;
			background-color: black;
			opacity: .8;
			color: white;
			margin-top: 60px;
			text-align: center;
			
		}

		.form-control {
			height: 100px;
			width: 60%;
			margin-left: 21%;
			text-align: center;
		}

		.scroll {
			margin-left: 40%;
			text-align: center;
			width: fit-content;
			height: 300px;
			overflow: auto;			
		}

    </style>
</head>
<body>
<div class="wrapper">
		<br><h4>Any Suggesions or Questions</h4>
		<h4> Please comment below.</h4><br><br>
		<form action="" method="post">
			<input class="form-control" type="text" name="comment" placeholder="Write something..."><br>
			<input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">	
		</form>
	
<br><br>
	<div class="scroll">
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				}

			}

			else
			{
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
			}
		?>
	</div>
	</div>
</body>
</html>