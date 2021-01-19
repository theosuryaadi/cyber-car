<!-- My PHP -->
<?php
include('dbconnect.php');
include('html_head.php');
include('navbar.php');
?>

<head>
    <title>Contact</title>
</head>

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
<?php include('footer.php'); ?>
<!-- Footer End -->