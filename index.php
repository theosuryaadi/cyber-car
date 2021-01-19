<head>
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<!-- My Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

    <title>Login</title>
</head>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="home.php">CyberCar</a>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="galery.php">Galery</a>
        <a class="nav-link" href="news.php">News</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="contact.php">Contact</a>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar End -->

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