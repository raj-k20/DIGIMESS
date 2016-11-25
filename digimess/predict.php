<?php
  echo'<h1>The Total count for today\'s mess is</h1>';
  $day = date('Y-m-d');
  $db = mysqli_connect('127.0.0.1','root','','digimess');
  $qu1 = "select * from mega where date = \"$day\"";
 $res = mysqli_query($db,$qu1);
 echo '<link rel="stylesheet" href="css/style1.css">';

   while($val = mysqli_fetch_array($res))
   { 
 
     echo "<h3> breakfast = ".$val['breakfast']." </h3> </br>
<h3> lunch = ".$val['lunch']." </h3> </br>
<h3> snacks = ".$val['snacks']." </h3> </br>
<h3> dinner = ".$val['dinner']." </h3> </br>
           ";
  }

?>
