<h1> Hi Tomorrows menu is </h1></br>
<h4>Select the meals you want to bunk the meals tomorrow </h4></br>
<?php 
 session_start();
 $user= $_SESSION['user'];
 $day = strftime("%A",time()+86400);
 $ln = mysqli_connect('127.0.0.1','root','');
 mysqli_select_db($ln,'digimess');
 $q1 = "select * from menu m , price p where m.day = p.day AND m.day = \"$day\" ";
 $res = mysqli_query($ln,$q1);
  echo '<link rel="stylesheet" href="css/style3.css">';
 while($val = mysqli_fetch_array($res))
{
  echo "<form action = \"bunk.php\" method = \"POST\">
  <table border = \"1\">
  <thead>
  <th>Meal</th><th>Items</th><th>price</th><th>select</th></thead><tbody>
  <tr><td>Breakfast</td><td>".$val['breakfast']."</td><td>rs.".$val['breakfastp']."</td><td><input type = \"checkbox\" name = \"break\" value = ".$val['breakfastp']."></td></tr>
  <tr><td>Lunch</td><td>".$val['lunch']."</td><td>rs.".$val['lunchp']."</td><td><input type = \"checkbox\" name = \"lunch\" value = ".$val['lunchp']."></td></tr>
  <tr><td>Snacks</td><td>".$val['snacks']."</td><td>rs.".$val['snacksp']."</td><td><input type = \"checkbox\" name = \"snacks\" value = ".$val['snacksp']."></td></tr> 
  <tr><td>Dinner</td><td>".$val['dinner']."</td><td>rs.".$val['dinnerp']."</td><td><input type = \"checkbox\" name = \"dinner\" value = ".$val['dinnerp']."></td></tr>
 <tr><td><input type = \"submit\" class=\"btn btn-primary btn-block btn-large\" value = \"confirm\"> </td></tr>
  </tbody>
  </table>
  </form>
  ";
}

?>
