<!DOCTYPE html>
<html>

<head>

</head>

<body>



  <center>

    <div class="slideshow-container">
      <div>
        <img src="gambar/qw.png" width="100px" style="margin-left: -1110px; margin-top: -40px; margin-bottom: 20px;">
      </div>


      <div class="mySlides fade">
        <img src="gambar/1.jpg" style="width:70%">
        <div class="text">Parkir Area</div>
      </div>

      <div class="mySlides fade">
        <img src="gambar/2.png" style="width:70%">
        <div class="text">Free Wifi</div>
      </div>

      <div class="mySlides fade">
        <img src="gambar/3.jpg" style="width:70%">
        <div class="text">Kamar Mandi</div>
      </div>

      <div class="mySlides fade">
        <img src="gambar/4.jpg" style="width:70%">
        <div class="text">Cycle Rent</div>
      </div>

      <div class="mySlides fade">
        <img src="gambar/5.jpg" style="width:70%">
        <div class="text">Restaurant</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div>
    <script src="uno.js"></script>

    </div>


    </div>
    <br><br>
    <div id="fas1">
      <h3>Fasiltas</h3><br>
      <p>
        Parking Area, Cleaning service, <br> , Restaurant
      </p>
    </div>

    <div id="fas2">
      <h3>Internet dan Wifi</h3><br>
      <p>
        Koneksi LAN, Koneksi internet gratis
      </p>
    </div>

    <div id="fas3">
      <h3>Kamar</h3><br>
      <p>
        Toilet, <br>Free Wifi, <br>Music, Minuman, <br>dan Lain-Lain.
      </p>
    </div>
  </center>

</body>
<?php
require_once "view/header.php";

?>

</html>