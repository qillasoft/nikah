<?php
//KONVERSI PHP KE PHP 7
require_once "parser-php-version.php";



//Api key diganti lagi karena saldo habis
$my_apikey = "VXSW4FVOF6Z81PPZVAE8";



$conn =new mysqli("localhost","root","","sidoinikahv1");
if(! $conn ) {
  die('Database tidak terhubung ' . mysql_error());
}

?>

