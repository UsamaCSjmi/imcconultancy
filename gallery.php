<?php
include_once("assets/header.php");
?>

<div class="banner w-100">
    <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/banners/background-country.jpg" alt="First slide">
    <div class="d-flex w-100 banner-text">
        <h1>Gallery</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php echo SITE_PATH ?>/assets/images/countries/bangladesh.jpg" class="img-fluid rounded" alt="...">
        </div>
    </div>
</div>
<?php
include_once("assets/footer.php");
?>