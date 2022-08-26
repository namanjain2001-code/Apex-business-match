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
    $_SESSION['email'] = $email;
    if($lgntype=="investorlogin")
    {
        echo ("http://localhost/Apex-business-match/investor.html");
        $_SESSION['investorEmail'] = $email;
    }
    else 
    {
        echo ("http://localhost/Apex-business-match/invest.html");
        $_SESSION['entEmail'] = $email;
    }
}
}
?>