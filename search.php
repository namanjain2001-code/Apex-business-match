<?php
if(!isset($_POST['arre']))
{
    echo("no result found");
}
else{
$arr = $_POST['arre'];
$size = count($arr);
$query ="";
$msg="";
$last = $arr[$size -1];
for($i=0;$i<($size-1);$i++)
{
   $query = $query."entBusinessCategory = '".$arr[$i]."' OR ";
}

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'apex-business-match');
$q = "select * from entmybusiness where ".$query." entBusinessCategory = '$last'";


$result=mysqli_query($con,$q);
if(!$result)
{
    echo mysqli_error($con);
}
else{
$num = mysqli_num_rows($result);
if($num==0)
{
    echo("no result found");
}
else
{   
    for($j=0;$j<$num;$j++)
    {
        $row = mysqli_fetch_array($result);
        $entBusinessOwner=$row['entBusinessOwner'];
        $entBusinessDetail=$row['entBusinessDetail'];
        $entBusinessCategory=$row['entBusinessCategory'];
        $entEmail=$row['entEmail'];
        $msg = $msg ."<div class='card text-white bg-dark mb-3 mt-5 me-4 column-6' style='max-width: 540px'>
          <div class='row g-0'>
            <div class='col-md-4 mt-auto mb-auto ps-2 pe-2'>
              <img src='./logo.png.png ' class='img-fluid rounded-start' alt='...' />
            </div>
            <div class='col-md-8'>
              <div class='card-body text-start'>
                <h4 class='card-title'>".$entBusinessOwner."</h4>
                <p class='card-text'>
                  ".$entBusinessDetail."
                </p>
                <script>
                  l = document.getElementById(".$j.");
                  valuel = l.innerText;
                  l.innerText = valuel.substring(0, 100);
                </script>
                <span class='card-text'><small class='text-muted'><li>".$entBusinessCategory."</li></small></span>
                <a href='investor-home-more.php?entEmail=".$entEmail." class='stretched-link'>More...</a>
              </div>
            </div>
          </div>
        </div>";
    }
    echo($msg);
}
}
}
?>
