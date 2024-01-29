<?php
include_once("assets/config.php");
$request = $url;
$router = str_replace(BASE_PATH,'',$request);

if($router == '/'){
    include_once('home.php');
}
elseif($router == '/mbbs' || preg_match("/mbbs\/*/i",$router)){
    $arr = explode('/',$router);
    include_once('country.php');
}
elseif($router == '/university' || preg_match("/university\/*/i",$router)){
    $arr = explode('/',$router);
    include_once('university.php');
}
elseif ($router == '/gallery'){
    include_once('gallery.php');
}
else{
    include_once('404.php');
}

// echo $router;
?>