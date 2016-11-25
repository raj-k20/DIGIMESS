<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$mob = $_POST['mob'];
$messroll = $_POST['messroll'];
 echo '<link rel="stylesheet" href="css/style1.css">';
$db = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($db,'digimess');
$q1 = "insert into register values('$fname','$lname','$mob','$user','$pass','$messroll')";

if(mysqli_query($db,$q1))
{ 
    echo "<h2>success</h2>"; echo '<a color_name="white" href="home.html">click here </a>';+
      header('refresh:2;url=/digimess/home.html'); 
}
else 
{
 echo "please try again"; echo '<a color_name="white" href="register.html">try again</a>';
      header('refresh:3;url=/digimess/register.html'); 
}

?>
