<?php
include_once("assets/config.php");
require_once('./assets/classes/Country.php');
require_once('./assets/classes/Course.php');
require_once('./assets/classes/University.php');
$courseObj = new Course();
$courses = $courseObj->getAllCourses();
$countryObj = new Country();
$countries = $countryObj->getAllCountry();
$countriesAbroad = $countryObj->getAllAbroadCountry();
$universityObj = new University();
$universities = $universityObj->getAllUniversities();

$request = $url;
$router = str_replace(BASE_PATH,'',$request);
if($router[0] == '/'){
    $router = substr($router,1);
}
if(strlen($router) > 0 && $router[strlen($router)-1] == '/'){
    $router = substr($router,0,strlen($router)-1);
}
$router = explode('/',$router);
$url_size = sizeof($router);
if($url_size == 1 && $router[0] == ""){
    $metaTitle = $title['home'];
    $metaDescription = $description['home'];
    include_once('home.php');
}
else if($url_size == 1 && $router[0] == "about"){
    $metaTitle = $title['about'];
    $metaDescription = $description['about'];
    include_once('About.php');
}
elseif($url_size == 1 && $router[0] == "gallery"){
    
    $metaTitle = $title['gallery'];
    $metaDescription = $description['gallery'];
    include_once('gallery.php');
}
else if($url_size == 1 && $router[0] == "contact"){
    $metaTitle = $title['contact'];
    $metaDescription = $description['contact'];
    include_once('Contact.php');
}
elseif($url_size == 1){
    $country = $router[0];
    $countryDetails = $countryObj->getCountryByCountryName($country);
    // $metaTitle = "Country";
    $metaDescription = "Counrty";
    include_once('country.php');
}
elseif($url_size == 2){
    $country = $router[0];
    $country = Format::urldecoded($country);
    $course = $router[1];
    $course = Format::urldecoded($course);
    $countryDetails = $countryObj->getCountryByCountryName($country);
    $courseDetails = $courseObj->getCourseDetailsByCourseAndCountry($countryDetails['id'], $course);
    $metaTitle = $courseDetails['title'];
    $metaDescription = $courseDetails['description'];
    include_once('course.php');
}
elseif($url_size == 3){
    $country = $router[0];
    $country = Format::urldecoded($country);
    $country = $countryObj->getCountryByCountryName($country);
    $course = $router[1];
    $course = Format::urldecoded($course);
    $course = $courseObj->getCourseByCourseName($course);
    $college = $router[2];
    $college = Format::urldecoded($college);
    $college = $universityObj->getUniversity($country['id'],$course['id'],$college);
    $metaTitle = $college['title'];
    $metaDescription = $college['description'];
    include_once('university.php');
}
else{
    $metaTitle = "Page Not Found! ERROR 404.";
    $metaDescription = "Page Not Found! ERROR 404.";
    include_once('404.php');
}

// echo $router;
?>