<?php
include_once("assets/header.php");
?>

<div class="About_container">
  <div class="aboutimg">
    <img src="assets/images/About_image/About-Us.png" class="card-img-top" alt="...">
    <!-- <h1> About-Us </h1> -->
  </div>
  <div class="about_section">
    <div class="section_left">
      <h2>Best <span>MBBS Abroad</span><br>Consultancy</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis tempora laborum, eveniet voluptates
        repellendus libero veniam voluptatum numquam consectetur adipisicing elit. Blanditiis tempora laborum,
        eveniet voluptates repellendus liberob <br>
        <br> veniam voluptatum numquam modi nobis ullam! dipisicing elit. Blanditiis tempora laborum,
      </p>
      <button>Apply Now</button>
    </div>
    <div class="section_right">
      <div class="sectionimg1"><img src="assets/images/About_image/about-section-1.png" class="card-img-top" alt="...">
        <img src="assets/images/About_image/about-section-2.png" class="card-img-top" alt="...">
      </div>
      <!-- <div class="sectionimg"> </div> -->
      <div class="sectionimg2"> <img src="assets/images/About_image/about-section-3.png" class="card-img-top" alt="...">
        <img src="assets/images/About_image/about-section-4.png" class="card-img-top" alt="...">
      </div>
      <!-- <div class="sectionimg"> </div> -->
    </div>
  </div>

  <div class="service_container">
    <div class="image-contaier">
      <img src="assets/images/About_image/About-achievement.png" alt="...">
    </div>
    <div class="list-container">
      <div class="left_list">
        <div class="list-items">
          <img src="assets/images/About_image/icon-student2.webp" alt="...">
          <p> 500+ <br> Students</p>
        </div>
        <div class="list-items">
          <img src="assets/images/About_image/icon-student2.webp" alt="...">
          <p> 500+ <br> Students</p>
        </div>
        <div class="list-items">
          <img src="assets/images/About_image/icon-student2.webp" alt="...">
          <p> 500+ <br> Students</p>
        </div>
      </div>
      <div class="right_list">
      <div class="list-items">
          <img src="assets/images/About_image/icon-student2.webp" alt="...">
          <p> 500+ <br> Students</p>
        </div>
        <div class="list-items">
          <img src="assets/images/About_image/icon-student2.webp" alt="...">
          <p> 500+ <br> Students</p>
        </div>
        <div class="list-items">
          <img src="assets/images/About_image/icon-student2.webp" alt="...">
          <p> 500+ <br> Students</p>
        </div>
      </div>
    </div>
  </div>

  <div id="visiter_section">
    <div class="vleft">
      <div id="carouselExampleControlsNoTouching" class="carousel slide vlet_img" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/home_img/h4.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/home_img/h5.jpg" alt="">
          </div>
          <div class="carousel-item active">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/home_img/h3.jpg" alt="">
          </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControlsNoTouching"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
          data-bs-slide="next">
          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        </button>
      </div>

    </div>

    <div class="vright">
      <div class="vtext">
        <h2>Visit Most Popular <br> Universites</h2>
        <hr>
        <p>For MBBS Abroad</p>
        <h3>or watch What our <br> past student's Parents has to say</h3>
      </div>
    </div>
  </div>




</div>





<?php
include_once("assets/footer.php");
?>