<?php

  include("config.php");
  $name = $_POST['name'];
  $number = $_POST['number'];
  $aid = $_POST['aid'];
  $msg = $_POST['msg'];
  if ($name=='' OR $number=='' OR $aid=='' OR $msg=='') {
    echo "0";
  }else{
    $date = date("d-m-y");
    $cid=time();
    $status = 'Pending';
    

  $insert = "INSERT INTO tbl_grievance(name, contact, associate, query, cdate, cid, status) VALUES('$name', '$number', '$aid', '$msg', '$date', '$cid', '$status')";
  //echo $insert;die;
  if (mysqli_query($con,$insert)) {
      include("send_sms.php");
      $obj=new Sms();
      $message="Dear $name, Your complaint has been recived. Smartpacey Team will resolved your complaint within 45 days. your complaint Id is: $cid. click to track your Complaint smartpacey.com/grievance.php \n Regard by: Smartpacey";
      $data=$obj->send_sms($message,$number);
  }else{
    echo "1";
  }
  }
  

?>
