<?php
  echo '<link rel="stylesheet" href="css/style1.css">';
  $roll = $_POST['roll'];
  $db = mysqli_connect('127.0.0.1','root','','digimess');
  $q1 = "delete from register where mess_roll = \"$roll\" ";
  $q2 = "delete from detail where roll_no = \"$roll\" ";
  mysqli_query($db,$q2);
  if(mysqli_query($db,$q1)>1)
 {

  echo '<a href= "admin.php">success</a>'; 
  header('refresh:2;url=/digimess/admin.php'); 
 
 }
  
 else 
 { 

   echo '<a href= "detail.php">try again</a>'; 
  header('refresh:2;url=/digimess/detail.php'); 
 }
  



?>
