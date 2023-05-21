<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$area = $_POST['area'];
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'test', 3306);
if (!$conn) {
	die("Connection Failed : " . mysqli_connect_error());
}
// $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, area) values(?, ?, ?, ?, ?)");
// $stmt->bind_param("sssss", $firstName, $lastName, $gender, $email, $area);
// $execval = $stmt->execute();
// echo $execval;
$sql = "INSERT INTO registration(firstName, lastName, gender, email, area) VALUES('$firstName', '$lastName', '$gender', '$email', '$area')";
if (mysqli_query($conn, $sql)) {
	echo "Registration successfully...";
	header("Location: http://localhost/project/index.php");
} else {
	echo "Registration failed " . mysqli_error($conn);
}
// $stmt->close();
// $conn->close();
?>