<?php
  include 'config.php';

  $cmpid = $_POST['cmpid'];
  $query = mysqli_query($con,"SELECT *  FROM tbl_grievance WHERE cid='$cmpid'");
  if($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $contact = $row['contact'];
    $associate = $row['associate'];
    $message = $row['query'];
    $cdate = $row['cdate'] ;
    $status = $row['status'] ;
    $cid = $row['cid'];
    $complaint = $row['query'];
    $replay = $row['replay'];
    if($status=='Pending'){
    	$color = 'color:red' ;
    }else{
    	$color = 'color:green';
    }
    	
     echo'	<table class="table table-bordered">
            <tr>
              <th width="30%">Name</th>
              <td>'.$name.'</td>
            </tr>
            <tr>
              <th>Complaint Id</th>
              <td>'.$cid.'</td>
            </tr>
            <tr>
              <th>Complaint Date</th>
              <td>'.$cdate.'</td>
            </tr>
            <tr>
              <th>Complaint</th>
              <td>'.$complaint.'</td>
            </tr>
            <tr>
              <th>Response</th>
              <td>'.$replay.'</td>
            </tr>
            <tr>
              <th>Complaint Status</th>
              <td><p style="'.$color.'">'.$status.'</p></td>
            </tr>
        </table>';
     
   

    
  }else{
  	echo '0';
  }
?>