<!-- My PHP -->
<?php
include('dbconnect.php');
include('html_head.php');
?>

<link rel="stylesheet" href="style.css">

<head>
    <title>Login</title>
</head>

<!-- Form -->
<form id="loginHome" method="POST" action="login.php">
	<div class="container col-lg-5">
		<div class="form-group">
			<label>Email address</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>
		<button type="submit" name="login" class="btn btn-primary tombol">Login</button>
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#registerModal">Register</button>
	</div>
</form>
<!-- Form End -->

<!-- Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-dark text-white">
				<h5 class="modal-title" id="exampleModalLabel">Register</h5>
			</div>
			<div class="modal-body">
				<div id="notification"></div>
				<form id="formRegister" method="POST" action="register.php">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name...">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password...">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email...">
					</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" id="btnSave" class="btn btn-warning btn-save">Register</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal Register End -->