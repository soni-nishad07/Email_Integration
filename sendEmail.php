<?php

$to = $_POST['to'];
$subject = $_POST["subject"];
$msg = $_POST["msg"];

if(mail($to, $subject, $msg))
{
   echo "Send msg";
}
else
{
    echo "msg not send";
}
?>