<?php
session_start();
$investorEmail = $_SESSION['investorEmail'];
echo($investorEmail);
$investorName = $_POST['investorName'];
$orgnisationName = $_POST['orgnisationName'];
$investorNewEmail = $_POST['investorEmail'];
$investorSite = $_POST['investorSite'];
$investorLink = $_POST['investorLink'];
$officeAddress = $_POST['officeAddress'];
$pastInv = $_POST['pastInv'];
$aboutInvestor = $_POST['aboutInvestor'];

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q="select * from investorprofile WHERE investorprofile.investorEmail = '$investorEmail'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==0)
{
    $q = "insert into investorprofile (investorName,orgnisationName,investorEmail,investorSite,investorLink,officeAddress,pastInv,aboutInvestor) values ('$investorName','$orgnisationName','$investorNewEmail','$investorSite','$investorLink','$officeAddress','$pastInv','$aboutInvestor')";
    $error = mysqli_query($con, $q);
    echo ("success");
}
else
{
    $q = "delete from investorprofile where investorEmail = '$investorEmail'";
    $error = mysqli_query($con, $q);
    $q = "insert into investorprofile (investorName,orgnisationName,investorEmail,investorSite,investorLink,officeAddress,pastInv,aboutInvestor) values ('$investorName','$orgnisationName','$investorNewEmail','$investorSite','$investorLink','$officeAddress','$pastInv','$aboutInvestor')";
    $error = mysqli_query($con, $q);
    echo ("success");
}
 

?>