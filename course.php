<?php
include_once("assets/header.php");
$country = $router[0];
$country = Format::urldecoded($country);
$course = $router[1];
$course = Format::urldecoded($course);
$countryDetails = $countryObj->getCountryByCountryName($country);
$courseDetails = $courseObj->getCourseDetailsByCourseAndCountry($countryDetails['id'], $course);
?>
<div class="banner w-100">
    <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/banners/background-country.jpg" alt="First slide">
    <div class="d-flex w-100 banner-text">
        <h1><?php echo $courseDetails['name']?> in <?php echo $countryDetails['name'] ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $courseDetails['name']?> in <?php echo $countryDetails['name'] ?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row mb-4 mt-4 country-details-container">
        <div class="col-lg-8 col-md-9 col-sm-12 country-info-container p-4">
            <h2 class="country-name"><?php echo $courseDetails['name'] ?> in <?php echo $countryDetails['name'] ?></h2>
            <div class="country-text w-100">
                <?php
                $courseDetails['content'] = str_replace("SITE_PATH", SITE_PATH, $courseDetails['content']);
                echo $courseDetails['content'];
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
                        <h5 class="mb-3">Universities of <?php echo $courseDetails['name']." in ".$countryDetails['name']; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        $universities = $universityObj->getUniversityByCountryIdAndCourseId($countryDetails['id'],$courseDetails['id']);
                        while ($university = mysqli_fetch_assoc($universities)) {
                            $universityUrl = explode(",", $university['name'])[0];
                            $universityUrl = str_replace(" ", "-", $universityUrl);
                        ?>
                            <li class="list-group-item">
                                <a href="<?php echo SITE_PATH . "/" . Format::urlencoded($country)."/".urlencode(strtolower($course))."/".Format::urlencoded($universityUrl) ?>" class="nav-link">
                                    <?php echo $university['name'] ?>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("assets/footer.php");
?>