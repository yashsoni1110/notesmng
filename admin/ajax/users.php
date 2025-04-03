<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();



if (isset($_POST['get_users'])) {
   $res = selectAll('user_cred');
   $i = 1;



   $data = "";
   while ($row = mysqli_fetch_assoc($res)) {
   
      $data .= "
      <tr>
      <td>$i</td>
      <td>
      $row[name]</td>
      <td>$row[email]</td>
      <td>$row[phonenum]</td>
      <td>$row[address] | $row[pincode]</td>
      <td>$row[dob]</td>
      </tr>
       
        ";
      $i++;
   }
   echo $data;
}

?>