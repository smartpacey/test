<?php
  include("config.php");
  $name = $_POST['s_name'];
  $number = $_POST['s_number'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $email = $_POST['s_email'];
  $address = $_POST['s_add'];
  $education = $_POST['s_edu'];
  $branch = $_POST['s_branch'];
  $pass = $_POST['s_number'];
  $hash_pass = $pass;
  if($name=='') {
    echo "Name should not be empty...";
  }elseif ($number =='') {
    echo "Contact Number should not be empty";
  }else{
    $record = "SELECT * FROM tbl_student
ORDER BY s_id DESC LIMIT 1";
$ent_date = date("y-m-d");
$count="";
if($run = mysqli_query($con,$record)){
while ($row=mysqli_fetch_array($run)) {
  $count =$row['s_roll'];
  
  }
}

  if ($count=='') {
    $count =1;
  }else{
    $count++;
  } 
  $user_id = '00'.$count;
  $insert = "INSERT INTO tbl_student(s_name, s_contact, s_gen, s_email, s_add, s_education, s_branch, s_roll, s_pass, s_dob, s_ent_dt) VALUES('$name', '$number', '$gender', '$email', '$address', '$education', '$branch', '$user_id', '$hash_pass', '$dob','$ent_date')";
  //echo $insert;die;
  if (mysqli_query($con,$insert)) {
      include("send_sms.php");
      $obj=new Sms();
      $message="Dear $name, \n You have apply for Smartpacey career improvement project. Get more information from Smartpacey Career Counsellor from your nearest branch. \n Visit our website : www.smartpacey.com \n Regard by: Smartpacey Institute & Technology Solution Pvt. Ltd.";
      $data=$obj->send_sms($message,$number);
      exit();
  }else{
    echo "1";
  }
  }
?>