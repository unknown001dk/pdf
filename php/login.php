<?php
session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] === "POST")
  {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      $query = "select * from Register where user_name = $user_name limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) >0)
        {
          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password)
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