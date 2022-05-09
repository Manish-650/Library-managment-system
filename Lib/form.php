<?php
$name = $_post['name'];
$email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$conn = new mysqli('localhost','root','','library');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die('Connection Failed : ' .$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name, email, subject, message)
         values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $subject, $message);
        $stmt->execute();
		
		echo "Message send...";
		$stmt->close();
		$conn->close();
        header('Location: contact.php');
	}
?>

