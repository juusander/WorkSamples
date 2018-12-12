<?php
error_reporting(0);
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select userID, UserEmail from users where UserEmail = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['UserEmail'];
   $id = $row['userID'];
   $fname = $row['UserFirstName'];
   $lname = $row['userLastName'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
