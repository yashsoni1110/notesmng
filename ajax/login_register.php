<?php
require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');
require('../admin/inc/phpmailer/src/Exception.php');
require('../admin/inc/phpmailer/src/PHPMailer.php');
require('../admin/inc/phpmailer/src/SMTP.php');
date_default_timezone_set("Asia/Kolkata");

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




function send_mail($email,$token,$type)
{

   // if($type == "email_confirmation"){
   //    $page = 'email_confirm.php';
   //    $subject = 'Account verification link';
   //    $content = 'confirm your email';
   // }
   // else{
      $page = 'index.php';
      $subject = 'Account reset link';
      $content = 'reset your account';




   // }
 
   // // Set SMTP server and port
   // ini_set('SMTP', 'localhost');
   // ini_set('smtp_port', 25);
   // ini_set("sendmail_from", HOTEL_EMAIL); // Assuming HOTEL_EMAIL is defined elsewhere
   // $mail_hotel = HOTEL_EMAIL;

   // // Message content
   // $msg = "Click the link to $content: <br> <a href='" . SITE_URL . "$page?$type&email=$email&token=$token" . "'>CLICK ME</a>";

   // // use wordwrap() if lines are longer than 70 characters
   // $msg = wordwrap($msg, 70);

   // // Set email parameters
   // $to = $mail_hotel;
   // $subject = "Your subject here";
   // $headers = "From: $email \r\n";
   // $headers .= "Content-type: text/html\r\n"; // Specify HTML content type

   // // send email
   // $sendMail = true; // or false based on your condition

   // if ($sendMail) {
   //     // send email
   //     if (mail($to, $subject, $msg, $headers)) {
   //         echo "Email sent successfully";
   //         return 1;
   //     } else {
   //         echo "Failed to send email";
   //         return 0;
   //     }
   // } else {
   //     echo "Email not sent."; // or any other action you want to take if not sending the email
   //     return 0;
   // }






   //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer(true);

   try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = HOTEL_EMAIL;                     //SMTP username
      $mail->Password   = HOTEL_EMAIL_PASS;                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set
      //   `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom(HOTEL_EMAIL, HOTEL_NAME);
      $mail->addAddress($email);     //Add a recipient
      //  $mail->addAddress('ellen@example.com');               //Name is optional
      $mail->addReplyTo(HOTEL_EMAIL, HOTEL_NAME);
      //  $mail->addCC('cc@example.com');
      //  $mail->addBCC('bcc@example.com');

      //Attachments
      //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = "Click the likn to $content: <br> <a href ='" . SITE_URL . "$page?$type&email=$email&token=$token" . "' >CLICK ME</a>";
      //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if ($mail->send()) {
         return 1;
      }
   } catch (Exception $e) {
      return 0;
   }
}

if (isset($_POST['register'])) {
   $data = filteration($_POST);

   // mactch pass and comfirm pass field

   if ($data['pass'] != $data['cpass']) {
      echo 'pass_mismatch';
      exit;
   }


   //check user exists or not 

   $u_exist = select(
      "SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1",
      [$data['email'], $data['phonenum']],
      'ss'
   );
   if (mysqli_num_rows($u_exist) != 0) {
      $u_exist_fetch = mysqli_fetch_assoc($u_exist);
      echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phonenum_already';
      exit;
   }


   //upload user image to server
   // $img = uploadUserImage($_FILES['profile']);

   // if ($img == 'inv_img') {
   //    echo 'inv_img';
   //    exit;
   // } else if ($img == 'upd_failed') {
   //    echo 'upd_failed';
   //    exit;
   // }
   // send confirmation link to users email

   $token = bin2hex(random_bytes(16));

   // if (!send_mail($data['email'],$token,'email_confirmation')) {
   //    echo "mail_failed";
   //    exit;
   // }

   $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);
   // $query = "INSERT INTO `user_cred`( `name`, `email`, `phonenum`, `dob`, `password`,`is_verified`) VALUES (?,?,?,?,?,?)";
   // $values = [$data['name'], $data['email'],$data['phonenum'], $data['dob'],1];
   $query = "INSERT INTO `user_cred`( `name`, `email`, `phonenum`, `dob`, `password`, `is_verified`) VALUES (?,?,?,?,?,?)";
   $values = [$data['name'], $data['email'], $data['phonenum'], $data['dob'], $enc_pass, 1];



   if (insert($query, $values, 'sssssi')) {
      echo 1;
   } else {
      echo 'ins_failed';
   }
}

if(isset($_POST['login'])){
   $data = filteration($_POST);
   
   //check user exists or not 

   $u_exist = select(
      "SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1",
      [$data['email_mob'], $data['email_mob']],
      'ss'
   );
   if (mysqli_num_rows($u_exist) == 0) {
      echo 'inv_email_mob';
     
   }
   else{
   $u_fetch = mysqli_fetch_assoc($u_exist);
   if($u_fetch['is_verified']==0){
      echo 'not_verified';

   }
   else if($u_fetch['status']==0){
      echo 'inactive';

   }
   else{
      if(!password_verify($data['pass'], $u_fetch['password'])){
         echo 'invalid_pass';

      }
      else{
         session_start();
         $_SESSION['login'] = true;
         $_SESSION['uId'] = $u_fetch['id'];
         $_SESSION['uName'] = $u_fetch['name'];
         // $_SESSION['uPic'] = $u_fetch['profile'];
         $_SESSION['uPhone'] = $u_fetch['phonenum'];
         echo 1;
         
      }
   }
   }

}

if(isset($_POST['forgot_pass']))
{
   $data = filteration($_POST);
     //check user exists or not 

     $u_exist = select(
      "SELECT * FROM `user_cred` WHERE `email`=? LIMIT 1",
      [$data['email']],
      's'
   );
   if (mysqli_num_rows($u_exist) == 0) {
      echo 'inv_email';
     
   }
   else
   {
      $u_fetch = mysqli_fetch_assoc($u_exist);
   if($u_fetch['is_verified']==0){
      echo 'not_verified';

   }
   else if($u_fetch['status']==0){
      echo 'inactive';

   }
   else{
      // send resert link to email
      $token = bin2hex(random_bytes(16));
      if(!send_mail($data['email'],$token,'account_recovery')){
         echo 'mail_failed_pass_reset';

      }
      else{
         
         $date = date("Y-m-d");
         $query= mysqli_query($con,"UPDATE `user_cred` SET `token`='$token',`t_expire`='$date'WHERE `id`='$u_fetch[id]'");
         if($query){
            echo 1;
         }
         else{
            echo 'upd_failed';
         }
      }
   }

   }

}

if(isset($_POST['recover_user'])){
   $data = filteration($_POST);

   $enc_pass = password_hash($data['pass'],PASSWORD_BCRYPT);

   $query = "UPDATE `user_cred` SET `password`=?,`token`=? ,`t_expire`=? WHERE `email`=? AND `token`=?";

   $valuse = [$enc_pass,null,null,$data['email'],$data['token']];

   if(update($query,$valuse,'sssss'))
   {
      echo 1;
   }
   else{
      echo 'failed';
   }

}
?>