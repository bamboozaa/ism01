<?php
include 'condb.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_member WHERE id=$id";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$num = $result->num_rows;
//echo $num;
//print_r($row);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container">
	<div class="row">
		<div  class="col-sm-5">
			<br>
			<h3>Form Update Data</h3>
			<form action="saveedit.php" method="post">
				<div class="form-group">
				id : <input type="number" name="id" readonly value="<?php echo $row['id'];?>" class="form-control">
				</div>
				<div class="form-group">
				name : <input type="text" name="name" required value="<?php echo $row['name'];?>" class="form-control" placeholder="name">
				</div>
				<div class="form-group">
				email : <input type="email" name="email" required value="<?php echo $row['email'];?>" class="form-control" placeholder="email">
			</div>
				<div class="form-group">
				phone : <input type="tel" name="phone" required value="<?php echo $row['phone'];?>" class="form-control" placeholder="phone">
				</div>
				<div class="form-group">
				<button type="submit" class="btn btn-success">save</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php }else{  echo 'Error!';  } ?>
