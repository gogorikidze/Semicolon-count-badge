<?php
$user = $_GET["user"];
$repo = $_GET["repo"];
$branch = $_GET["branch"];
$path = $_GET["path"];
$url = "https://raw.githubusercontent.com/".$user."/".$repo."/".$branch."/".$path;

$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL, $url);
curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
$xml = curl_exec($curlSession);
curl_close($curlSession);

$number = count(explode(';', $xml));

$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL, "https://img.shields.io/badge/semicolons-".$number."-darkcyan");
curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
$svg = curl_exec($curlSession);
curl_close($curlSession);

header('Content-type: image/svg+xml');
echo $svg;
?>
