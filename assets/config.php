<?php

// Development Settings Usama
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/medi'); //edit
define('SITE_PATH','http://localhost/development/medi'); //edit
define('BASE_PATH','/development/medi'); //Edit path after htdocs in xampp

define('DB_NAME', 'imc'); //Edit it
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');


// Development Settings Danish
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/imcconultancy'); //edit
// define('SITE_PATH','http://localhost/imcconultancy'); //edit
// define('BASE_PATH','/imcconultancy'); //Edit path after htdocs in xampp

// define('DB_NAME', 'imc'); //Edit it
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');




// Production Settings
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
// define('SITE_PATH','https://development.imcconsultancy.co.in');
// define('BASE_PATH','');

// define('DB_NAME', 'u455665005_imc');
// define('DB_USER', 'u455665005_imc');
// define('DB_PASSWORD', 'i+VLYH$u1');
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
    "home" => "IMC Consultancy | Home",
    "about" => "IMC Consultancy | About",
    "gallery" => "IMC Consultancy | Gallery",
    "contact" => "IMC Consultancy | Contact Us",
    "mbbs-in-kyrgyzstan" => "MBBS in Kyrgyzstan | IMC Consultancy",
    "mbbs-in-bangladesh" => "MBBS in Bangladesh | IMC Consultancy",
    "mbbs-in-nepal" => "MBBS in Nepal | IMC Consultancy",
    "mbbs-in-russia" => "MBBS in Russia | IMC Consultancy",
    "university-anwar-khan-modern-medical-college" => "ANWAR KHAN MODERN MEDICAL COLLEGE, DHAKA | IMC Consultancy",
    "university-tmss-medical-college" => "TMSS MEDICAL COLLEGE, BOGRA | IMC Consultancy",
    "university-monno-medical-college" => "Monno Medical College | IMC Consultancy",
    "university-shahbuddin-medical-college" => "SHAHBUDDIN MEDICAL COLLEGE, DHAKA | IMC Consultancy",
    "university-prime-medical-college" => "PRIME MEDICAL COLLEGE, RANGPUR | IMC Consultancy",
    "university-monno-medical-college" => "Monno Medical College | IMC Consultancy",
    "university-rangpur-community-based" => "RANGPUR COMMUNITY BASED, RANGPUR | IMC Consultancy",
    "university-sylhet-womens-medical-college-&-hospital" => "SYLHET WOMEN'S MEDICAL COLLEGE & HOSPITAL | IMC Consultancy",
    "university-uttara-womens-medical-college-&-hospital" => "UTTARA WOMEN'S MEDICAL COLLEGE & HOSPITAL | IMC Consultancy",
    "university-ustc-iahs" => "University of Science & Technology Chittagong (IAHS) | IMC Consultancy",
    "university-addin-womens-medical-college-&-hospital-sciences" => "AD-DIN WOMEN'S MEDICAL COLLEGE & HOSPITAL SCIENCES | IMC Consultancy",
    "university-avicenna-international-university" => "AVICENNA INTERNATIONAL UNIVERSITY | IMC Consultancy",
    "university-kyrgyz-national-medical-university" => "KYRGYZ NATIONAL MEDICAL UNIVERSITY | IMC Consultancy",
    "university-adam-university-school-of-medicine" => "ADAM UNIVERSITY SCHOOL OF MEDICINE | IMC Consultancy",
    "university-immanuel-kant-baltic-federal-university" => "IMMANUEL KANT BALTIC FEDERAL UNIVERSITY | IMC Consultancy",
    "university-kemerovo-state-university" => "KEMEROVO STATE UNIVERSITY | IMC Consultancy",
    "university-orenburg-state-medical-university" => "ORENBURG STATE MEDICAL UNIVERSITY | IMC Consultancy",
    "university-northern-state-medical-university" => "NORTHERN STATE MEDICAL UNIVERSITY | IMC Consultancy",
    "university-ingush-state-university" => "INGUSH STATE UNIVERSITY | IMC Consultancy",
    "university-kathmandu-university-school-of-medical-sciences" => "KATHMANDU UNIVERSITY SCHOOL OF MEDICAL SCIENCES | IMC Consultancy",
    "university-kathmandu-medical-college" => "KATHMANDU MEDICAL COLLEGE | IMC Consultancy",
    "university-chitwan-medical-college" => "CHITWAN MEDICAL COLLEGE | IMC Consultancy",
    "university-janaki-medical-college" => "JANAKI MEDICAL COLLEGE | IMC Consultancy",
    "university-manipal-college-of-medical" => "MANIPAL COLLEGE OF MEDICAL | IMC Consultancy",
);
$title = array(
    "home" => "IMC Consultancy | Home",
    "about" => "IMC Consultancy | About",
    "gallery" => "IMC Consultancy | Gallery",
    "contact" => "IMC Consultancy | Contact Us",
    "mbbs-in-kyrgyzstan" => "MBBS in Kyrgyzstan | IMC Consultancy",
    "mbbs-in-bangladesh" => "MBBS in Bangladesh | IMC Consultancy",
    "mbbs-in-nepal" => "MBBS in Nepal | IMC Consultancy",
    "mbbs-in-russia" => "MBBS in Russia | IMC Consultancy",
    "university-anwar-khan-modern-medical-college" => "ANWAR KHAN MODERN MEDICAL COLLEGE, DHAKA | IMC Consultancy",
    "university-tmss-medical-college" => "TMSS MEDICAL COLLEGE, BOGRA | IMC Consultancy",
    "university-monno-medical-college" => "Monno Medical College | IMC Consultancy",
    "university-shahbuddin-medical-college" => "SHAHBUDDIN MEDICAL COLLEGE, DHAKA | IMC Consultancy",
    "university-prime-medical-college" => "PRIME MEDICAL COLLEGE, RANGPUR | IMC Consultancy",
    "university-monno-medical-college" => "Monno Medical College | IMC Consultancy",
    "university-rangpur-community-based" => "RANGPUR COMMUNITY BASED, RANGPUR | IMC Consultancy",
    "university-sylhet-womens-medical-college-&-hospital" => "SYLHET WOMEN'S MEDICAL COLLEGE & HOSPITAL | IMC Consultancy",
    "university-uttara-womens-medical-college-&-hospital" => "UTTARA WOMEN'S MEDICAL COLLEGE & HOSPITAL | IMC Consultancy",
    "university-ustc-iahs" => "University of Science & Technology Chittagong (IAHS) | IMC Consultancy",
    "university-addin-womens-medical-college-&-hospital-sciences" => "AD-DIN WOMEN'S MEDICAL COLLEGE & HOSPITAL SCIENCES | IMC Consultancy",
    "university-avicenna-international-university" => "AVICENNA INTERNATIONAL UNIVERSITY | IMC Consultancy",
    "university-kyrgyz-national-medical-university" => "KYRGYZ NATIONAL MEDICAL UNIVERSITY | IMC Consultancy",
    "university-adam-university-school-of-medicine" => "ADAM UNIVERSITY SCHOOL OF MEDICINE | IMC Consultancy",
    "university-immanuel-kant-baltic-federal-university" => "IMMANUEL KANT BALTIC FEDERAL UNIVERSITY | IMC Consultancy",
    "university-kemerovo-state-university" => "KEMEROVO STATE UNIVERSITY | IMC Consultancy",
    "university-orenburg-state-medical-university" => "ORENBURG STATE MEDICAL UNIVERSITY | IMC Consultancy",
    "university-northern-state-medical-university" => "NORTHERN STATE MEDICAL UNIVERSITY | IMC Consultancy",
    "university-ingush-state-university" => "INGUSH STATE UNIVERSITY | IMC Consultancy",
    "university-kathmandu-university-school-of-medical-sciences" => "KATHMANDU UNIVERSITY SCHOOL OF MEDICAL SCIENCES | IMC Consultancy",
    "university-kathmandu-medical-college" => "KATHMANDU MEDICAL COLLEGE | IMC Consultancy",
    "university-chitwan-medical-college" => "CHITWAN MEDICAL COLLEGE | IMC Consultancy",
    "university-janaki-medical-college" => "JANAKI MEDICAL COLLEGE | IMC Consultancy",
    "university-manipal-college-of-medical" => "MANIPAL COLLEGE OF MEDICAL | IMC Consultancy",
);
?>