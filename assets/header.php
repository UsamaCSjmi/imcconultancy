<?php
require_once('./assets/head.php');
require_once('./assets/classes/Country.php');
require_once('./assets/classes/University.php');
$countryObj = new Country();
$countries = $countryObj->getAllCountry();
$universityObj = new University();
$universities = $universityObj->getAllUniversities();

?>



<div class="header-wrapper">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo SITE_PATH;?>/">
            <img src="<?php echo SITE_PATH;?>/assets/images/logo.png" width="80" height="80" alt="Logo IMC Consultancy">
            <span class="brand"> IMC Consultancy</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="home"){echo "active";}?>" aria-current="page"  href="<?php echo SITE_PATH;?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="about"){echo "active";}?>" href="<?php echo SITE_PATH;?>/about">About Us</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    MBBS Abroad
                </a>
                <ul class="dropdown-menu">
                    <?php while($country = mysqli_fetch_assoc($countries)){?>
                    <li>
                        <a href="<?php echo SITE_PATH;?>/mbbs-in-<?php echo urlencode(strtolower($country['name']))?>" class="nav-link dropdown-item <?php if($current_page=="mbbs-in-".urlencode(strtolower($country['name']))){echo "active";}?>">MBBS in <?php echo $country['name']?></a>
                        <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                            <?php
                            $id = $country['id'];
                            $universitiesInCountry = $universityObj->getUniversityByCountryId($id);
                            while($singleUniversity = mysqli_fetch_array($universitiesInCountry)){
                                $universityUrl = explode(",", $singleUniversity['name'])[0];
                                $universityUrl = str_replace(" ", "-", $universityUrl);
                                ?>
                                <li>
                                    <a href="<?php echo SITE_PATH?>/university-<?php echo strtolower($universityUrl) ?>" class="dropdown-item nav-link <?php if($current_page=="university-".strtolower($universityUrl)){echo "active";}?>"><?php echo $singleUniversity['name']?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="gallery"){echo "active";}?>" href="<?php echo SITE_PATH;?>/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="faq"){echo "active";}?>" href="#">FAQ's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="contact"){echo "active";}?>" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#applyNow">
                        Apply Now
                    </button>
                </li>
            </ul>
        </div>
      </div>
    </nav>
</div>