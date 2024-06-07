<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
  require './inc/connect.inc.php';
  require './inc/function.inc.php';

  foreach($_GET as $key => $val) {
    ${$key}=$val;
  }

  $sql = "SELECT * FROM " . TBL_APPS . " WHERE `app_id` = '". $id . "'";
  $result = select($sql);
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

    <title>INTERNATIONAL SCHOOL OF MANAGEMENT ONLINE APPLICATION FORM</title>
  </head>
  <body>
    <header class="banner">
      <img src="./img/banner_home.png" alt="" class="d-none d-lg-block w-100">
    </header>

    <div class="container-fluid" id="detail-container">
      <div class="row">
        <div class="col-12 pt-4">
          <h1 class="text-center" style="color: #00008b;">ONLINE APPLICATION FORM</h1>
        </div>
        <div class="container" id="form-container">
          <div class="col-12 col-md-12 my-3">
            <div class="text-left py-3">
              <div class="row">
                <div class="form-group col-md-2">
                  <label for="title_name">TITLE NAME</label>
                  <input type="text" name="title_name" list="title_name" value="<?= $row['title_name'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-4">
                  <label for="firstname">FIRST NAME</label>
                  <input type="text" id="firstname" name="first_name" class="form-control" value="<?= $row['first_name'] ?>" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname">LAST NAME</span></label>
                  <input type="text" id="lastname" name="last_name" class="form-control" value="<?= $row['last_name'] ?>" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="email">EMAIL</label>
                  <input type="text" id="email" name="email" value="<?= $row['email'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">PHONE NUMBER</label>
                  <input type="tel" id="phone" name="phone" value="<?= $row['phone'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="nationality">NATIONALITY</label>
                  <input type="text" id="nationality" name="nationality" value="<?= $row['nationality'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="id_card">ID CARD/PASSPORT</label>
                  <input type="text" id="id_card" name="id_card" value="<?= $row['id_card'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="school_name">SCHOOL/UNIVERSITY NAME</label>
                  <input type="text" id="school_name" name="school_name" value="<?= $row['school_name'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="highest_education">HIGHEST EDUCATION</label>
                  <input type="text" name="highest_education" value="<?= $row['highest_education'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="gpa">GPA/PERCENTAGE </label>
                  <input type="text" id="gpa" name="gpa" value="<?= $row['gpa'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="ielts_toefl_pte">IELTS/TOEFL/PTE (Optional) </label>
                  <input type="text" id="ielts_toefl_pte" name="ielts_toefl_pte" value="<?= $row['ielts_toefl_pte'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="interested_to_join">INTERESTED TO JOIN IN</label>
                  <input type="text" id="interested_to_join" name="interested_to_join" value="<?= $row['interested_to_join'] ?>" class="form-control" readonly />
                </div>
                <div class="form-group col-md-6">
                  <label for="program">PROGRAM TO STUDY</label>
                  <input type="text" id="program" name="program" value="<?= $row['program'] ?>" class="form-control" readonly />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="address">CURRENT ADDRESS </label>
                  <textarea rows="4" id="address" name="address" class="form-control" readonly /><?= $row['address'] ?></textarea>
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
