<?php
include_once("assets/header.php");
?>
<div class="w-100">

  <div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/slider/banner.jpeg" alt="First slide">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsam.</h5>
        </div> -->
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/slider/banner2.jpeg" alt="Second slide">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsam.</h5>
        </div> -->
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
      <h3>20+ Universites</h3>
      <h3>Expert Counsellers</h3>
      <h3>500+ Students</h3>
    </div>
    <div class="right">
      <h1> Get <span> Top level <br>Career</span> Guidence</h1>
    </div>
    <div class="image-container">
      <img class="career_image" src="<?php echo SITE_PATH ?>/assets/images/home_img/Dream-College.png" alt="">
    </div>


  </div>



  <div class="container">
    <h2 class="my-4 text-center">
      <span class="big-heading">
        Here is our Top Universities
      </span>
    </h2>
    <div class="mySwiper row w-100 mb-2">
      <div id="carouselExampleFade2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <?php
          $count = 0;
          while ($university = mysqli_fetch_assoc($universities)) {
            $count++;
            $universityUrl = explode(",", $university['uname'])[0];
            $universityUrl = str_replace(" ", "-", $universityUrl);
            // echo $count;
            if ($count == 1) {
              ?>
              <div class="carousel-item active">
                <div class="w-100 row">
                  <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card m-2">
                      <img src="<?php
                      if(isset($university['uimage']) && $university['uimage']!=""){
                        echo SITE_PATH . "/assets/images/universities/" . $university['uimage'];
                      }
                      else{
                        echo SITE_PATH . "/assets/images/countries/" . $university['cimage'];
                      }
                       ?>"
                        class="card-img-top" alt="<?php echo $university['cname'] ?>" style="height:10rem">
                      <div class="card-body">
                        <h5 class="card-title">
                          <?php echo $university['uname'] ?>
                        </h5>
                        <p class="card-text">
                          MBBS in
                          <?php echo $university['cname'] ?>
                          <br>
                          <span class="text-danger">Fees : 2.5 Lacs/year</span>
                        </p>
                        <a href="<?php echo SITE_PATH ?>/university-<?php echo strtolower($universityUrl) ?>"
                          class="btn btn-dark">View</a>
                      </div>
                    </div>
                  </div>
                  <?php
            } elseif ($count != 1 && (($count - 1) % 3 == 0)) {
              //open carousel
              ?>
                  <div class="carousel-item">
                    <div class="w-100 row">
                      <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card m-2">
                          <img src="<?php
                      if(isset($university['uimage']) && $university['uimage']!=""){
                        echo SITE_PATH . "/assets/images/universities/" . $university['uimage'];
                      }
                      else{
                        echo SITE_PATH . "/assets/images/countries/" . $university['cimage'];
                      }
                       ?>"
                            class="card-img-top" alt="<?php echo $university['cname'] ?>" style="height:10rem">
                          <div class="card-body">
                            <h5 class="card-title">
                              <?php echo $university['uname'] ?>
                            </h5>
                            <p class="card-text">
                              MBBS in
                              <?php echo $university['cname'] ?>
                              <br>
                              <span class="text-danger">Fees : 2.5 Lacs/year</span>
                            </p>
                            <a href="<?php echo SITE_PATH ?>/university-<?php echo strtolower($universityUrl) ?>"
                              class="btn btn-dark">View</a>
                          </div>
                        </div>
                      </div>
                      <?php
            } elseif ($count % 3 == 0) {
              // close carousel
              ?>
                      <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card m-2">
                          <img src="<?php
                      if(isset($university['uimage']) && $university['uimage']!=""){
                        echo SITE_PATH . "/assets/images/universities/" . $university['uimage'];
                      }
                      else{
                        echo SITE_PATH . "/assets/images/countries/" . $university['cimage'];
                      }
                       ?>"
                            class="card-img-top" alt="<?php echo $university['cname'] ?>" style="height:10rem">
                          <div class="card-body">
                            <h5 class="card-title">
                              <?php echo $university['uname'] ?>
                            </h5>
                            <p class="card-text">
                              MBBS in
                              <?php echo $university['cname'] ?>
                              <br>
                              <span class="text-danger">Fees : 2.5 Lacs/year</span>
                            </p>
                            <a href="<?php echo SITE_PATH ?>/university-<?php echo strtolower($universityUrl) ?>"
                              class="btn btn-dark">View</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
            } else {
              //normal
              ?>
                  <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card m-2">
                      <img src="<?php
                      if(isset($university['uimage']) && $university['uimage']!=""){
                        echo SITE_PATH . "/assets/images/universities/" . $university['uimage'];
                      }
                      else{
                        echo SITE_PATH . "/assets/images/countries/" . $university['cimage'];
                      }
                       ?>"
                        class="card-img-top" alt="<?php echo $university['cname'] ?>" style="height:10rem">
                      <div class="card-body">
                        <h5 class="card-title">
                          <?php echo $university['uname'] ?>
                        </h5>
                        <p class="card-text">
                          MBBS in
                          <?php echo $university['cname'] ?>
                          <br>
                          <span class="text-danger">Fees : 2.5 Lacs/year</span>
                        </p>
                        <a href="<?php echo SITE_PATH ?>/university-<?php echo strtolower($universityUrl) ?>"
                          class="btn btn-dark">View</a>
                      </div>
                    </div>
                  </div>
                  <?php
            }
            ?>
                <?php
          }
          if ($count % 3 != 0) {
            ?>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
  </div>

  <div id="visiter_section">
    <div class="vleft">
      <div id="carouselExampleControlsNoTouching" class="carousel slide vlet_img" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/1.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/2.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/3.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/4.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/5.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/6.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/7.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/8.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/9.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/10.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/11.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/12.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/13.png" alt="">
          </div>
          <div class="carousel-item">
            <img class="vimg" src="<?php echo SITE_PATH ?>/assets/images/visitors/14.png" alt="">
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

  <div class="Country_section">

    <h2>MBBS <br> Abroad </h2>

    <h2>|</h2>
    <button>Country</button>
  </div>



  <div class="country_section_area mb-4">
    <div class="row row-cols-1 row-cols-md-4 g-4 ">
      <?php
      $countries = $countryObj->getAllCountry();
      while ($country = mysqli_fetch_assoc($countries)) {
        ?>
        <div class="col ">
          <a href="<?php echo SITE_PATH . "/mbbs-in-" . strtolower($country['name']) ?>" class="card ">
            <img class="vimg " src="<?php echo SITE_PATH ?>/assets/images/countries_thumbnails/<?php echo str_replace("jpg","png",$country['image']); ?>"
              alt="<?php echo "MBBS in " . $country['name']; ?>">
            <div class="card-body">
              <h5 class="card-title ">MBBS in
                <?php echo $country['name']; ?>
              </h5>

            </div>
          </a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>


  <div class="review_section">
    <div class="review_text">
      <h2>Our Students Review</h2>
      <hr>
      <p> Even slightly believable. If you are going use a passage of Lorem Ipsum need desire to obtain pain of itself,
        because it is pain de sires to obtain pain of itself occur
      </p>

    </div>
    <div class="review_image">
      <img src="<?php echo SITE_PATH ?>/assets/images/home_img/Our-Student-Review.png" alt="">

    </div>
    <div class="review_text2">Best pleasure rationally encounter consequences that are very nice a again is there anyone
      who loves or desires to obtain pain of itself
      <div class="review_text2_name">
        <p class="name">Alex Smith</p>
        <p class="designation">CEO, Xelopex Group</p>
      </div>
    </div>

  </div>

  <div class="review_sec_bottom">
    <div class="review_number">
      <h2>500+ <br></h2>
      <p>Students</p>
    </div>
    <div class="review_number">
      <h2>500+ <br></h2>
      <p>Students</p>
    </div>
    <div class="review_number">
      <h2>500+ <br></h2>
      <p>Students</p>
    </div>
    <div class="review_number">
      <h2>500+ <br></h2>
      <p>Students</p>
    </div>
  </div>

  <div class="container">
    <div class="blog_tittle">
      <h1>Latest Blog Post</h1>
      <span class="blog_line">
        --
        <hr>
      </span>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur <br> repellat dignissimos quas voluptatem
        delectus m .</p>
    </div>
    <div class="card-group">
  <div class="card">
    <img src="<?php echo SITE_PATH ?>/assets/images/home_img/blog-1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo SITE_PATH ?>/assets/images/home_img/card-2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo SITE_PATH ?>/assets/images/home_img/card-3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
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