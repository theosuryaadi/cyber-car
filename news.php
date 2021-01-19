<!-- My PHP -->
<?php
include('dbconnect.php');
include('html_head.php');
include('navbar.php');
?>

<head>
    <title>News</title>
</head>

<!-- Card -->
<div class="container news">
  <h1 class="mt-4 mb-3">News</h1>
  <div class="row">
  <div class="card mb-3 mr-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="img/news/news1.jpg" class="card-img" style="height: 230px;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Tesla Might Finally Have Some Competition. From Ford.</h5>
          <p class="card-text" style="font-size: medium; color: grey;">Traditional automakers have struggled to sell electric cars. That could change as Ford, Volkswagen and others introduce new models.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 mr-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="img/news/news2.jpg" class="card-img" style="height: 230px;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Tesla Model S, Model X refreshes inbound as EV selldown starts, report says</h5>
          <p class="card-text" style="font-size: medium; color: grey;">Tesla reportedly told employees to sell off every single Model S and Model X by the end of January in preparation for updated versions.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="row">
  <div class="card mb-3 mr-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="img/news/news3.jpg" class="card-img" style="height: 230px;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Tesla Persiapkan Mobil Listrik Rp 300 Jutaan</h5>
          <p class="card-text" style="font-size: medium; color: grey;">Perusahaan otomotif dan penyimpanan energi asal Amerika Serikat, Tesla disebut sedang mempersiapkan mobil listrik murah dengan kisaran harga 25.000 dolas AS atau setara Rp 353 juta.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 mr-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="img/news/news4.jpg" class="card-img" style="height: 230px;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Sisi Lain Apple yang Ngebet Bikin Mobil Listrik Seperti Tesla</h5>
          <p class="card-text" style="font-size: medium; color: grey;">Perusahaan Apple yang tersohor karena pencapaian teknologi ponsel dan perangkat elektronik lain sudah menyimpan ambisi membuat mobil sejak 2014.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="row">
  <div class="card mb-3 mr-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="img/news/news5.jpg" class="card-img" style="height: 230px;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Why Energy Could Have a Tesla-Like 2021</h5>
          <p class="card-text" style="font-size: medium; color: grey;">Energy stocks used to make up more than 10% of the S&P 500. But last year they fell below 3%. Some fund managers abandoned the sector altogether, given that it has underperformed the broader market consistently over the past decade.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 mr-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="img/news/news6.jpg" class="card-img" style="height: 230px;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Resmi Hadir di India, Tesla Pasarkan Model 3</h5>
          <p class="card-text" style="font-size: medium; color: grey;">Produsen kendaraan listrik asal Amerika Serikat, Tesla mengambil langkah pertamanya di India dengan mendirikan kantor di Bengaluru, Karnataka.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  </div>

</div>
<!-- Card End -->

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