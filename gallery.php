<?php
include_once("assets/header.php");
?>

<div class="banner w-100">
    <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/gallery/gallery-banner.png" alt="First slide">
    <div class="d-flex w-100 banner-text">
        <!-- <h1>Gallery</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav> -->
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-2 col-sm-12">
            <a href="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-1.png" class="gallery-image">
                <div class="gallery-image-wrapper">
                    <img src="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-1.png" class="img-fluid" alt="...">
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-12">
            <a href="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-2.png" class="gallery-image">
                <div class="gallery-image-wrapper">
                    <img src="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-2.png" class="img-fluid" alt="...">
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-12">
            <a href="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-3.png" class="gallery-image">
                <div class="gallery-image-wrapper">
                    <img src="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-3.png" class="img-fluid" alt="...">
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-12">
            <a href="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-4.png" class="gallery-image">
                <div class="gallery-image-wrapper">
                    <img src="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-4.png" class="img-fluid" alt="...">
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-12">
            <a href="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-5.png" class="gallery-image">
                <div class="gallery-image-wrapper">
                    <img src="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-5.png" class="img-fluid" alt="...">
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-12">
            <a href="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-6.png" class="gallery-image">
                <div class="gallery-image-wrapper">
                    <img src="<?php echo SITE_PATH ?>/assets/images/gallery/Gallery-6.png" class="img-fluid" alt="...">
                </div>
            </a>
        </div>
    </div>
</div>

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="<?php echo SITE_PATH;?>/js/magnific-popup/jquery.magnific-popup.js"></script>

<script>
    $(document).ready(function() {
        $('.gallery-image').magnificPopup({
            type:'image',
            gallery:{
                enabled:true
            }
        });
    });
</script>

<?php
include_once("assets/footer.php");
?>