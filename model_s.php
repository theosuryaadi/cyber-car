<!-- My PHP -->
<?php
include('dbconnect.php');
include('html_head.php');
include('navbar.php');
?>

<head>
    <title>Model S</title>
</head>

<!-- Jumbotron -->
<div class="desc">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Model S</h1>
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
            <img src="img/model_s/dtl-model-s.png" alt="dtl-model-s">
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
    <img src="img/model_s/1.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_s/2.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<div class="row sample">
  <div class="col-lg-6">
    <img src="img/model_s/3.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_s/4.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<div class="row sample">
  <div class="col-lg-6">
    <img src="img/model_s/5.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_s/6.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<div class="row sample">
  <div class="col-lg-6">
    <img src="img/model_s/7.jpg" alt="sample" class="img-fluid">
  </div>
  <div class="col-lg-6">
    <img src="img/model_s/8.jpg" alt="sample" class="img-fluid">
  </div>
</div>
<!-- SampleModel End -->

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