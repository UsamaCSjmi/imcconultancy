<?php
include_once("assets/config.php");
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
// print_r($router);
// echo $url_size;
// die();
if($url_size == 1 && $router[0] == ""){
    include_once('home.php');
}
else if($url_size == 1 && $router[0] == "about"){
    include_once('About.php');
}
elseif($url_size == 1 && $router[0] == "gallery"){
    include_once('gallery.php');
}
else if($url_size == 1 && $router[0] == "contact"){
    include_once('Contact.php');
}
elseif($url_size == 1){
    // echo "Country = ".$router[0];
    // die();
    include_once('country.php');
}
elseif($url_size == 2){
    // echo "Country = ".$router[0]."<br>";
    // echo "Course = ".$router[1];
    include_once('course.php');
}
elseif($url_size == 3){
    // echo "Country = ".$router[0]."<br>";
    // echo "Course = ".$router[1]."<br>";
    // echo "College = ".$router[2];
        include_once('university.php');
}
// elseif($router == '/mbbs' || preg_match("/mbbs\/*/i",$router)){
//     $arr = explode('/',$router);
//     include_once('country.php');
// }
// elseif($router == '/engineering-in-india' || preg_match("/engineering-in-\/*/i",$router)){
//     $arr = explode('/',$router);
//     include_once('country-engineering.php');
// }
// elseif($router == '/university' || preg_match("/university-\/*/i",$router)){
//     $arr = explode('/',$router);
//     include_once('university.php');
// }
// elseif($router == '/engineering-college' || preg_match("/engineering-college\/*/i",$router)){
//     $arr = explode('/',$router);
//     include_once('engineering-college.php');
// }
else{
    include_once('404.php');
}

// echo $router;
?>