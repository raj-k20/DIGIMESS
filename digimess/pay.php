<?php 
session_start();
$user = $_SESSION['user'];
echo "<h1> Welcome $user here is your wallet details</h1>";
$db = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($db,'digimess');
$q3="select mess_roll from register where username = \"$user\"";
 $rep = mysqli_query($db,$q3);
 $vap = mysqli_fetch_array($rep);
 $messr = $vap['mess_roll'];
 $_SESSION['messr']=$messr;
$q1="select * from detail where roll_no = \"$messr\"";
 $res = mysqli_query($db,$q1);
 

echo '<link rel="stylesheet" href="css/style2.css">';

while($vas = mysqli_fetch_array($res))
{
  echo "<table >
  <tr><td>Mess roll no. : </td><td>".$vas['roll_no']."</td></tr>
  <tr><td>Balance amount</td><td>rs.".$vas['amount']."</td></tr>
  <tr><td>mess Name : </td><td>".$vas['mess_name']."</td></tr>
  </table>";
}

?>
