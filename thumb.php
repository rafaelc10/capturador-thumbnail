<?php
session_start();
$url = $_POST['url'];

$pos = strpos($url, 'watch?v=');

if ($pos != false) {
    $api = substr($url, $pos+8, 11);
    $linkapi = "https://i.ytimg.com/vi/$api/maxresdefault.jpg";
    $_SESSION['img'] = "<img src=".$linkapi.">";
} else if(strpos($url, 'youtu.be/') != false) {
    $api = substr($url, $pos+17, 11);
    $linkapi = "https://i.ytimg.com/vi/$api/maxresdefault.jpg";
    $_SESSION['img'] = "<img src=".$linkapi.">";
} else if(strpos($url, 'youtube') == false) {
    $_SESSION['erro'] = '<h2> Erro, por favor insira um link válido.</h2>';
}



header('Location: index.php');