<?php
session_start();
$day = date('Y-m-d');
$nextd = date('Y-m-d', strtotime('+ 1 day'));
$sum = 0;
$mess = $_SESSION['mess_name'];
$roll = $_SESSION['roll'];
$db = mysqli_connect('127.0.0.1','root','','digimess'); 
$qu1 = "select * from detail where roll_no = \"$roll\"";
$ret = mysqli_query($db,$qu1);
$vat = mysqli_fetch_array($ret);
$mes = $vat['mess_name'];
if(isset($_POST['break']))
{
  $sum = $sum + $_POST['break'];
  $q1="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(DATE_ADD(CURDATE(),INTERVAL 1 DAY),1,0,0,0) ON DUPLICATE KEY update breakfast=breakfast+1";
  mysqli_query($db,$q1);
}
if(isset($_POST['lunch']))
{
  $sum = $sum + $_POST['lunch'];
  $q2="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(DATE_ADD(CURDATE(),INTERVAL 1 DAY),0,1,0,0) ON DUPLICATE KEY update lunch=lunch+1";
  mysqli_query($db,$q2);
}

if(isset($_POST['snacks']))
{
  $sum = $sum + $_POST['snacks'];
  $q3="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(DATE_ADD(CURDATE(),INTERVAL 1 DAY),0,0,1,0) ON DUPLICATE KEY update snacks=snacks+1";
  mysqli_query($db,$q3);
}

if(isset($_POST['dinner']))
{
  $sum = $sum + $_POST['dinner'];
  $q4="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(DATE_ADD(CURDATE(),INTERVAL 1 DAY),0,0,0,1) ON DUPLICATE KEY update dinner=dinner+1";
  mysqli_query($db,$q4);
}


$q5="update detail set amount=amount-\"$sum\" where roll_no = \"$roll\" ";
mysqli_query($db,$q5);
header("Location: profile.php");
die();
?>
