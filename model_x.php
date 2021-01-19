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

    <title>Model X</title>
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

<!-- Jumbotron -->
<div class="desc3">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Model X</h1>
    </div>
  </div>
</div>
<!-- Jumbotron End -->

<!-- Info Panel -->
<div class="container">
  <div class="row justify-content-center">
      <div class="col-6 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="img/model_x/dtl-model-x.png" alt="dtl-model-3">
          </div>
          <div class="col-lg">
            <a class="btn btn-primary tombol" id="Button" href="">Order Now</a>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- info Panel End -->

<!-- SampleModel -->
<div class="row sampleModel ">
  <div class="col-lg-6">
    <img src="img/model_x/1.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_x/2.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<div class="row sample">
  <div class="col-lg-6">
    <img src="img/model_x/3.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_x/4.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<div class="row sample">
  <div class="col-lg-6">
    <img src="img/model_x/5.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_x/6.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<div class="row sample">
  <div class="col-lg-6">
    <img src="img/model_x/7.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_x/8.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<!-- SampleModel End -->

<!-- Scroll Back -->
<button class="rounded-circle" onclick="topFunction()" id="btnTop" title="Go to top">🠉</button>
    <!-- Scroll Back End -->


<!-- Footer -->
<div class="row footer">
  <div class="col text-center">
    <p class="p-footer">2020 All Rights Reserved by Theofilus.</p>
  </div>
</div>
<!-- Footer End -->


<!-- JS -->
<script>
  //Get the button
  var mybutton = document.getElementById("btnTop");

  // When the user scrolls down 100px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- JS End -->