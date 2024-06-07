<?php
include 'condb.php';
// prepare and bind
$stmt = $conn->prepare("INSERT INTO tbl_member (name, email, phone) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $phone);
/*
The argument may be one of four types:
i - integer
d - double
s - string
b - BLOB
*/
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$stmt->execute();


if($stmt->error){
	echo $stmt->error;
}else{
	echo "New record created successfully <a href='member.php'> home </a>";
}

$stmt->close();
$conn->close();

?>
