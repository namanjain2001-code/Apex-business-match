<?php
session_start();
$entEmail = $_SESSION['entEmail'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q = "select * from entmybusiness where entEmail='$entEmail'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
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
          <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="entrepreneur-home.php">Home</a>
          <a class="nav-link fw-bold py-1 px-0" href="entProfile.php">Personal Profile</a>
          <a class="nav-link fw-bold py-1 px-0 active" href="entBusinessProfile.php">Bussiness Profile</a>
          <a class="nav-link fw-bold py-1 px-0" href="./logout.php">Logout</a>
        </nav>
      </div>
    </header>

    <div>
      <form class="row g-3" method="post" action="entBusinessProfileEdit.php">
        <div class="col-md-6">
          <label for="entBusinessOwner" class="form-label">Enterprenuer Name</label>
          <input type="text" class="form-control" id="entBusinessOwner" name="entBusinessOwner" value="<?php if ($num == 0) {
                                                                                                          echo ("");
                                                                                                        } else {
                                                                                                          echo ($row['entBusinessOwner']);
                                                                                                        } ?>">
        </div>
        <div class="col-md-6">
          <label for="entBusinessName" class="form-label">Business Name</label>
          <input type="text" class="form-control" id="entBusinessName" name="entBusinessName" value="<?php if ($num == 0) {
                                                                                                        echo ("");
                                                                                                      } else {
                                                                                                        echo ($row['entBusinessName']);
                                                                                                      } ?>">
        </div>
        <div class="col-md-6">
          <label for="entBusinessEmail" class="form-label">Business Email</label>

          <input type="email" class="form-control" id="entBusinessEmail" name="entBusinessEmail" value="<?php if ($num == 0) {
                                                                                                          echo ("");
                                                                                                        } else {
                                                                                                          echo ($row['entBusinessEmail']);
                                                                                                        } ?>">
        </div>
        <div class="col-md-6">
          <label for="entBusinessSite" class="form-label">Website/Portfolio</label>
          <input type="text" class="form-control" id="entBusinessSite" name="entBusinessSite" value="<?php if ($num == 0) {
                                                                                                        echo ("");
                                                                                                      } else {
                                                                                                        echo ($row['entBusinessSite']);
                                                                                                      } ?>">
        </div>
        <div class="col-md-6">
          <label for="entBusinessLink" class="form-label">Linkdin</label>
          <input type="text" class="form-control" id="entBusinessLink" name="entBusinessLink" value="<?php if ($num == 0) {
                                                                                                        echo ("");
                                                                                                      } else {
                                                                                                        echo ($row['entBusinessLink']);
                                                                                                      } ?>">
        </div>
        <div class="col-md-6">
          <label for="entBusinessCategory" class="form-label">Category</label>
          <select class="form-select" aria-label="Default select example" id="entBusinessCategory" name="entBusinessCategory">
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "travel") echo ("selected");
                    } ?> value="travel">Travel</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "realState") echo ("selected");
                    } ?> value="realState" >Real State</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "PCS") echo ("selected");
                    } ?> value="PCS">Personal Care & Services</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "miscellaneous") echo ("selected");
                    } ?> value="miscellaneous">Miscellaneous</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "merchants") echo ("selected");
                    } ?> value="merchants">Merchants</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "manufacturing") echo ("selected");
                    } ?> value="manufacturing">Manufacturing</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "wholesale") echo ("selected");
                    } ?> value="wholesale">Wholesale</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "distribution") echo ("selected");
                    } ?> value="distribution">Distribution</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "legal") echo ("selected");
                    } ?> value="legal">Legal</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "collectibles") echo ("selected");
                    } ?> value="collectibles">Collectibles</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "health") echo ("selected");
                    } ?> value="health">Health & Medicines</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "food") echo ("selected");
                    } ?> value="food">Food & Dining</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "entertainment") echo ("selected");
                    } ?> value="entertainment">Entertainment</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "education") echo ("selected");
                    } ?> value="education">Education</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "construction") echo ("selected");
                    } ?> value="construction">Construction</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "computers") echo ("selected");
                    } ?> value="computers">Computers & Electronics</option>
            <option <?php if ($num != 0) {
                      if ($row['entBusinessCategory'] == "it") echo ("selected");
                    } ?> value="it">IT Solutions</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="entBusinessDetail" class="form-label">Startup detail</label>
          <textarea type="text" class="form-control" id="entBusinessDetail" name="entBusinessDetail"></textarea>
          <script>
            document.getElementById("entBusinessDetail").value += "<?php if ($num == 0) {
                                                                      echo ("");
                                                                    } else {
                                                                      echo ($row['entBusinessDetail']);
                                                                    } ?>";
          </script>
        </div>
        <div class="col-12">
          <label for="entBusinessAddress" class="form-label">Residential Address</label>
          <textarea type="text" class="form-control" id="entBusinessAddress" name="entBusinessAddress"></textarea>
          <script>
            document.getElementById("entBusinessAddress").value += "<?php if ($num == 0) {
                                                                      echo ("");
                                                                    } else {
                                                                      echo ($row['entBusinessAddress']);
                                                                    } ?>";
          </script>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Image" class="form-label">Profile Image</label>
            <input class="form-control" type="file" id="formFile" onchange="preview()">
          </div>
          <img id="frame" src="" class="img-fluid" />
        </div>


        <div class="col-md-6">
          <div class="mb-3">
            <label for="Image" class="form-label">Startup India Certificate</label>
            <input class="form-control" type="file" id="formFile" onchange="preview()">
          </div>
          <img id="frame" src="" class="img-fluid" />
        </div>

        <script>
          function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
          }

          function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "";
          }
        </script>
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