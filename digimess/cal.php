<?php
session_start();
$_SESSION['SUM'];
$sum = 0;
$mess = $_SESSION['mess_name'];
$roll = $_SESSION['roll'];
$db = mysqli_connect('127.0.0.1','root','','digimess'); 
$qu1 = "select * from detail where roll_no = \"$roll\"";
$ret = mysqli_query($db,$qu1);
$vat = mysqli_fetch_array($ret);
$mes = $vat['mess_name'];
$co=0;
if(isset($_POST['break']))
{
  $sum = $sum + $_POST['break'];
  $co = $co + 1000;
  $q1="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(CURDATE(),1,0,0,0) ON DUPLICATE KEY update breakfast=breakfast+1";
  $q5="INSERT INTO scount (roll,mess,code) VALUES('$roll','$mes','$co') ON DUPLICATE KEY update code=$co";
  mysqli_query($db,$q5);
  mysqli_query($db,$q1);
}
if(isset($_POST['lunch']))
{
  $sum = $sum + $_POST['lunch'];
  $co = $co + 200;
  $q2="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(CURDATE(),0,1,0,0) ON DUPLICATE KEY update lunch=lunch+1";
  $q6="INSERT INTO scount (roll,mess,code) VALUES('$roll','$mes','$co') ON DUPLICATE KEY update code=$co";
  mysqli_query($db,$q6);
  mysqli_query($db,$q2);
}

if(isset($_POST['snacks']))
{
  $sum = $sum + $_POST['snacks'];
  $co = $co + 30;
  $q3="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(CURDATE(),0,0,1,0) ON DUPLICATE KEY update snacks=snacks+1";
  $q7="INSERT INTO scount (roll,mess,code) VALUES('$roll','$mes','$co') ON DUPLICATE KEY update code=$co";
  mysqli_query($db,$q7);
  mysqli_query($db,$q3);
}

if(isset($_POST['dinner']))
{
  $sum = $sum + $_POST['dinner'];
  $co = $co + 4;
  $q4="INSERT INTO `".$mes."` (date,breakfast,lunch,snacks,dinner) VALUES(CURDATE(),0,0,0,1) ON DUPLICATE KEY update dinner=dinner+1";
  $q8="INSERT INTO scount (roll,mess,code) VALUES('$roll','$mes','$co') ON DUPLICATE KEY update code=$co";
    mysqli_query($db,$q8);
  mysqli_query($db,$q4);
}

$_SESSION['SUM'] = $sum ;
$q5="update detail set amount=amount-\"$sum\" where roll_no = \"$roll\" ";
mysqli_query($db,$q5);
header("Location: profile.php");
die();
?>
