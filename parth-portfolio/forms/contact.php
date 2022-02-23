<?php
if(isset($_POST["SubmitBtn"])){

$to = "parthmi7278@gmail.com";
$subject = "Contact mail";
$from=$_POST["email"];
$msg=$_POST["message"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>