<?php
//print($_POST['submit']);
//die();

if(isset($_POST['submit'])){
  $email = $_REQUEST['email'];
  $pwd = $_REQUEST['pwd'];

  include "../class/login.class.php";
  include "../class/logincontr.class.php";

  $login = new LoginContr($email, $pwd);
  $login->loginUser();
  
}else{
  header('location: ../index.php?error=unauthorized');
}

?>
