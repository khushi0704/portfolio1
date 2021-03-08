<?php 
if(isset($_POST['submit'])){
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $msg = $_Post['msg'];

    $email_from = 'khushi.jain0704@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name : $name.\n".
    "User Email: $visitor_email.\n".
    "User Message: $msg.\n";

    $to = "khushi.jain0704@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To:$visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
}
?>