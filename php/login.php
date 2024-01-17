<?php
session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] === "POST")
  {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      $query = "select * from register where username = $user_name limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) >0)
        {
          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password && ['username'] === $user_name)
          {
            header("Location: main.php");
            die;
          }
        }
      }
    }
    else
    {
      echo "Please enter valid information";
    }
  }

require "../html/login.html" ?>