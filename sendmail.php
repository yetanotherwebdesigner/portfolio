<?php

function redir_back($errors) {
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $page = "contact.php";
    
    foreach ( $_POST as $key => $value) {
        $post_items[] = $key . '=' . urlencode($value);
    }
    $post_string = implode ('&', $post_items);
    $query = $post_string . '&errors=' . $errors;
    
    header("Location: http://{$host}{$uri}/{$page}?{$query}");
    die();
}

extract($_POST);
$errors = array();

if($message == "") {    
    $errors[] = 'message_empty';    
} elseif(strlen($message) < 2) {
    $errors[] = 'message_two';
}

if($name == "") {    
    $errors[] = 'name_empty';    
} elseif(strlen($name) < 2) {
    $errors[] = 'name_two';
}

if($email == "") {    
    $errors[] = 'email_empty';    
} elseif(!preg_match('/^.+@.+\..+$/', $email)) {
    $errors[] = 'email_invalid';
}

if(!empty($errors)) {
    $err_str = implode('-', $errors);
    redir_back($err_str);
}

   $to="anthony@yetanotherwebdesigner.com";
   $name = $_REQUEST['name'] ;
   $email = $_REQUEST['email'] ;
   $message = $_REQUEST['message'] ;

   mail( $to, "YAWD Contact Form",
   $message, "From: $name, $email" );
   header( "Location: http://www.yetanotherwebdesigner.com/thankyou.php" );

   ?>
