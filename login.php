<?php 
// /////////////session sreate////////////
    session_start();
//check is session value already stay if stay then  not execute this page  diract go welcome page   ////////

    if( isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        echo" <script> location.href='welcome.php'</script>";
    }

 //////check if session is not stay then set value  from login form //////////////

    else{
if(isset($_REQUEST['login']))
{
    $name=$_REQUEST['name'];
    $pass=$_REQUEST['password']; 
     if($name !=="" && $pass !=="")
     {
        $name=$_REQUEST['name'];
        $pass=$_REQUEST['password']; 

        $_SESSION['username']=$name;
        $_SESSION['password']=$pass;

       echo" <script> location.href='welcome.php'</script>";   
     }
     else{
        echo "insert your name and password";
         
     }
}
    }

// ////////////using filter check where from come vale ///////////
    if(isset($_REQUEST['login']))
    {
      if(filter_has_var(INPUT_POST,'password')){
        echo "<br/>."."come from post"."<br/>";
      }
      else {
        echo "<br/>"."not form post";
      }
    }

    if(isset($_REQUEST['login']))
    {
      if(filter_has_var(INPUT_GET,'username')){
        echo "<br/>"."come from GET"."<br/>";
      }
      else {
        echo "<br/>"."not form GET";
      }
    }
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-sm-4" style="margin:auto ;padding-top:30px" >
  <form action="" method="POST">
    <div class="form-group">
    <label for="">user name :</label>
    <input type="text" name="name" value="" class="form-control" placeholder="user name">
    </div>
    <div class="form-group">
    <label for="">password:</label>
    <input type="password" name="password" value="" class="form-control" placeholder="password">
    </div>
    <input type="submit" name="login" value="login" class="btn btn-success">
    
    </form>
  </div>
  </div>
  </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>