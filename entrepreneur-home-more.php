<?php
session_start();
$investorEmail=$_GET['investorEmail'];
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'apex-business-match');
$q = "select * from investorprofile WHERE investorprofile.investorEmail = '$investorEmail'";

$result=mysqli_query($con,$q);
if(!$result)
{
    echo mysqli_error($con);
}
else{
$num = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./profile.css">
  <link rel="stylesheet" href="./index.css">
</head>
<body class="bg-secondary">
  <div class="cover-container w-100 p-3 mx-auto">
    <header>
      <div class="d-flex">
        <img src="logo.png.png" class="mr-auto" style="display: inline-block" />
        <nav class="nav nav-masthead d-flex  ms-auto">
          <a
            class="nav-link fw-bold py-1 px-0 active"
            aria-current="page"
            href="#"
            >Home</a
          >
          <a class="nav-link fw-bold py-1 px-0" href="#">Business</a>
          <a class="nav-link fw-bold py-1 px-0" href="#">Investor</a>
          <a class="nav-link fw-bold py-1 px-0" href="#">Account</a>
          <a class="nav-link fw-bold py-1 px-0" href="./logout.php">Logout</a>

        </nav>
      </div>
    </header>
  </div>
<div class="container mt-3 ">
    
    <div class="main-body ">
    
          
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card text-dark bg-dark">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 class="text-white"><?php echo($row['investorName']) ?></h4>
                      <p class=" mb-1 text-secondary"><?php echo($row['orgnisationName']) ?></p>
                      <p class="text-muted font-size-sm"><?php echo($row['officeAddress']) ?></p>
                      <a href="chat.php" class="btn btn-primary">Message</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3 ">
                <ul class="list-group list-group-flush bg-dark">
                  <li class="list-group-item d-flex justify-content-between align-items-center text-white bg-dark flex-wrap">
                    <h6 class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="justify-content-between bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg> LinkedIn</h6>
                    <span class="text-secondary"><?php echo($row['investorSite'])?></span>
                  </li>
                  
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap text-white bg-dark">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>Mail</h6>
                    <span class="text-secondary"><?php echo($row['investorEmail'])?></span>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-3 text-white bg-dark">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo($row['investorName']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo($investorEmail); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Orgnisation/Designation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo($row['orgnisationName']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Office Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo($row['officeAddress']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Past Investment</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo($row['pastInv']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">About Investor</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo($row['aboutInvestor']) ?>
                    </div>
                  </div>
                  
                </div>
              </div>




              <div >
                <div class="card mb-3 text-white bg-dark">
                  <h1 class="align-center text-center ">Business Details</h1>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo($row['investorName']) ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo($investorEmail); ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Website</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo($row['orgnisationName']) ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Category</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo($row['officeAddress']) ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Details</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo($row['pastInv']) ?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo($row['aboutInvestor']) ?>
                      </div>
                    </div>
                    
                  </div>
                </div>
  
  
  
  
              </div>
            </div>
          </div>

        </div>
    </div>



<script type="text/javascript">

</script>
</body>
</html>