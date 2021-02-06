<?php
$servername="localhost";
$dBusername="root";
$dBPassword="";
$dBName="admin";

$conn = mysqli_connect($servername,$dBusername,$dBPassword,$dBName);
if(!$conn){
  die("conection failed: ".mysqli_connect_error());
}
$servername1="localhost";
$dBusername1="root";
$dBPassword1="";
$dBName1="loginsystemtut";

$connuser = mysqli_connect($servername1,$dBusername1,$dBPassword1,$dBName1);
if(!$connuser){
  die("conection failed: ".mysqli_connect_error());
}
 ?>
