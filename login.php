<?php
session_start();

$lgntype = $_GET['lgntype'];

$email = $_GET['email'];
$pass = $_GET['pass'];


$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'apex-business-match');
$q = "select * from ".$lgntype." where Email='$email' AND Password='$pass'";

$result=mysqli_query($con,$q);
if(!$result)
{
    echo mysqli_error($con);
}
else{
$num = mysqli_num_rows($result);
if($num==0)
{
    echo "0";
    session_destroy();
}
else
{   
    
    if($lgntype=="investorlogin")
    {   
        $_SESSION['investorEmail'] = $email;
        echo ("http://localhost/Apex-business-match/investor-home.php");
    }
    else 
    {
        $_SESSION['entEmail'] = $email;
        echo ("http://localhost/Apex-business-match/entrepreneur-home.php");   
    }
}
}
?>