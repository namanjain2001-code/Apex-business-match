<?php
session_start();
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'apex-business-match');
$q = "select * from entmybusiness";

$result = mysqli_query($con, $q);
if (!$result) {
  echo mysqli_error($con);
} else {
  $num = mysqli_num_rows($result);
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.101.0" />
  <title>Apex Business Match</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

  <link href="bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background-image: url(./bg3.jpg) !important;
    }

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
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
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
  <link href="index.css" rel="stylesheet" />
</head>

<body class="d-flex h-100 text-center text-bg-dark flex-column">
  <div class="cover-container w-100 p-3 mx-auto">
    <header>
      <div>
        <img src="logo.png.png" style="display: inline-block" />
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
          <a class="nav-link fw-bold py-1 px-0" href="investorProfile.php">Profile</a>
          <a class="nav-link fw-bold py-1 px-0" href="./logout.php">Logout</a>

        </nav>
      </div>
    </header>
  </div>

  <div class="container mt-4">
    <h2>BUSINESSES</h2>
    <hr />
  </div>

  <!-- Categories -->
  <div class="container border d-flex flex-wrap justify-content-evenly">
    <!-- travel -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="travel-check" autocomplete="off" name="categories[]" value="travel " />
      <label class="btn btn-outline-light" for="travel-check">Travel</label><br />
    </span>

    <!-- real state -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="real-state" autocomplete="off" name="categories[]" value="realState" />
      <label class="btn btn-outline-light" for="real-state">
        Real State</label>
      <br />
    </span>

    <!--Personal Care & Services  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Personal-Care" autocomplete="off" name="categories[]" value="PCS" />
      <label class="btn btn-outline-light" for="Personal-Care">
        Personal Care & Services</label>
      <br />
    </span>

    <!-- Miscellaneous -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Miscellaneous" autocomplete="off" name="categories[]" value="miscellaneous" />
      <label class="btn btn-outline-light" for="Miscellaneous">
        Miscellaneous</label>
      <br />
    </span>

    <!-- Merchants -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Merchants" autocomplete="off" name="categories[]" value="merchants" />
      <label class="btn btn-outline-light" for="Merchants">
        Merchants</label>
      <br />
    </span>

    <!-- Manufacturing -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Manufacturing" autocomplete="off" name="categories[]" value="manufacturing" />
      <label class="btn btn-outline-light" for="Manufacturing">
        Manufacturing</label>
      <br />
    </span>

    <!--Wholesale  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Wholesale" autocomplete="off" name="categories[]" value="wholesale" />
      <label class="btn btn-outline-light" for="Wholesale">
        Wholesale</label>
      <br />
    </span>

    <!--Distribution  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Distribution" autocomplete="off" name="categories[]" value="distribution" />
      <label class="btn btn-outline-light" for="Distribution">
        Distribution</label>
      <br />
    </span>


    <!-- Legal  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Legal" autocomplete="off" name="categories[]" value="legal" />
      <label class="btn btn-outline-light" for="Legal">
        Legal</label>
      <br />
    </span>

    <!-- Collectibles  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Collectibles" autocomplete="off" name="categories[]" value="Collectibles" />
      <label class="btn btn-outline-light" for="Collectibles">
        Collectibles</label>
      <br />
    </span>

    <!-- Health & Medicines -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Health" autocomplete="off" name="categories[]" value="health" />
      <label class="btn btn-outline-light" for="Health">
        Health & Medicines</label>
      <br />
    </span>

    <!-- Food & Dining  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Food" autocomplete="off" name="categories[]" value="food" />
      <label class="btn btn-outline-light" for="Food">
        Food & Dining</label>
      <br />
    </span>

    <!-- Entertainment -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Entertainment" autocomplete="off" name="categories[]" value="entertainment" />
      <label class="btn btn-outline-light" for="Entertainment">
        Entertainment</label>
      <br />
    </span>

    <!-- Education  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Education" autocomplete="off" name="categories[]" value="education" />
      <label class="btn btn-outline-light" for="Education">
        Education</label>
      <br />
    </span>

    <!-- Construction  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Construction" autocomplete="off" name="categories[]" value="construction" />
      <label class="btn btn-outline-light" for="Construction">
        Construction</label>
      <br />
    </span>

    <!-- Computers & Electronics  -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="Computers" autocomplete="off" name="categories[]" value="computers" />
      <label class="btn btn-outline-light" for="Computers">
        Computers & Electronics</label>
      <br />
    </span>

    <!-- IT Solutions -->
    <span class="me-2 mt-3">
      <input type="checkbox" class="btn-check btn-sm slct" onchange="search()" id="IT-solutions" autocomplete="off" name="categories[]" value="it" />
      <label class="btn btn-outline-light" for="IT-solutions">
        IT Solutions</label>
      <br />
    </span>
  </div>


  <!-- BUSINESS CONTAINER -->
  <div class="container">
    <div class="row" id="container-inner">
      <script>
        let l;
        let valuel;
      </script>
      <?php
      for ($i = 1; $i <= $num; $i++) {
        $row = mysqli_fetch_array($result);
      ?>
        <div class="card text-white bg-dark mb-3 mt-5 me-4 column-6" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4 mt-auto mb-auto ps-2 pe-2">
              <img src="./logo.png.png " class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body text-start">
                <h4 class="card-title"><?php echo ($row['entBusinessOwner']); ?></h4>
                <p class="card-text">
                  <?php echo ($row['entBusinessDetail']); ?>
                </p>
                <script>
                  l = document.getElementById("<?php echo $i; ?>");
                  valuel = l.innerText;
                  l.innerText = valuel.substring(0, 100);
                </script>
                <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span>
                <a href="investor-home-more.php?entEmail=<?php echo ($row['entEmail']); ?>" class="stretched-link">More...</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>



    </div>
  </div>
  <script>
    function search() {
      var arre = [];
      let a = document.querySelectorAll('input[type=checkbox]:checked');
      a.forEach(function(item) {
        arre.push(item.value)
      });
      
      

      $.ajax({
          type: "POST",
          data: {
            arre: arre
          },
          url: "search.php",
          success: function(msg) {
            console.log(msg)
            document.getElementById('container-inner').innerHTML = msg
          }
        }

      )
     }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>