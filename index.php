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

/////////////user define function to filte //////////////////////

function convert($info)
{
   return str_replace("website","www.google.com",$info);
}

$info="go to my website larn php  from website";

echo filter_var($info,FILTER_CALLBACK,array("options"=>"convert"));



// ///////////////exception controle ////////

$a=9;
try{
    if($a<5)
    {
        echo "value in under 10"."<br/>";
    }
    else{
        throw new Exception("value is not under 10");
    }
}
catch(Exception $e)
{
    echo "<br/>". $e->getMessage()."<br/>";
}

finally{
    echo "finally block"."<br/>";
}

?>