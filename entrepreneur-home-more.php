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
                      <button class="btn btn-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3 ">
                <ul class="list-group list-group-flush bg-dark">
                  <li class="list-group-item d-flex justify-content-between align-items-center text-white bg-dark flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary"><?php echo($row['investorSite'])?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap text-white bg-dark">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>LinkedIn</h6>
                    <span class="text-secondary"><?php echo($row['investorLink'])?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap text-white bg-dark">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Mail</h6>
                    <span class="text-secondary"><?php echo($row['investorEmail'])?></span>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
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




            </div>
          </div>

        </div>
    </div>



<script type="text/javascript">

</script>
</body>
</html>