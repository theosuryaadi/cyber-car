<!-- My PHP -->
<?php
include('dbconnect.php');
include('html_head.php');
include('navbar.php');
?>

<head>
  <title>CyberCar</title>
</head>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid d-flex justify-content-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <h1 class="display-4">Welcome To Future</h1>
        <p class="lead">Discover the thrill of driving like the future with CyberCar.</p>
      </div>
      <div class="col-lg">
        <img src="img\svg/man_sitdown.svg" alt="man_sitdown">
      </div>
    </div>
  </div>
</div>
<!-- Jumbotron End -->

<!-- Sample -->
<div class="row sample">
        <div class="col-lg-6">
          <img src="img/svg/tesla.svg" alt="sample" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h3>feel the <span>future technology</span> in driving</h3>
          <p>Tesla technology uses electric power, which makes it environmentally friendly.</p>
          <a href="galery.php" class="btn btn-primary tombol" id="Button">Gallery</a>
        </div>
      </div>
<!-- Sample End -->

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






<!-- Scroll Back -->
<button class="rounded-circle" onclick="topFunction()" id="btnTop" title="Go to top">🠉</button>
<!-- Scroll Back End -->

<!-- Footer -->
<?php include('footer.php'); ?>
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