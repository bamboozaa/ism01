<?php
include 'con.inc.php';
// prepare and bind
// $stmt = $conn->prepare("INSERT INTO tbl_member (name, email, phone) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $name, $email, $phone);

    foreach($_POST as $key => $val) {
        ${$key}=$val;
    }

    $created_at = date("Y-m-d H:i:s");

    $stmt = $conn->prepare("INSERT INTO tbl_enquiry (name, nationality, program_interested, entry_semester, current_education, school_name, email, phone, direct_message, where_did_you_hear, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $name, $nationality, $program_interested, $entry_semester, $current_education, $school_name, $email, $full_number, $direct_message, $where_did_you_hear, $created_at);
    $stmt->execute();
/*
The argument may be one of four types:
i - integer
d - double
s - string
b - BLOB
*/
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $stmt->execute();


if($stmt->error){
	echo $stmt->error;
}else{
	echo "New record created successfully <a href='member.php'> home </a>";
}

$stmt->close();
$conn->close();

?>
