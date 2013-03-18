<?php
ob_start();
session_start();
include_once('../config/connect.php');
$email = $_SESSION['email'];
//echo $employeeId;
$sql = "SELECT id FROM users WHERE email = '$email'";
$result = mysql_query($sql,$link);
list($email) = mysql_fetch_array($result);
//echo $sql."<br>";
//echo $empId."<br>";
$sql = "INSERT INTO users_costCenters(users_id,users_employeeId,costCenters_id,costCenters_oracleCode) VALUES($empId,$employeeId,$cCenterId,$cCenter)";
mysql_query($sql,$link);
//echo $sql."<br>";
//echo $employeeId."<br>";
//echo $cCenter;
header('location:index.php?message=3');
ob_flush();
?>