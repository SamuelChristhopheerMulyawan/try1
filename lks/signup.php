<?php
include("connect.php");
$date = date("Y-m-d");
$namadepan = $_POST["fname"];
$namabelakang = $_POST["lname"];
$iden = $_POST["id"];
$pass = $_POST["passwd"];
$tang = $_POST["$date"];
$query = "INSERT INTO `tb_signup`(`fname`, `lname`, `id`, `passwd`, `date`) VALUES ('$namadepan','$namabelakang','$iden','$pass','$tang')" ;
mysqli_query($conn,$query);


?>