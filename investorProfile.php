<?php
session_start();
//$investorEmail = $_SESSION['investorEmail'];
$investorEmail = "fuckmedude@gmail.com";
$_SESSION['investorEmail'] = "fuckmedude@gmail.com";
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q = "select * from investorprofile where investorEmail='$investorEmail'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
?>


<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Apex Business Match</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

    

<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <img src="logo.png.png" style="display: inline-block;">
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Features</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
      </nav>
    </div>
  </header>
  
  <div>
    <form class="row g-3" method="post" action="investorProfileEdit.php">
        <div class="col-md-6">
          <label for="investorName" class="form-label">Investor/Orgnisation Name</label>
          <input type="text" class="form-control" id="investorName" name="investorName" value="<?php if($num==0){echo("");}else{echo($row['investorName']);} ?>">


        </div>
        <div class="col-md-6">
            <label for="orgnisationName" class="form-label">Owner Name</label>
            <input type="text" class="form-control" id="orgnisationName" name="orgnisationName" value="<?php if($num==0){echo("");}else{echo($row['orgnisationName']);} ?>">
          </div>
        <div class="col-md-6">
          <label for="investorEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="investorEmail" name="investorEmail" value="<?php if($num==0){echo("");}else{echo($row['investorEmail']);} ?>">
        </div>
        <div class="col-md-6">
          <label for="investorSite" class="form-label">Website</label>
          <input type="text" class="form-control" id="investorSite" name="investorSite"
          value="<?php if($num==0){echo("");}else{echo($row['investorSite']);} ?>">
        </div>
        <div class="col-md-6">
          <label for="investorLink" class="form-label">LinkdIn</label>
          <input type="text" class="form-control" id="investorLink" name="investorLink" value="<?php if($num==0){echo("");}else{echo($row['investorLink']);} ?>">
        </div>
        <div class="col-md-6">
            <label for="officeAddress" class="form-label">Office Address</label>
            <input type="text" class="form-control" id="officeAddress" name="officeAddress" value="<?php if($num==0){echo("");}else{echo($row['officeAddress']);} ?>">
          </div>
        <div class="col-md-12">
            <label for="pastInv" class="form-label">Past Investments</label>
            <textarea type="text" class="form-control" id="pastInv" name="pastInv"></textarea>
            <script>
            document.getElementById("pastInv").value += "<?php if($num==0){echo("");}else{echo($row['pastInv']);} ?>";
            </script>
        </div> 
        <div class="col-12">
          <label for="aboutInvestor" class="form-label">About You</label>
          <textarea type="text" class="form-control" id="aboutInvestor" name="aboutInvestor" ></textarea>
          <script>
            document.getElementById("aboutInvestor").value += "<?php if($num==0){echo("");}else{echo($row['aboutInvestor']);} ?>";
            </script>
        </div>
        <div class="col-md-6">
            <button type="reset" class="btn w-75 btn-primary">Reset</button>
          </div>
        <div class="col-md-6">
          <button type="submit" class="btn w-75 btn-primary">save</button>
        </div>
      </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>