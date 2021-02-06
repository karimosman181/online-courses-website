<?php
$servername="localhost";
$dBusername="root";
$dBPassword="";
$dBName="loginsystemtut";

$conn = mysqli_connect($servername,$dBusername,$dBPassword,$dBName);
if(!$conn){
  die("conection failed: ".mysqli_connect_error());
}
$servername="localhost";
$dBusername="root";
$dBPassword="";
$dBName="admin";

$connadmin = mysqli_connect($servername,$dBusername,$dBPassword,$dBName);
if(!$connadmin){
  die("conection failed: ".mysqli_connect_error());
}

 ?>
