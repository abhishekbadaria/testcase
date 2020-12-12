<?php
// variable iis_set_app_settings
$name = $_REQUEST["name"];
$email = $_REQUEST["Email"];
$message = $_REQUEST["message"];

//check input fields
if (empty($name) || empty($email) || empty($message))
{
  echo("Please fill all the fields");
}
else {
  mail("abhishekbadaria2106@gmail.com") , "Personal Site Message" , $message , "From : $name < $email>");
  echo "<script  type = 'text/javascript'>alert('your message sent successfully!!');
       window.history.go(-1);

  </script>" ;
}
?>
