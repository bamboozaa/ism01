<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container">
	<div class="row">
		<div  class="col-sm-5">
			<br>
			<h3>Form Add Data</h3>
			<form action="save.php" method="post">
				<div class="form-group">
					name : <input type="text" name="name" required class="form-control" placeholder="name">
				</div>
				<div class="form-group">
					email : <input type="email" name="email" required class="form-control" placeholder="email">
				</div>
				<div class="form-group">
					phone : <input type="tel" name="phone" required class="form-control" placeholder="phone">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">save</button>
				</div>
			</form>
		</div>
	</div>
</div>
