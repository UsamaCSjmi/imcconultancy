<?php
include_once("assets/header.php");
$country = $router[0];
$countryDetails = $countryObj->getCountryByCountryName($country);
?>
<div class="banner w-100">
    <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/banners/background-country.jpg" alt="First slide">
    <div class="d-flex w-100 banner-text">
        <h1>Study in <?php echo $countryDetails['name'] ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Study in <?php echo $countryDetails['name'] ?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <!-- <div class="row mb-4 mt-4">
        <img src="<?php echo SITE_PATH ?>/assets/images/country_courses/<?php echo strtolower($country) ?>.jpg" class="rounded mx-auto d-block" alt="MBBS in <?php echo $country ?>">
    </div> -->
    <div class="row mb-4 mt-4 country-details-container">
        <div class="col-lg-8 col-md-9 col-sm-12 country-info-container p-4">
            <h2 class="country-name">Study in <?php echo $countryDetails['name'] ?></h2>
            <div class="country-text w-100">
                <?php
                $countryDetails['content'] = str_replace("SITE_PATH", SITE_PATH, $countryDetails['content']);
                echo $countryDetails['content'];
                ?>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-12 country-related-container">
            <div class="col-12 country-related">
                <div class="col-12 box-shadow p-4 mb-3">
                    <div class="d-flex justify-content-center align-center mb-3 w-100">
                        <div class="navbar-brand">
                            <img src="<?php echo SITE_PATH; ?>/assets/images/logo.png" width="50" height="50" alt="Logo IMC Consultancy">
                            <span class="brand">IMC Consultancy</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="mb-3">NEED HELP WITH ADMISSION?</h5>
                        <p class="mb-3">Get free counseling session with us.</p>
                    </div>
                    <form>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Name*">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="Email*" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" class="form-control" placeholder="Phone*" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-dark w-100">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 box-shadow p-4">
                    <div class="text-center">
                        <h5 class="mb-3">Courses in <?php echo $countryDetails['name']; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="<?php echo SITE_PATH . "/" .$country;?>/mbbs" class="nav-link">
                                MBBS in <?php echo $country?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo SITE_PATH . "/" .$country;?>/engineering" class="nav-link">
                                Engineering in <?php echo $country?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("assets/footer.php");
?>