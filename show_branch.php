<?php
echo $dist = $_POST['dist'];
include('config.php');
$query = mysqli_query($con,"SELECT * FROM tbl_franchaise WHERE fr_dist= '$dist' ");
	
		
	
	while ($row= mysqli_fetch_array($query)) {
		$name = $row['fr_name'];
		$mname = $row['fr_manager_name'];
		$contact = $row['fr_contact'];
        $address = $row['fr_address'];

		echo ' <tr>
                   <td>
                      <div>
                         <table>
                            <tbody >
                               <tr>
                                  <td class="data-head">Branch Name</td>
                                  <td class="data-dot"> :</td>
                                  <td class="data-text">'.$name.'</td>
                               </tr>
                               <tr>
                                  <td class="data-head">Branch Manager</td>
                                  <td class="data-dot"> : </td>
                                  <td class="data-text">'.$mname.'</td>
                               </tr>
                               <tr>
                                  <td class="data-head"> Contact Number</td>
                                  <td class="data-dot"> : </td>
                                  <td class="data-text">'.$contact.'</td>
                               </tr>
                               <tr>
                                  <td class="data-head">Address</td>
                                  <td class="data-dot"> : </td>
                                  <td class="data-text">'.$address.'</td>
                               </tr>
                            </tbody>
                         </table>
                        </div>
                   </td>
                </tr>';
	}

?>