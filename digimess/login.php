<?php
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $f = 0; 
 echo '<link rel="stylesheet" href="css/style1.css">';
  echo '<script type= "text/javascript"> 
  if(window.history)
  {
    window.history.backward(0);
  } </script>';
  if($user == "admin" && $pass = "admin")
  {
    header('Location:admin.php'); 

      $f = 1;
      break;
   
  }
  else
  {
  $db = mysqli_connect('127.0.0.1','root','','digimess');
  $q1 = "select * from register";
  $res = mysqli_query($db,$q1);


  foreach($res as $val)
  {
     if ($val['username'] == $user &&  $val['password'] == $pass)
     { 
     $q2 = "select d.mess_name from detail d, register r where d.roll_no = r.mess_roll ";
      $rep = mysqli_query($db,$q2);
      $vap = mysqli_fetch_array($rep);

  session_start();
   $_SESSION['roll'] = $val['mess_roll'];
  $_SESSION['user'] = $user;
        $_SESSION['mess_name'] = $vap['mess_name'];

      header('Location:profile.php'); 

      $f = 1;
      break;
     } 
  
  }
  if($f == 0)
  { 
    echo "<h3>Incorrect usename or password please</h3>"; echo '<a color_name="white" href = "home.html">try again</a>' ; 
  }
  }
  

?>
