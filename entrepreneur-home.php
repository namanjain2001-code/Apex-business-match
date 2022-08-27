<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'apex-business-match');
$q = "select * from investorprofile";

$result=mysqli_query($con,$q);
if(!$result)
{
    echo mysqli_error($con);
}
else{
$num = mysqli_num_rows($result);
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.101.0" />
    <title>Apex Business Match</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/cover/"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <link href="bootstrap.min.css" rel="stylesheet" />

    <style>
      body{
        background-image: url(./bg3.jpg) !important;
        
      }
      .truncate-
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
            <a
              class="nav-link fw-bold py-1 px-0 active"
              aria-current="page"
              href="entrepreneur-home.php"
              >Home</a
            >
            <a class="nav-link fw-bold py-1 px-0" href= "entProfile.php">Personal Profile</a>
            <a class="nav-link fw-bold py-1 px-0" href="entBusinessProfile.php">Bussiness Profile</a>
          </nav>
        </div>
      </header>
    </div>




    <div class="container mt-4">
        <h2>INVESTORS</h2>
        <hr>
    </div>

    <!-- INVESTOR CONTAINER -->
    <div class="container ">
      <div class="row">
        <script>
          let l;
          let valuel;
        </script>
        
        <?php 
        for($i=1;$i<=$num;$i++)
        {
          $row=mysqli_fetch_array($result);
          ?>
          <div class="card text-white bg-dark mb-3 mt-5 me-4 column-6" style="max-width: 540px;">
          <div class="row g-0 h-100">
            <div class="col-md-4 mt-auto mb-auto ps-2 pe-2">
              <img src="logo.png.png" class="img-fluid  rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body text-start h-100">
                <h4 class="card-title"><?php echo($row['investorName']); ?></h4>
                <p id="<?php echo($i); ?>" class=" description card-text"><?php echo($row['aboutInvestor']); ?>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis perspiciatis nihil illo sint, distinctio soluta nulla saepe voluptate rem eius error exercitationem quidem possimus cupiditate facilis quaerat ex temporibus ipsa nesciunt vel veniam odio. Nesciunt doloremque ab perferendis repellendus voluptatibus ipsum, fuga aliquam maxime dolore. Assumenda incidunt suscipit cum in!</p>
                <script>
                  
                  l=document.getElementById("<?php echo $i; ?>");
                  valuel=l.innerText;
                  l.innerText=valuel.substring(0,100);
                  
                </script>
                <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span>
                <a href="entrepreneur-home-more.php?investorEmail=<?php echo($row['investorEmail']); ?>" class="stretched-link ">More...</a>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
        
        
        
      </div>
    </div>


















    <script>
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    </script>
    <script>
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    </script>
  </body>
</html>
