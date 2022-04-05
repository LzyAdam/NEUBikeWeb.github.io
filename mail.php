<?php
if(isset($_POST['name']))
$name=$_POST['name'];
if(isset($_POST['email']))
$email=$_POST['email'];

$content="From: $name";
$recipient="luzhiyuan1997@hotmail.com";
$mailheader"From: $email \r\n";
mail($recipient,$content,$mailheader)or die("error1");
echo"email sent";




?>