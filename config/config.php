<?php
date_default_timezone_set('asia/jakarta');
session_start();

$con = mysqli_connect('localhost','root','','rumahsakit');
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

function base_url($url = null) {
    $base_url = "http://localhost/rumah_sakitv2";
    if($url != null) {
        return $base_url."/".$url;
    } else{
        return $base_url;
    }
}
?>