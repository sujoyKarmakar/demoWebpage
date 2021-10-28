<?php require('includes/db.php');

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$post_per_page = 10;
$result = ($page - 1) * $post_per_page;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $query = "SELECT * FROM keywords WHERE key_slug='placement'";
  $res = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($res);
  ?>
  <title><?php echo $row['key_title']; ?></title>
  <meta name="keywords" content="<?php echo $row['key_words']; ?>">
  <meta name="description" content="<?php echo $row['key_desc']; ?>">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <?php

  include 'includes/header.php'

  ?>



  <section class="text-gray-600 body-font overflow-hidden">

    <h1 class="text-center mt-10">Latest Jobs</h1>

    <p class="text-center ">Get the latest job updates here and don't miss any opportunity</p>

    <div class="container px-5 py-12 mx-auto ">
      <div class="blogs">

        <?php

        $postquery = "select * from postnew order by id desc limit $result,$post_per_page";

        $runPQ = mysqli_query($db, $postquery);

        while ($post = mysqli_fetch_assoc($runPQ)) {

        ?>





          <div class="itemsnew">
            <div class="img2">
              <img src="https://picsum.photos/200/300" alt="img">
            </div>
            <div class="cont">
              <a style="text-decoration: none;" class="text-dark" href="details.php?id=<?= $post['id'] ?>">
                <h4><?= $post['title'] ?> <br><span class="mt-1 text-gray-500 text-sm">Posted on <?= date('F jS Y', strtotime($post['date'])) ?> </span> </h4>
              </a>
            </div>

          </div>



        <?php
        }
        ?>
      </div>

    </div>
  </section>

  <?php

  $newquery = "SELECT * FROM postnew";

  $runQ = mysqli_query($db, $newquery);

  $totalPost = mysqli_num_rows($runQ);

  $totalpages = ceil($totalPost / $post_per_page);


  ?>

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">


      <?php



      if ($page > 1) {
        $switch = "";
      } else {
        $switch = "disabled";
      }

      ?>
      <li class="page-item  <?= $switch?>">
        <a class="page-link" href="jobs.php?page=<?= $page - 1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
      </li>

      <?php

      for ($pagen = 1; $pagen <= $totalpages; $pagen++) {
      ?>
        <li class="page-item"><a class="page-link" href="jobs.php?page=<?= $pagen ?>"><?= $pagen ?></a></li>

      <?php


      }
      ?>

      <?php
      if ($page < $pagen-1) {
        $unswitch = "";
      } else {
        $unswitch = "disabled";
      }
      ?>


      <li class="page-item <?=$unswitch?>">
        <a class="page-link" href="jobs.php?page=<?= $page + 1 ?>">Next</a>
      </li>
    </ul>
  </nav>








  <?php
  include 'includes/footer.php'
  ?>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>

</html>