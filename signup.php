<?php

$lgntype = $_GET['lgntype'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'apex-business-match');

if(!$con)
echo "connection failed"; 
else {
    if($lgntype=="investor"){
        $q = "insert into investorlogin (Email,Password) values ('$email','$pass')";
        $error = mysqli_query($con,$q);
        echo("http://localhost/Apex-business-match/login.html");
    }
    else if($lgntype=="ent")
    {
        $q = "insert into entlogin (Email,Password) values ('$email','$pass')";
        $error = mysqli_query($con,$q);
        echo("http://localhost/Apex-business-match/login.html");
}
    }
    

?>


