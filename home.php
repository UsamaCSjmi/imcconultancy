<?php
include_once("assets/header.php");
?>
<div class="w-100">

  <div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/slider/Slider-01.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsam.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/slider/Slider-02.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsam.</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="career_Guidance">
    <div class="left">
      <h3>--hello web</h3>
      <h3>--hello web</h3>
      <h3>--hello web</h3>
    </div>
    <div class="right">
      <h1> Get <span> Top level <br>Career</span> Guidence</h1>
    </div>
    <div class="image-container">
      <img class="career_image" src="<?php echo SITE_PATH ?>/home_img/h1.jpg" alt="">
    </div>


  </div>



  <div class="container">
    <h2 class="my-4 text-center">
      <span class="big-heading">
        Here is our Top Universities
      </span>
    </h2>
    <div class="mySwiper row w-100 mb-2">
      <?php
      $countries = $countryObj->getAllCountry();
      while ($country = mysqli_fetch_assoc($countries)) { ?>
        <div class="col-lg-3 col-md-6 col-sm-12 ">
          <div class="card m-2">
            <img src="<?php echo SITE_PATH . "/assets/images/countries/" . $country['image'] ?>" class="card-img-top"
              alt="<?php echo $country['name'] ?>" style="height:10rem">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $country['name'] ?>
              </h5>
              <p class="card-text">
                MBBS in
                <?php echo $country['name'] ?>
                <br>
                <span class="text-danger">Fees : 2.5 Lacs/year</span>
              </p>
              <a href="<?php echo SITE_PATH ?>/mbbs-in-<?php echo strtolower($country['name']) ?>"
                class="btn btn-dark">View</a>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>

  <div id="visiter_section">
    <div class="vleft">
      <div id="carouselExampleControlsNoTouching" class="carousel slide vlet_img" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/home_img/h4.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/home_img/h5.jpg" alt="">
          </div>
          <div class="carousel-item active">
            <img class="vimg" src="<?php echo SITE_PATH ?>/home_img/h3.jpg" alt="">
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



  <div id="testimonial-container">
    <div class="container">
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial">
              <img src="https://via.placeholder.com/60" alt="User Avatar">
              <div class="testimonial-content">
                <p class="testimonial-name">John Doe</p>
                <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="testimonial">
              <img src="https://via.placeholder.com/60" alt="User Avatar">
              <div class="testimonial-content">
                <p class="testimonial-name">Jane Smith</p>
                <p class="testimonial-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>

          <!-- Add more items as needed -->

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="testimonial-background tb-2"></div>
    <div class="testimonial-background tb-1"></div>
  </div>

</div>


<?php
include_once("assets/footer.php");
?>