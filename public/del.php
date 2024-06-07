<?php
include 'condb.php';
// prepare and bind
$stmt = $conn->prepare("DELETE FROM tbl_member WHERE id=?");
$stmt->bind_param("i", $id);
/*
The argument may be one of four types:
i - integer
d - double
s - string
b - BLOB
*/
$id = $_GET['id'];
$stmt->execute();


if($stmt->error){
	echo $stmt->error;
}else{
	echo "del successfully <a href='index.php'> home </a> ";
}


$stmt->close();
$conn->close();

?>
