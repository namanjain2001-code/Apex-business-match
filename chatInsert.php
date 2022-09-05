<?php
$sender=$_GET['sender'];
$receiver=$_GET['receiver'];
$msg=$_GET['msg'];


$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q = "insert into chat (sender,receiver,msg) values ('$sender','$receiver','$msg')";
$result = mysqli_query($con, $q);
if (!$result) {
  echo mysqli_error($con);
}
?>