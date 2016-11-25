<?php 
session_start();
$user = $_SESSION['user'];
$roll = $_SESSION['roll'];
echo '<link rel="stylesheet" href="css/style1.css">';

echo "<h1> Welcome $roll </h1>";
echo '<body>
<table align="center"><tr><td>&nbsp</td></tr>
<tr>
<td>
<form action = "myinfo.php" method = "POST">
<input type = "submit" class="myButton" value = "my info">
</form>
</td>
<td>
<form action = "menu.php" method = "POST">
<input type = "submit" class="myButton" value = "menu">
</form>
</td></tr>
<tr>
<td>
<form action = "nextd.php" method = "POST">
<input type = "submit" class="myButton" value = "bunk tomm">
</form>
</td>
<td>
<form action = "pay.php" method = "POST">
<input type = "submit" class="myButton" value = "wallet">
</form>
</td></tr>
<tr>
<td>
<form action = "messreg.html" method = "POST">
<input type = "submit" class="myButton" value = "mess reg">
</form>
</td>
<td>
<form action = "fee.php" method = "POST">
<input type = "submit" class="myButton" value = "fees">
</form>
</td></tr>
<tr>
<td>
<form action = "logout.php" method = "POST">
<input type = "submit" class="myButton" value = "logout"></td></tr></table>
</form></body>
';

?>

