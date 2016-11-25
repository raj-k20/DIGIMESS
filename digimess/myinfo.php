<?php 
session_start();
$user = $_SESSION['user'];
echo "<h1> Welcome $user here is your details</h1>";
$db = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($db,'digimess');
$q1 = "select * from register where username = \"$user\" ";
$res = mysqli_query($db,$q1);

echo '<link rel="stylesheet" href="css/style2.css">';

while($val = mysqli_fetch_array($res))
{
  echo "<table >
  <tr><td>First Name : </td><td>".$val['fname']."</td></tr>
  <tr><td>Last Name : </td><td>".$val['lname']."</td></tr>
  <tr><td>Mobile number : </td><td>".$val['mobile']."</td></tr>
  <tr><td>Username : </td><td>".$val['username']."</td></tr> 
  <tr><td>Mess roll no. : </td><td>".$val['mess_roll']."</td></tr>
  <tr><td>Mess : </td><td>".$_SESSION['mess_name']."</td></tr>
  </table>";
}

?>
