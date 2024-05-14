<?php
include_once("assets/header.php");
$country = $router[0];
$country = Format::urldecoded($country);
$country = $countryObj->getCountryByCountryName($country);
$course = $router[1];
$course = Format::urldecoded($course);
$course = $courseObj->getCourseByCourseName($course);
$college = $router[2];
$college = Format::urldecoded($college);

$college = $universityObj->getUniversity($country['id'],$course['id'],$college);
?>

<div class="banner w-100">
    <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/banners/background-country.jpg" alt="First slide">
    <div class="d-flex w-100 banner-text">
        <h1><?php echo $course['name'] ?> in <?php echo $college['name'] ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH."/".Format::urlencoded($country['name'])."/".Format::urlencoded($course['name']);?>"><?php echo $course['name']?> in <?php echo $country['name'] ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $college['name'] ?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row mb-4 mt-4 country-details-container">
        <div class="col-lg-8 col-md-9 col-sm-12 country-info-container p-4">
            <h2 class="country-name"><?php echo $college['name'] ?></h2>
            <div class="country-text w-100">
                <?php
                // $university['content'] = str_replace("SITE_PATH", SITE_PATH, $university['content']);
                // echo $university['content'];
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
                        <h5 class="mb-3"><?php echo $college['name']?> Abroad</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        $countries = $countryObj->getAllCountry();
                        while ($country = mysqli_fetch_assoc($countries)) {
                        ?>
                            <li class="list-group-item">
                                <a href="<?php echo SITE_PATH . "/".Format::urlencoded($country['name'])."/".Format::urlencoded($course['name']);?>" class="nav-link">
                                <?php echo $course['name'];?> in <?php echo $country['name'] ?>
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