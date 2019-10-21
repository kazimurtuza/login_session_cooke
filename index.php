<?php 
///////////FILTER VALIDATE AND SANITIZE USER //////////////////////
$email="kazi/////@gmail.())()com";
ECHO $email."<br/>";
$newemail= filter_var($email,FILTER_SANITIZE_EMAIL);
echo $newemail;


$email="soh/()ag@gmail.com";

if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    ECHO "VALIDATED EMAIL";
}
else {
    ECHO "NOT VALIDATED EMAIL";
    
}





?>