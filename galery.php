<!-- My PHP -->
<?php
include('dbconnect.php');
include('html_head.php');
include('navbar.php');
?>

<head>
    <title>Galery</title>
</head>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid d-flex justify-content-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <h1 class="display-4">Galery</h1>
        <p class="lead">Let's find the style that match for you.</p>
      </div>
      <div class="col-lg">
          <!-- Slider -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/svg/couple.svg" class="" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/svg/2_man_red_car.svg" class="" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/svg/woman_stand.svg" class="" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Slider End -->
      </div>
    </div>
  </div>
</div>
<!-- Jumbotron End -->

<!-- Detail -->
<section id="detail" class="detail">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
              <h1 class="display-4">Model S</h1>
              <h5>Starting at $69,420</h5>
              <a class="btn btn-primary tombol" id="Button" href="model_s.php">Detail</a>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6">
                <img src="img/model_s/model-s.jpg" alt="model-s">
            </div>
            <div class="col-lg-6 text-justify">
                <p>Model S sets an industry standard for performance and safety. Tesla's all-electric powertrain delivers unparalleled performance in all weather conditions – with Dual Motor All-Wheel Drive, adaptive air suspension and ludicrous acceleration. Model S sets an industry standard for performance and safety.</p>
                <img src="img/model_s/dtl-model-s.png" alt="adventages">
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col text-center">
              <h1 class="display-4">Model 3</h1>
              <h5>Starting at $80,420</h5>
              <a class="btn btn-primary tombol" id="Button" href="model_3.php">Detail</a>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6">
                <img src="img/model_3/model-3.jpg" alt="model-3">
            </div>
            <div class="col-lg-6 text-justify">
                <p> The Model 3 gains a longer range, up to 13 miles in the Standard Range Plus trim and 31 miles in the Long Range trim. It also receives some cosmetic updates, such as a new wheel design, satin trim, and a restyled center console.</p>
                <img src="img/model_3/dtl-model-3.png" alt="adventages">
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col text-center">
              <h1 class="display-4">Model X</h1>
              <h5>Starting at $79,420</h5>
              <a class="btn btn-primary tombol" id="Button" href="model_x.php">Detail</a>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6">
                <img src="img/model_x/model-x.jpg" alt="model-x">
            </div>
            <div class="col-lg-6 text-justify">
                <p>The Tesla Model X is equipped with a 100-kWh battery and two electric motors, one powering the front wheels and the other powering the rear wheels. The standard Model X can accelerate from zero to 60 mph in just 4.4 seconds. The Performance model cuts that sprint to 2.6 seconds when in Ludicrous Mode.</p>
                <img src="img/model_x/dtl-model-x.png" alt="adventages">
            </div>
        </div>
    </div>

    <!-- Scroll Back -->
    <button class="rounded-circle" onclick="topFunction()" id="btnTop" title="Go to top">🠉</button>
    <!-- Scroll Back End -->

    <!-- Footer -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->
</section>
<!-- Detail End -->



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