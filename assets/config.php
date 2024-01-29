<?php

// Development Settings Usama
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/medi'); //edit
// define('SITE_PATH','http://localhost/development/medi'); //edit
// define('BASE_PATH','/development/medi'); //Edit path after htdocs in xampp

// define('DB_NAME', 'imc'); //Edit it
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');


// Development Settings Danish
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/imcconultancy'); //edit
// define('SITE_PATH','http://localhost/imcconultancy'); //edit
// define('BASE_PATH','/imcconultancy'); //Edit path after htdocs in xampp

// define('DB_NAME', 'imc'); //Edit it
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');




// Production Settings
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
define('SITE_PATH','https://development.imcconsultancy.co.in');
define('BASE_PATH','');

define('DB_NAME', 'u455665005_imc');
define('DB_USER', 'u455665005_imc');
define('DB_PASSWORD', 'i+VLYH$u1');
define('DB_HOST', 'localhost');

$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);
if($current_page == "imcconultancy" || $current_page == "index" ||$current_page == "" || $current_page == "medi" || $current_page == "imc"){
    $current_page = "home";
}
$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];
// die($current_page);
$description = array(
    "home" => "IMC Consultancy | Home",
    "about" => "IMC Consultancy | About",
    "mbbs-in-kyrgyzstan" => "MBBS in Kyrgyzstan | IMC Consultancy",
    "mbbs-in-bangladesh" => "MBBS in Bangladesh | IMC Consultancy",
    "mbbs-in-nepal" => "MBBS in Nepal | IMC Consultancy",
    "mbbs-in-russia" => "MBBS in Russia | IMC Consultancy"
);
$title = array(
    "home" => "IMC Consultancy | Home",
    "about" => "IMC Consultancy | About",
    "mbbs-in-kyrgyzstan" => "MBBS in Kyrgyzstan | IMC Consultancy",
    "mbbs-in-bangladesh" => "MBBS in Bangladesh | IMC Consultancy",
    "mbbs-in-nepal" => "MBBS in Nepal | IMC Consultancy",
    "mbbs-in-russia" => "MBBS in Russia | IMC Consultancy"
);
?>