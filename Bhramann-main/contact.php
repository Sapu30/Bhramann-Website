<?php
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$sub = $_REQUEST['sub'];
$meassge = $_REQUEST['message'];

if(empty($fname) || empty($email) || empty($meassge))
{
   echo "Please fill required fields";
}
else
{
   mail("wsite015@gmail.com", "web support", $message , "From: $fname <$email>");
   echo "<script type='text/javascript'> alert('your message sent successfully');
   window.history.go(-1);
   </script>";
}
?>