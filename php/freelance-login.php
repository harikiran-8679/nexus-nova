<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query= " select * from freelancer_register where email='$email'";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0)
    {
      header("Location: freelancer-login.php");
    }
    else
    {
      $data = mysqli_fetch_object($result);
      if($data->pass==$pass)
      {
        $_SESSION["email"] = $data->email;
        $_SESSION["fname"] = $data->fname;
        $_SESSION["subscription"] = $data->subscription;
        header("Location: profile.php");
      }
      else 
      {
       echo"incorrect password..!";
      }
    }
}