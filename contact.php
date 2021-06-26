<?php 
echo var_export($_POST);
if(sizeof($_POST) > 0){
    /* $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $msg = $_POST['msg'];

    $email_from = 'khushi.jain0704@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name : $name.\r\n".
    "User Email: $visitor_email.\r\n".
    "User Message: $msg.\r\n";

    $to = "khushi.jain0704@gmail.com";
    $headers = "From: $email_from \r\r\n";
    $headers = "Reply-To:$visitor_email \r\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html"); */
    $file = fopen("data.txt", "a");
    fwrite($file, "Name: {$_POST["name"]}\r\n");
    fwrite($file, "E-mail: {$_POST["email"]}\r\n");
    fwrite($file, "Message: {$_POST["msg"]}\r\n\r\n");
    fclose($file);
}
?>