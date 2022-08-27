<?php
session_start();
$entEmail = $_SESSION['entEmail'];
$entName = $_POST['entName'];
$entBusinessName = $_POST['entBusinessName'];
$entNewEmail = $entEmail;
$entSite = $_POST['entSite'];
$entLink = $_POST['entLink'];
$entAddress = $_POST['entAddress'];
$entEducation = $_POST['entEducation'];
$entAbout = $_POST['entAbout'];

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q="select * from entprofile WHERE entprofile.entEmail = '$entEmail'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==0)
{
    $q = "insert into entprofile (entName,entBusinessName,entEmail,entSite,entLink,entAddress,entEducation,entAbout) values ('$entName','$entBusinessName','$entNewEmail','$entSite','$entLink','$entAddress','$entEducation','$entAbout')";
    $error = mysqli_query($con, $q);
    header("Location: http://localhost/Apex-business-match/entrepreneur-home.php");
    exit;
}
else
{
    $q = "delete from entprofile where entEmail = '$entEmail'";
    $error = mysqli_query($con, $q);
    $q = "insert into entprofile (entName,entBusinessName,entEmail,entSite,entLink,entAddress,entEducation,entAbout) values ('$entName','$entBusinessName','$entNewEmail','$entSite','$entLink','$entAddress','$entEducation','$entAbout')";
    $error = mysqli_query($con, $q);
    header("Location: http://localhost/Apex-business-match/entrepreneur-home.php");
    exit;
}
 

?>