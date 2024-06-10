<?php
include 'con.inc.php';
// require './inc/connect.inc.php';
// require './inc/function.inc.php';
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
        <div class="container my-3" id="form-container">
          <div class="col-12 col-md-12 my-3">
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // $sql = "SELECT * FROM " . TBL_ENQ;
                $sql = "SELECT * FROM tbl_enquiry";
                // $result = select($sql);
                $result = $conn->query($sql);
                foreach ($result as $key => $row) {
                ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><a href='enq_detail.php?id=<?= $row['enq_id'] ?>' target="_blank">detail</a></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
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
