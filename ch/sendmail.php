<?php
   $to="anthony@yetanotherwebdesigner.com";
   $name = $_REQUEST['name'] ;
   $email = $_REQUEST['email'] ;
   $message = $_REQUEST['message'] ;

   mail( $to, "YAWD Contact Form",
   $message, "From: $email" );
   header( "Location: http://www.yetanotherwebdesigner.com/thankyou.php" );

   ?>
