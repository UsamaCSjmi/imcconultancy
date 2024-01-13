<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if(!$conn){
    die("Error :". mysqli_connect_error());
}
?>
