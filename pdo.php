<?php 
// require 'vendor/autoload.php';

// use QL\QueryList;

// $dbh = new PDO('mysql:host=127.0.0.1;dbname=user', 'root', 'root');

$tuCurl = curl_init(); 
$url = "https://www.17k.com/";

curl_setopt($tuCurl, CURLOPT_URL,$url); 
curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, true); 
curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, true); 


$tuData = curl_exec($tuCurl);


$res = '#<img src="(.*)" alt=".*">#isU';

preg_match_all($res, $tuData, $arr);

print_r($arr);




 ?>