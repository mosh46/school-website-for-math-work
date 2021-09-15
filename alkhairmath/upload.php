<?php
// Set connection variables
if (isset($_POST["submit"])) {
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "alkhairmath";

	// Create a database connection
	$conn = mysqli_connect($server, $username, $password, $dbname);

	// Check for connection success
	if (!$conn) {
		"<h1>REQUEST FAILED<h2>";
		"<br>";
		die("connection to this database failed due to" . mysqli_connect_error());
	}

	echo "<pre>";
	print_r($_FILES['pic']);
	print_r($_FILES['file']);
	echo "</pre>";

	$name = $_POST['name'];
	$title = $_POST['title'];
	$desc = $_POST['desc'];

	$file = $_FILES['file'];
	$img_name = $_FILES['pic']['name'];
	$tmp_name = $_FILES['pic']['tmp_name'];
	$error = $_FILES['pic']['error'];
	$filename = $_FILES['file']['name'];
	$file = $_FILES['file']['tmp_name'];
	//$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
	$img_upload_path = 'uploads/' . basename($img_name);
	$destination = 'zip-uploads/' . basename($filename);

	move_uploaded_file($tmp_name, $img_upload_path);
	move_uploaded_file($file, $destination);


	// Insert into Database
	$sql = "INSERT INTO `upload`(`sr.no`, `name`, `title`, `description`, `pic`, `file`, `dt`) VALUES ('','$name','$title','$desc','$img_name','$filename',current_timestamp());";
	mysqli_query($conn, $sql);
	echo("<h1>Succesfully Uploaded</h1>");
	die();
} else {
	echo ("do not submitted");
	header("refresh:3;url=dashboard.php");
	die();
}
