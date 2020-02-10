<?php
if (isset($_POST["button"])) {
  $name=($_POST["name"]);
  $mobile=($_POST["mobile"]);
  $email=($_POST["email"]);
  $option=($_POST["option"]);
  $cpr=($_POST["cpr"]);
  $mssg=($_POST["msg"]);
  $file=($_POST["file"]);

  echo $option;

  echo "<br>";

  if ($email) {
       $email_to = "rajqw4141@gmail.com";
       $msg = $mssg;
      $subject_mail = $option;
      $headers  = 'MIME-Version: 1.0' . "\r\n"
      .'Content-type: text/html; charset=utf-8' . "\r\n"
      .'From: ' .$email. "\r\n";

     $mail_send=mail($email_to,$subject_mail,$msg,$headers,$file,$option);

     if ($mail_send) {

       switch ($option) {
            case '1':
               header('location: index.html');
            break;

           default:
           echo "string";
           break;
       }

     }else {
          echo "fill detail perfetly";
     }


  }



}
?>
