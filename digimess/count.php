<?php
  $user = $_POST["user_name"];
  $pass = $_POST["password"];
  $day = date('Y-m-d');
  $db = mysqli_connect('127.0.0.1','root','','digimess');
  $qu1 = "select * from mega where date = \"$day\"";
 $res = mysqli_query($db,$qu1);
if($user == "admin" && $pass = "admin")
  {

   while($val = mysqli_fetch_array($res))
   { 
 
     echo "breakfast = ".$val['breakfast']." 
lunch = ".$val['lunch']."  
snacks = ".$val['snacks']." 
dinner = ".$val['dinner']." 
           ";
  }
}
else {

echo "hii";
 }
?>
