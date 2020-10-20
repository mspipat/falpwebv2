<?php
$conn = new mysqli('localhost', 'root', '', 'falpweb_db');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$operation = mysqli_real_escape_string($conn, $_GET['operation']);
$sender = mysqli_real_escape_string($conn, $_GET['sender']);
$sender_number = mysqli_real_escape_string($conn, $_GET['sender_number']);
$sender_email = mysqli_real_escape_string($conn, $_GET['sender_email']);
$subject = mysqli_real_escape_string($conn, $_GET['subject']);
$uploaded_resume = mysqli_real_escape_string($conn, $_GET['uploaded_resume']);
$msg = mysqli_real_escape_string($conn, $_GET['msg']);
$hiring = mysqli_real_escape_string($conn, $_GET['hiring']);
$msg1 = str_replace(PHP_EOL, "<br>", $msg);
if ($operation == 'send_application'){
	$sql = "INSERT INTO falp_applicant(id, hiring, name, contact_number, email, subject, message, resume)
	VALUES ('', '$hiring', '$sender', '$sender_number', '$sender_email', '$subject', '$msg1', '$uploaded_resume')";
	if ($conn->query($sql) === TRUE) {
		echo "Thank you for your application. We will get back to you Soon!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>