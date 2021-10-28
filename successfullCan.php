<?php 
require "includes/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->



    <style>
      .navbar{
        background-color: #112E51 !important;
        position: fixed;
      }
    </style>
    <?php 
    $query = "SELECT * FROM keywords WHERE key_slug='index'";
		$res = mysqli_query($db,$query);
		$row = mysqli_fetch_assoc($res);
		?>
		<title><?php echo $row['key_title']; ?></title>
		<meta name="keywords" content="<?php echo $row['key_words']; ?>">
		<meta name="description" content="<?php echo $row['key_desc']; ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark  ">
  
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
            <img src="images/logo final.png" width="70" height="60" class="d-inline-block" alt="">OnlineStudy4u
        </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="jobs.php">JOBS</a>
                  </li>
                  
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          PLACEMENTS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tcs.php">TCS</a></li>
            <li><a class="dropdown-item" href="WIPRO.php">WIPRO</a></li>
            <li><a class="dropdown-item" href="ibm.php">IBM</a></li>
            <li><hr class="dropdown-divider"></li>
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">CONTACT US</a>
                  </li>
                <li class="nav-item">
                  <button class="btn btn-primary"> <a href="https://play.google.com/store/apps/details?id=co.varys.kfqrn&hl=en_IN&gl=US" style="text-decoration: none; color:white" target="_blank">  Get started </a></button>
                </li>
              </ul>
            </div>
  </div>
</nav>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Meet our student </h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">These are our student who cracked multiple offers from dream companies. They all are placed in top MNC </p>
    </div>

    
    
    
    <div class="flex flex-wrap -m-4">
    <?php
    $newquery="select * from candidates order by id desc";

    $req=mysqli_query($db,$newquery);

    while ($candi=mysqli_fetch_assoc($req))
    {

    

    ?>
      <div class="lg:w-1/3 sm:w-1/2 p-4">

      
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="gallery/<?php echo $candi["img"]; ?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"><br><br></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3 text-truncate"><?= $candi['cn'] ?></h1>
            <p class="leading-relaxed"><?= $candi['ey']?></p>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
    </div>
    
    
  </div>
</section>

    

<?php include "includes/footer.php"?>
</body>
</html>

