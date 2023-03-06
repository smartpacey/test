<?php
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// $con = mysqli_connect("localhost","root","","db_smartpacey_fr");
//  $con = mysqli_connect("148.72.232.181:3306","sunilshinde123","Sunil@2020","db_smartpacey_fr");
 $con = mysqli_connect("localhost","u779769597_sunil","Sunil@123","u779769597_smartpacey");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
   
?>