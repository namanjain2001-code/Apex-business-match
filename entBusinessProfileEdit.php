<?php
session_start();
$entEmail = $_SESSION['entEmail'];
$entBusinessOwner = $_POST['entBusinessOwner'];
$entBusinessName = $_POST['entBusinessName'];
$entBusinessEmail = $_POST['entBusinessEmail'];
$entBusinessSite = $_POST['entBusinessSite'];
$entBusinessLink = $_POST['entBusinessLink'];
$entBusinessAddress = $_POST['entBusinessAddress'];
$entBusinessDetail = $_POST['entBusinessDetail'];
$entBusinessCategory = $_POST['entBusinessCategory'];

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q="select * from entmybusiness WHERE entmybusiness.entEmail = '$entEmail'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==0)
{
    $q = "insert into entmybusiness (entEmail,entBusinessName,entBusinessOwner,entBusinessEmail,entBusinessSite,entBusinessLink,entBusinessAddress,entBusinessDetail,entBusinessCategory) values ('$entEmail','$entBusinessName','$entBusinessOwner','$entBusinessEmail','$entBusinessSite','$entBusinessLink','$entBusinessAddress','$entBusinessDetail','$entBusinessCategory')";
    $error = mysqli_query($con, $q);
    header('Location: http://localhost/Apex-business-match/entrepreneur-home.php');
    exit;
}
else
{
    $q = "delete from entmybusiness where entEmail = '$entEmail'";
    $error = mysqli_query($con, $q);
    $q = "insert into entmybusiness (entEmail,entBusinessName,entBusinessOwner,entBusinessEmail,entBusinessSite,entBusinessLink,entBusinessAddress,entBusinessDetail,entBusinessCategory) values ('$entEmail','$entBusinessName','$entBusinessOwner','$entBusinessEmail','$entBusinessSite','$entBusinessLink','$entBusinessAddress','$entBusinessDetail','$entBusinessCategory')";
    $error = mysqli_query($con, $q);
    header('Location: http://localhost/Apex-business-match/entrepreneur-home.php');
    exit;
}
 

?>