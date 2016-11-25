<h1> Please Enter the menu to be changed </h1>

<?php
 echo '<link rel="stylesheet" href="css/style3.css">';
 

?>
<form action = "<?php $_POST_SELF ?>" method = "POST">
  <table border = "1">
  <thead>
  <th>Meal</th><th>Items</th></thead><tbody>
  <tr><td>Breakfast</td><td><input type="text" name ="breakfast"></tr>
  <tr><td>Lunch</td><td><input type="text" name ="lunch"></td></tr>
  <tr><td>Snacks</td><td><input type="text" name ="snacks"></td></tr> 
  <tr><td>Dinner</td><td><input type="text" name ="dinner"></td></tr>
  <tr><td>Select the day</td><td><select name="mday"><option value="Monday">Monday</option><option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option><option value="Sunday">Sunday</option></select></td></tr>
 <tr><td><input type = "submit" class="btn btn-primary btn-block btn-large" value = "confirm"> </td></tr>
  </tbody>
  </table>
  </form>

<?php 

 $ln = mysqli_connect('127.0.0.1','root','');
 mysqli_select_db($ln,'digimess');
 if(isset($_POST['mday']))
 {
   $day = $_POST['mday'];
   mysqli_query($ln,$q1);
  }
 
 if(isset($_POST['breakfast']))
 {
    $q1 = "update menu set breakfast = $breakfast where day = $day";
   mysqli_query($ln,$q1);
  }

if(isset($_POST['lunch']))
 {
    $q2 = "update menu set lunch = $lunch where day = $day";
   mysqli_query($ln,$q2);
  }
if(isset($_POST['snacks']))
 {
    $q3 = "update menu set snacks = $snacks where day = $day";
   mysqli_query($ln,$q3);
  }
if(isset($_POST['dinner']))
 {
    $q4 = "update menu set dinner = $dinner where day = $day";
   mysqli_query($ln,$q4);
  }

?>
