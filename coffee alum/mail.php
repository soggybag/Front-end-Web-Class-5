<?php
    //if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
      //Email information
      $admin_email = "someone@example.com";
      $email = $_REQUEST['email'];
      $subject = $_REQUEST['subject'];
      $comment = $_REQUEST['comment'];

      //send email
      mail($admin_email, "$subject", $comment, "From:" . $email);

      //Email response
      echo "Thank you for contacting us!";
  }
?>