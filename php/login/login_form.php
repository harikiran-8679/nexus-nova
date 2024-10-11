<?php
session_start();
include '../model/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query= " select * from client_register where email='$email'";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0)
    {
      echo"user not found";
    }
    else
    {
      $data = mysqli_fetch_object($result);
      if($data->pass==$pass)
      {
        $_SESSION["email"] = $data->email;
        $_SESSION["fname"] = $data->fname;
        $_SESSION["subscription"] = $data->subscription;
        header("Location: ../profiles/profile.php");
      }
      else 
      {
        echo "<script>
                alert('Incorrect password');
                window.location.href = '../login/client-login.php';
                </script>";
      }
    }
}