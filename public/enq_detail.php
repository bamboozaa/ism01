<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
  require 'con.inc.php';
// include 'con.inc.php';
//   require './inc/function.inc.php';

  foreach($_GET as $key => $val) {
    ${$key}=$val;
  }

  $sql = "SELECT * FROM enquiries WHERE `enq_id` = '". $id . "'";
//   $result = select($sql);
    $result = $conn->query($sql);
  foreach ($result as $key => $row) {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://utcc2.utcc.ac.th/admissionism/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>INTERNATIONAL SCHOOL OF MANAGEMENT ONLINE ENQUIRY FORM</title>
  </head>
  <body>
    <header class="banner">
      <img src="./img/banner_home.png" alt="" class="d-none d-lg-block w-100">
    </header>

    <div class="container-fluid" id="detail-container">
      <div class="row">
        <div class="col-12 pt-4">
          <h1 class="text-center" style="color: #00008b;">ENQUIRY FORM</h1>
        </div>
        <div class="container" id="form-container">
          <div class="col-12 col-md-12 my-3">
            <div class="text-left py-3">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">NAME</label>
                  <input type="text" id="name" name="name" class="form-control" value="<?= $row['name'] ?>" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="nationality">NATIONALITY</span></label>
                  <input type="text" id="nationality" name="nationality" class="form-control" value="<?= $row['nationality'] ?>" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="program_interested">PROGRAM INTERESTED</label>
                  <input type="text" id="program_interested" name="program_interested" value="<?= $row['program_interested'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="entry_semester">ENTRY SEMESTER</label>
                  <input type="text" id="entry_semester" name="entry_semester" value="<?= $row['entry_semester'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="current_education">CURRENT EDUCATION STATUS</label>
                  <input type="text" id="current_education" name="current_education" value="<?= $row['current_education'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="school_name">SCHOOL/UNIVERSITY NAME</label>
                  <input type="text" name="school_name" value="<?= $row['school_name'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="email">EMAIL</label>
                  <input type="text" id="email" name="email" value="<?= $row['email'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">MOBILE NUMBER</label>
                  <input type="tel" id="phone" name="phone" value="<?= $row['phone'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <label for="where_did_you_hear">WHERE DID YOU HEAR ABOUT UTCC-ISM? </label>
                  <input type="text" id="where_did_you_hear" name="where_did_you_hear" value="<?= $row['where_did_you_hear'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <label for="direct_message">DIRECT MESSAGE </label>
                  <!-- <input type="text" id="direct_message" name="direct_message" value="<?= $row['direct_message'] ?>" class="form-control" readonly /> -->
                  <textarea name="direct_message" class="form-control" id="direct_message" rows="3" readonly><?= $row['direct_message'] ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <a href="javascript:window.close();" class="btn btn-danger">Close</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="justify-content-between footer p-2 text-center" style="background-color: #02247d; color: #fff">
      <div class="col-12"> Copyright @ 2020 </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="./js/custom.js"></script>

  </body>
</html>
<?php
  }
}
 ?>
