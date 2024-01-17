<?php


session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] === "POST")
  {
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform_password = $_POST['conform_password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      $user_id = random_num(20);
      $query = "insert into register (user_id, username, email, password, conform_password) values($user_id, $user_name, $email, $password, $conform_password)";

      mysqli_query($con, $query);

     // header("Location: login.php");
      die;
    }
    else
    {
      echo "Please enter valid information";
    }
  }

require "../html/signup.html";
