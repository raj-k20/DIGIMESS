<?php 


echo '<link rel="stylesheet" href="css/style1.css">';

echo "<h1> Welcome Admin </h1>";
echo "<h4>select an option </h4>";
echo '<body>
<table align="center">
<tr>
<td>
<form action = "predict.php" method = "POST">
<input type = "submit" class="myButton" value = "predict count">
</form>
</td></tr>
<tr>
<td>
<form action = "detail.php" method = "POST">
<input type = "submit" class="myButton" value = "Edit details">
</form>
</td></tr><tr>
<td>
<form action = "edmenu.php" method = "POST">
<input type = "submit" class="myButton" value = "Edit menu">
</form>
</td></tr>
<tr>
<td>
<form action = "logout.php" method = "POST">
<input type = "submit" class="myButton" value = "logout"></form> 
</td></tr>
</table>';
?>
