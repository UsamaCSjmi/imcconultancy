<?php
include_once("assets/header.php");

$words = explode("-",$arr[1]);
unset($words[0]);
$university="";
foreach($words as $word){
    $university= $university." ".$word;
}
$university=trim($university);
$university = $universityObj -> getUniversityByName($university);
?>

<div class="banner w-100">
    <img class="d-block w-100" src="<?php echo SITE_PATH ?>/assets/images/banners/background-country.jpg" alt="First slide">
    <div class="d-flex w-100 banner-text">
        <h1>MBBS in <?php echo $university['name']?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo SITE_PATH ?>/mbbs-in-<?php echo strtolower($university['cname'])?>">MBBS in <?php echo $university['cname']?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $university['name']?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row mb-4 mt-4 country-details-container">
        <div class="col-lg-8 col-md-9 col-sm-12 country-info-container p-4">
            <h2 class="country-name"><?php echo $university['name']?></h2>
            <div class="country-text w-100">
                <p><strong>About Sri Lanka</strong></p>
                <p>Sri Lanka is a picturesque island country in the Indian Ocean southwest of the Sea of Bengal. The capital is Colombo and their official languages are Tamil and Sinhala. Sri Lanka has a mild and tropical climate with consistent temperatures throughout the year, usually ranging from 28 to 31 celsius. The majority of Sri Lankan people (70%) practice Buddhism. Cost of living in Sri Lanka is low which makes it a great option for Indian medical students.</p>
                <p>&nbsp;</p>
                <p><strong>About Medical Education in Sri Lanka</strong></p>
                <p>Sri Lanka is a popular destination for Indian MBBS students due to its high quality and cost effective universities. An MBBS program in Sri Lanka will take 6 years of study to complete and there is no entry exam required.&nbsp;A donation is not required at the time of admission. MBBS degrees from Sri Lankan institutions are recognized by National Medical Council of India and the World Health Organization. Students will have access to training at multiple highly equipped hospitals and will be housed in very comfortable hostel accommodations. Courses are offered in English, however, students may need to spend some time after lessons working on their Tamil or Sinhala language skills to help with day to day life in Sri Lanka.</p>
                <p>&nbsp;</p>
                <p><strong>Benefits of Studying MBBS in Sri Lanka</strong></p>
                <p>Sri Lankan medical universities offer a high quality, hands-on education for a low cost. With no entrance exam and a simple admissions process, starting your MBBS in Sri Lanka is easy. You will receive instruction and training in a broad array of disciplines with plenty of opportunities for clinical practice.&nbsp;</p>
                <p>Medingo Education supports you from start to finish in getting your MBBS abroad. We will help you pick your university, complete your application and documents, get to your university, and continue to support you throughout your studies.</p>
                <p>&nbsp;</p>
                <p><strong>Eligibility Requirements</strong></p>
                <ul>
                <li>MBBS students in Sri Lanka must be at least 17 years of age and no older than 25 years of age.&nbsp;</li>
                <li>Students must have passed 12th standard in physics, chemistry, and biology with at least 60% marks</li>
                <li>A 50% or higher on the NEET-UG exam</li>
                <li>No more than a 2 year gap in studies</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-12 country-related-container">
            <div class="col-12 country-related">
                <div class="col-12 box-shadow p-4 mb-3">
                    <div class="d-flex justify-content-center align-center mb-3 w-100">
                        <div class="navbar-brand">
                            <img src="<?php echo SITE_PATH;?>/assets/images/logo.png" width="50" height="50" alt="Logo IMC Consultancy">
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
                        <h5 class="mb-3">MBBS Abroad</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        $countries = $countryObj -> getAllCountry();
                        while($country = mysqli_fetch_assoc($countries)){
                            ?>
                            <li class="list-group-item">
                                <a href="<?php echo SITE_PATH."/mbbs-in-".strtolower($country['name'])?>" class="nav-link">
                                    MBBS in <?php echo $country['name']?>
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