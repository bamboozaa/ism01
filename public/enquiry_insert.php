<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Insert Enquiry</title>
  </head>
  <body>
    <?php
    include 'con.inc.php';
    // include 'function.inc.php';
    // include 'PHPMailer/PHPMailerAutoload.php';

    foreach($_POST as $key => $val) {
      ${$key}=$val;
    }

    $created_at = date("Y-m-d H:i:s");

    $stmt = $conn->prepare("INSERT INTO enquiries (name, nationality, program_interested, entry_semester, current_education, school_name, email, phone, direct_message, where_did_you_hear, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $name, $nationality, $program_interested, $entry_semester, $current_education, $school_name, $email, $full_number, $direct_message, $where_did_you_hear, $created_at);
    $stmt->execute();

    if($stmt->error) {
        echo $stmt->error;
    } else {
    ?>
        <script>
            swal({
            title: "Thank you!",
            text: "We will get back to you soon!",
            icon: "success",
            }).then(function() {
            window.location = "https://ism.utcc.ac.th/";
            });
        </script>
    <?php
    }

    $stmt->close();
    $conn->close();
?>
  </body>
</html>

