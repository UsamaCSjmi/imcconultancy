<?php
include_once("assets/config.php");
$request = $url;
$router = str_replace(BASE_PATH,'',$request);

if($router == '/'){
    include_once('home.php');
}
// elseif($router == '/about'){
//     include_once('about.php');
// }
// elseif($router == '/mbbs' || preg_match("/mbbs\/[a-z]/i",$router)){
elseif($router == '/mbbs' || preg_match("/mbbs\/*/i",$router)){
    $arr = explode('/',$router);
    // if(isset($arr[2])){
    //     $table = $arr[2];
    //     $filter = $arr[3];
    // }
    include_once('country.php');
}
elseif($router == '/university' || preg_match("/university\/*/i",$router)){
    $arr = explode('/',$router);
    // if(isset($arr[2])){
    //     $table = $arr[2];
    //     $filter = $arr[3];
    // }
    include_once('university.php');
}
elseif($router=='/About'){
    include_once('About.php');
}
else{
    include_once('404.php');
}

// echo $router;
?>