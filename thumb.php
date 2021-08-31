<?php
session_start();
$url = $_POST['url'];

if(str_contains($url, 'watch?v=')){
    $api = substr($url, 32, 11);
    $linkapi = "https://i.ytimg.com/vi/$api/maxresdefault.jpg";
} else {
    echo 'invalido';
}

$_SESSION['img'] = "<img src=".$linkapi.">";

header('Location: index.php');