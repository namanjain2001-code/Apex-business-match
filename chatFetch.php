<?php
session_start();
$investorEmail = $_SESSION['investorEmail'];
$entEmail = $_GET['entEmail'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q = "select * from chat WHERE (chat.sender='".$investorEmail."' AND  chat.receiver='".$entEmail."') OR (chat.sender='".$entEmail."' AND  chat.receiver='".$investorEmail."')";
$result = mysqli_query($con, $q);
if (!$result) {
  echo mysqli_error($con);
} else 
 { $num = mysqli_num_rows($result);
   $result_arr = array();
   for($i=0;$i<$num;$i++)
   {
    $row = mysqli_fetch_array($result);
    $result_arr[] = array("sender"=>$row['sender'],
                          "receiver" =>$row['receiver'],
                          "msg" => $row['msg']);
   }
   echo(json_encode($result_arr));
 }
?> 