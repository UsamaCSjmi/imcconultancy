<?php
require_once('./assets/head.php');
?>



<div class="header-wrapper">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo SITE_PATH;?>/">
            <img src="<?php echo SITE_PATH;?>/assets/images/logo.png" width="80" height="80" alt="Logo IMC Consultancy">
            <span class="brand"> 
                IMC EDUCATIONAL
                <div class="brand-bottom"> 
                    <span class="logo-lines">
                        <hr>
                        <hr>
                        <hr>
                    </span>
                    <span>
                        Consultancy
                    </span>
                </div>
            </span>
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
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Colleges in India
                    </a>
                    <?php
                    $coursesInIndia = $courseObj->getCoursesInIndia();
                    if($coursesInIndia){
                        ?>
                        
                    <ul class="dropdown-menu">
                        <?php
                        while($singleCourseInIndia = mysqli_fetch_array($coursesInIndia)){
                            $courseUrl = $singleCourseInIndia['name'];
                            $courseUrl = explode(",", $courseUrl)[0];
                            $courseUrl = strtolower(str_replace(" ", "-", $courseUrl));
                            ?>
                            <li>
                                <a href="<?php echo SITE_PATH?>/india/<?php echo $courseUrl;?>" class="nav-link dropdown-item"><?php echo $singleCourseInIndia['name'];?> in India</a>
                                <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                                    <?php
                                        $countryId = 6;
                                        $courseId = $singleCourseInIndia['course_id'];
                                        $universitiesInCountry = $universityObj->getUniversityByCountryIdAndCourseId($countryId,$courseId);
                                        if($universitiesInCountry){
                                            while($singleUniversity = mysqli_fetch_array($universitiesInCountry)){
                                                $universityUrl = explode(",", $singleUniversity['name'])[0];
                                                $universityUrl = str_replace(" ", "-", $universityUrl);
                                                ?>
                                                <li>
                                                    <a href="<?php echo SITE_PATH?>/india/<?php echo $courseUrl;?>/<?php echo strtolower($universityUrl) ?>" class="dropdown-item nav-link <?php if($current_page=="university-".strtolower($universityUrl)){echo "active";}?>"><?php echo $singleUniversity['name']?></a>
                                                </li>
                                                <?php
                                            }
                                            
                                        }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                    }
                    ?>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Study Abroad
                    </a>
                    <ul class="dropdown-menu">
                        <?php while($course = mysqli_fetch_assoc($courses)){?>
                        <li>
                            <a href="#" class="nav-link dropdown-item"><?php echo $course['name']?></a>
                            <?php
                                $id = $course['id'];
                                $countriesWithCourse = $countryObj->getCountriesByCourseId($id);
                                if($countriesWithCourse){
                            ?>
                            <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                                <?php
                                    while($singleCountryWithCourse = mysqli_fetch_array($countriesWithCourse)){
                                        ?>
                                        <li>
                                            <a href="<?php echo SITE_PATH?>/<?php echo urlencode(strtolower($singleCountryWithCourse['name']))?>/<?php echo urlencode(strtolower($course['name']))?>" class="dropdown-item nav-link"><?php echo $course['name']?> in <?php echo $singleCountryWithCourse['name']?></a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                            </ul>
                            <?php
                                }
                            ?>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="gallery"){echo "active";}?>" href="<?php echo SITE_PATH;?>/gallery">Gallery</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="faq"){echo "active";}?>" href="#">FAQ's</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page=="contact"){echo "active";}?>" href="<?php echo SITE_PATH;?>/contact">Contact Us</a>
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