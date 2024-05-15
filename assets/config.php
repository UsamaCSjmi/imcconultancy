<?php

// Development Settings Usama
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/medi'); //edit
define('SITE_PATH','http://localhost/development/medi'); //edit
define('BASE_PATH','/development/medi'); //Edit path after htdocs in xampp

define('DB_NAME', 'imc'); //Edit it
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');




// Production Settings
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
// define('SITE_PATH','https://development.imcconsultancy.co.in');
// define('BASE_PATH','');

// define('DB_NAME', 'u455665005_imc');
// define('DB_USER', 'u455665005_imc');
// define('DB_PASSWORD', 'i+VLYH$u1');
// define('DB_HOST', 'localhost');

// Production Settings 2
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
// define('SITE_PATH','https://imcconsultancy.in');
// define('BASE_PATH','');

// define('DB_NAME', 'u455665005_imc2');
// define('DB_USER', 'u455665005_imc2');
// define('DB_PASSWORD', 'y!$OD4!*zdY5');
// define('DB_HOST', 'localhost');

$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);
if($current_page == "imcconultancy" || $current_page == "index" ||$current_page == "" || $current_page == "medi" || $current_page == "imc"){
    $current_page = "home";
}
$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];
// die($current_page);
$description = array(
    "home" => "IMC- Consultancy India's #1 Educational Consultancy offering fulfilling the dream of studying MBBS abroad. Get Future-ready Today!",
    "about" => "IMC is India’s most trusted MBBS educational consultancy which helps learners transform their careers studying abroad and get future-ready!",
    "gallery" => "IMC Consultancy Gallery , Colleges ,students, and Our Alumni",
    "contact" => "IMC Consultancy  is Best MBBS  study abroad consultants in India. We provide overseas education counselling, admission assistance.for Medical Studies.",
);
$title = array(
    "home" => "IMC- Consultancy | Ranked #1 in India for MBBS Abroad",
    "about" => "About Us |  IMC- Consultancy",
    "gallery" => "IMC Consultancy | Gallery | IMC",
    "contact" => "Contact Us - IMC Consultancy",
);
?>