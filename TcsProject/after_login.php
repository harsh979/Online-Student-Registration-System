<?php
session_start();
if($_SESSION['uid'])
{

header('location:index.php');
}
else {
  {
header('location:login.php');
  }
}
 ?>
