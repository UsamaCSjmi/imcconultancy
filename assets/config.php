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
    "mbbs-in-india" => "Best MBBS in India",
    "mbbs-in-kyrgyzstan" => "Do you want to achieve your dream for MBBS study in Kyrgyzstan  Learn about the documents and processing fee from our study consultants at IMC.",
    "mbbs-in-bangladesh" => "Best MBBS Educational consultancy for Bangladesh  in India with 100% free consultancy. Join IMC MBBS Education Consultancy taught by subject-matter experts now!",
    "mbbs-in-russia" => "Best MBBS Educational consultancy for Russia in India with 100% free consultancy. Join IMC MBBS Education Consultancy taught by subject-matter experts now!",
    "mbbs-in-nepal" => "Check out the whole procedure to study for MBBS at Nepal that will immensely benefit you to study in the global university of your choice! For FREE counseling contact us!",
    "university-kyrgyz-national-medical-university" => "Kyrgyz National Medical University provides world-class education in MBBS and Medical studies. Visit our campus to know more.",
    "university-adam-university-school-of-medicine" => "Among leading MBBS colleges in Kyrgyzstan, Adam  University School of Medicine Kyrgyzstan has a world-class campus. It is among the top Schools of Medicine in Kyrgyzstan.",
    "university-avicenna-international-university" => "Avicenna International University provides world-class education in MBBS and Medical studies. Visit our campus to know more.",
    "university-anwar-khan-modern-medical-college" => "Among leading MBBS colleges in Dhaka, Anwar Khan Modern Medical College in Dhaka has a world-class campus. It is among the top Schools of Medical in Bangladesh.",
    "university-tmss-medical-college" => "Bangladesh’s only College with neglect and unprivileged people accreditation. TMSS Medical College offers unprivileged, discriminated, neglected, people right to education on Medical studies",
    "university-monno-medical-college" => "Best MBBS Medical College in Golindo, Bangladesh for serving the health needs of Bangladesh by educating health care professionals to the highest international standards.",
    "university-shahbuddin-medical-college" => "Shahbuddin Medical College provides world-class education in MBBS and Medical studies. Visit our campus to know more.",
    "university-prime-medical-college" => "Do you want to achieve your dream for MBBS study in Bangladesh Prime Medical College is one of the best medical institutes in Rangour. Explore now with us.",
    "university-rangpur-community-based" => "Best MBBS Medical College in Rangpur Community, Rangpur Community Medical College (RCMC)  Bangladesh  serving the health needs of Bangladesh in terms of Medical studies.",
    "university-sylhet-womens-medical-college-&-hospital" => "Sylhet Women's Medical College & HOSPITAL is Bangladesh’s most trusted MBBS Educational College. Stay Healthy Community health education is one of our strengths",
    "university-uttara-womens-medical-college-&-hospital" => "Best Womens MBBS Medical College in  Bangladesh Uttara Womens Medical College laid down by Bangladesh Medical and Dental Council (BMDC) for MBBS degree to be conferred by the University of Dhaka.",
    "university-ustc-iahs" => "UNIVERSITY OF SCIENCE AND TECHNOLOGY CHITTAGONG (USTC) is committed to providing quality and excellent computer-based academic programs responsive to the emerging challenges of the time.",
    "university-addin-womens-medical-college-&-hospital-sciences" => "Among leading MBBS colleges in Bangladesh, Addin Womens College & Hospital Sciences has a world-class campus. It is among the top Schools of Medical in Bangladesh.",
    "university-immanuel-kant-baltic-federal-university" => "Immanuel Kant Baltic Federal University provides world-class education in MBBS and Medical studies. Visit our campus to know more.",
    "university-kemerovo-state-university" => "Kemerovo State Medical University has a reputation for academic excellence and is accredited by the Russian Federation's Ministry of Education and Science. Studying at Kemerovo State Medical University is affordable compared to other countries.",
    "university-orenburg-state-medical-university" => "Orenburg State Medical University is one of the top-ranked universities in Russia. More than 700 Indian Students are already studying at Orenburg State Medical University.",
    "university-northern-state-medical-university" => "The Northern State Medical University is a high-quality institution of medical education in Russia. It is situated in the northern part of Russia and it also offers an amalgamation of Russian and European education.",
    "university-ingush-state-university" => "This institution is a public health university. Ingushetia Medical State University first opened its doors in 1994. It’s located in the city of Megas, Russian Federation. One of Russia’s newest public universities can be found right here. ",
    "university-kathmandu-university-school-of-medical-sciences" => "Kathmandu University School of Medical Sciences in Nepal enjoys the best ranking and has built a strong reputation in the field of education. The institution is well-regarded for the quality of education it provides",
    "university-kathmandu-medical-college" => "The Kathmandu Medical College also known as KMCTH is a medical institute that is located in the country capital of Kathmandu. Provides best education in medical sciences.",
    "university-chitwan-medical-college" => "Chitwan Medical College (CMC) is known for its commitment to preparing competent medical professionals and providing quality medical education.",
    "university-janaki-medical-college" => "A medical college called Janaki Medical College and Teaching Hospital (JMCTH) known for its best medical education across Nepal.",
    "university-manipal-college-of-medical" => "Manipal College of Medical Sciences is a private medical college located at Pokhara, in Nepal. It is associated with Manipal Teaching Hospital and enrolls about 100 students each year for the MBBS medical qualification.",
);
$title = array(
    "home" => "IMC- Consultancy | Ranked #1 in India for MBBS Abroad",
    "about" => "About Us |  IMC- Consultancy",
    "gallery" => "IMC Consultancy | Gallery | IMC",
    "contact" => "Contact Us - IMC Consultancy",
    "mbbs-in-india" => "Best MBBS in India",
    "mbbs-in-kyrgyzstan" => "#1 MBBS Educational Consultancy for Kyrgyzstan with Free Counsellig",
    "mbbs-in-bangladesh" => "Best MBBS Education Consultancy for Bnagladesh in India with free counselling | 2024",
    "mbbs-in-russia" => "Best MBBS Education Consultancy for Russia in India with free counselling | 2024",
    "mbbs-in-nepal" => "Steps To Go Nepal for MBBS Study- IMC Consultancy with free counselling.",
    "university-kyrgyz-national-medical-university" => "KYRGYZ NATIONAL MEDICAL UNIVERSITY – Universities | MBBS | Colleges",
    "university-adam-university-school-of-medicine" => "Best MBBS colleges in Kyrgyzstan | ADAM UNIVERSITY SCHOOL OF MEDICINE",
    "university-avicenna-international-university" => "AVICENNA INTERNATIONAL UNIVERSITY – Universities | MBBS | Colleges",
    "university-anwar-khan-modern-medical-college" => "ANWAR KHAN MODERN MEDICAL – COLLEGE | MBBS | DHAKA",
    "university-tmss-medical-college" => "Bangladesh's Top Medical College is now in Bogra | TMSS MEDICAL COLLEGE",
    "university-monno-medical-college" => "Best MBBS Medical College in Golindo, Bangladesh | 2024",
    "university-shahbuddin-medical-college" => "SHAHBUDDIN MEDICAL COLLEGE – Dhaka | MBBS | Colleges",
    "university-prime-medical-college" => "Prime Medical College, Rangpur | Ranked #1 in Bangladesh for MBBS ",
    "university-rangpur-community-based" => "Best MBBS Medical College in Rangpur Community Based, | 2024",
    "university-sylhet-womens-medical-college-&-hospital" => "SYLHET WOMEN'S MEDICAL COLLEGE & HOSPITAL | IMC Consultancy",
    "university-uttara-womens-medical-college-&-hospital" => "Best MBBS in Uttara Women's Medical College| 2024",
    "university-ustc-iahs" => "Bangladesh's Top Medical College is now in Chittagong | USTC IAHS",
    "university-addin-womens-medical-college-&-hospital-sciences" => "Best MBBS colleges in Bangladesh | Addin Womens Medical College",
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