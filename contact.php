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

    <title>Contact</title>
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

<!-- Contact -->
<div class="container contact">
  <div class="row mb-4">
      <div class="col text-center">
          <h2>Contact Us</h2>
      </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-lg-5">
          <div class="card text-white bg mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Some quick example text to build on the card title and make up</p>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><h1>Location</h1></li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl.Mangun Jaya 1</li>
            <li class="list-group-item">West Java, Indonesia</li>
          </ul>
      </div>

      <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="My Name...">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="name@email...">
            </div>
            <div class="form-group">
              <label for="notelp">No. HP</label>
              <input type="text" class="form-control" id="nohp" placeholder="08xxxxx">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" class="form-control" placeholder="Hi, i'm verry happy"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary tombol" id="Button">Send</button>
            </div>
          </form> 
      </div>
  </div>
</div>
<!-- Contact End -->

<!-- Footer -->
<div class="row footer">
  <div class="col text-center">
    <p class="p-footer">2020 All Rights Reserved by Theofilus.</p>
  </div>
</div>
<!-- Footer End -->