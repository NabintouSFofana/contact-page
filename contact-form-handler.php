<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['messagee'];


//my email
  $email_form = 'bintabintyussuf@gmail.com';

  $email_subject = "New Form Subnission";
  
  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

  $to = "bintabintyussuf@gmail.com";

  $hearders = "From: $email_form \r\n";

  $hearders .= "Reply-to: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$hearders);

  header("Location: index.html");

            
?>