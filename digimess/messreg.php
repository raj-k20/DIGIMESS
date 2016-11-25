<?php 
 $mess_name = $_POST['mess'];
 session_start();
 $user=$_SESSION['user'];
 $db = mysqli_connect('127.0.0.1','root','');
 mysqli_select_db($db,'digimess');
 $q1="update mess set count =count+1 where mess_name = \"$mess_name\" ";
 $q2="select count from mess where mess_name = \"$mess_name\"";
 $res = mysqli_query($db,$q2);
 $val = mysqli_fetch_array($res);
 $q3="select mess_roll from register where username = \"$user\"";
 $rep = mysqli_query($db,$q3);
 $vap = mysqli_fetch_array($rep);
 $messr = $vap['mess_roll'];
 $_SESSION['messr']=$messr;
 $q4="select roll_no from detail";
 $req = mysqli_query($db,$q4);
 $q5="insert into detail values('$messr','17600','$mess_name')";
 $k = 0;
 echo '<link rel="stylesheet" href="css/style1.css">';
 while($vaq = mysqli_fetch_array($req))
 {
  if($vap['mess_roll'] == $vaq['roll_no'])
  {
    echo 'this number is already registered try again with another number';
  header('refresh:2;url=/digimess/messreg.html');  
    $k = 1;
    break;
  }
 }
 if($k == 0)
 {
  if($val < 301)
  {
   if(isset($mess_name))
   {
     mysqli_query($db,$q1);
     mysqli_query($db,$q5);
     echo 'Success';
   }
   else
   {
    echo 'select an option';
  header('refresh:2;url=/digimess/messreg.html'); 
   }
  }
  else
  {
    echo 'please select another option as the mess is full';

  }
 }
?>
