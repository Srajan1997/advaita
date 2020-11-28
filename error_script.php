<?php


$error = $_GET['eid'];
$error_string = "";
function error_handler($error)
{
    if($error == 0 ) $error_string = "Successfully logged in!";
    if($error == 1 ) $error_string = "Account Created Successfully!";
    if($error == 2 )  $error_string = "Sorry! Account with given ID already exists!";
    if($error == 3 )  $error_string = "Sorry! Database connection error!";
    //if($error ==  )  $error_string = "";

    echo "<script>document.getElementById('error_box').innerHTML = ". $error_string ."</script>";
    echo "<script>setTimeout(function(){document.getElementById('error_box').style.display='none'},2000)</script>";
}





?>