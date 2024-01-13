<?php
include_once("assets/header.php");
$country = explode("-",$arr[1]);//Comment
$country = $country[sizeof($country)-1];
// echo $country;
$countryDetails = $countryObj -> getCountryByCountryName($country);
?>
<div class="container">
    <div class="row mb-4 mt-4">
        <img src="<?php echo SITE_PATH?>/assets/images/country_courses/<?php echo strtolower($country)?>.jpg" class="rounded mx-auto d-block" alt="MBBS in <?php echo $country?>">
    </div>
</div>

<?php
include_once("assets/footer.php");
?>