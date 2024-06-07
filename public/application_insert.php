<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Insert Application</title>
  </head>
  <body>
    <?php
    include 'con.inc.php';
    // require './inc/function.inc.php';
    // require './PHPMailer/PHPMailerAutoload.php';

    foreach($_POST as $key => $val) {
      ${$key}=$val;
    }

    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s");

    $stmt = $conn->prepare("INSERT INTO tbl_application (title_name, first_name, last_name, email, phone, nationality, id_card, school_name, highest_education, gpa, ielts_toefl_pte, interested_to_join, program, address, created_at, updated_at, status_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssssss", $title_name, $first_name, $last_name, $email, $full_number, $nationality, $id_card, $school_name, $highest_education, $gpa, $ielts_toefl_pte, $interested_to_join, $program, $address, $created_at, $updated_at, 1);
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
