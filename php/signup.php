<?php


session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] === "POST")
  {
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   // $conformpass = $_POST['conformpassword'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      $user_id = random_num(20);
      $query = "insert into register (user_id, username, email, password, conformpassword) values($user_id, $user_name, $email, $password)";

      mysqli_query($con, $query);

      header("Location: login.php");
      die;
    }
    else
    {
      echo "Please enter valid information";
    }
  }

require "../html/signup.html";
