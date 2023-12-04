<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "dineshkumar9361318372";
$dbname = "pdfDB";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
  die("connection failed");
}