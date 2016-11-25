<?php
  $user = $_POST["user_name"];
  $pass = $_POST["password"];
  $day = date('Y-m-d');
  $db = mysqli_connect('127.0.0.1','root','','digimess');
  
  $q1 = "select * from register where username = \"$user\"";
 $ret = mysqli_query($db,$q1);
$vat = mysqli_fetch_array($ret);
$roll = $vat['mess_roll'];
if($user == $vat['username'] && $pass = $vat['password'])
  {
$qu1 = "select * from scount where roll = \"$roll\"";
 $res = mysqli_query($db,$qu1);

   while($val = mysqli_fetch_array($res))
   { 
 
     echo $val['code'];
  }
}
else {

echo "hii";
 }
?>
