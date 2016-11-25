<h1> Please Enter the menu to be changed </h1>

<?php
 echo '<link rel="stylesheet" href="css/style3.css">';
 session_start();
 $user= $_SESSION['user'];
 $day = date('Y-m-d', strtotime('+ 1 day'));;
 echo $day;

 $ln = mysqli_connect('127.0.0.1','root','');
 mysqli_select_db($ln,'digimess');
 $q1 = "select * from menu m , price p where m.day = p.day AND m.day = \"$day\" ";
 $res = mysqli_query($ln,$q1);
 
?>
<form action = "<?php $_POST_SELF ?>" method = "POST">
  <table border = "1">
  <thead>
  <th>Meal</th><th>Items</th><th>price</th><th>select</th></thead><tbody>
  <tr><td>Breakfast</td><td><input type= "text" name ="breakfast"></tr>
  <tr><td>Lunch</td><td><input type= \"text\" name ="lunch"></td></tr>
  <tr><td>Snacks</td><td><input type= \"text\" name ="snacks"></td></tr> 
  <tr><td>Dinner</td><td><input type= \"text\" name ="dinner"></td>></tr>
 <tr><td><input type = "submit" class="btn btn-primary btn-block btn-large" value = "confirm"> </td></tr>
  </tbody>
  </table>
  </form>
<?php 
 $day = strftime("%A",time());
 echo $_POST['breakfast'];
 echo $day;
 if(isset($_POST['breakfast']))
 {
   echo '<h4>hii</h4>';
  }
?>
