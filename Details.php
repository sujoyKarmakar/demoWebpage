<?php require('includes/db.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jobs|| Latest jobs in IT companies</title>
  <style>
    .title {
      margin-top: 24px;
      width: 100%;
      height: auto;
      background-color: #544f4e;
      color: whitesmoke;
    }

    .title h1 {
      padding: 3%;
    }
  </style>
</head>

<body>
  <?php

  include 'includes/header.php'

  ?>



  <?php

  $post_id = $_GET['id'];
  $postquery = "select * from postnew where id=$post_id";

  $runPQ = mysqli_query($db, $postquery);

  $post = mysqli_fetch_assoc($runPQ);


  ?>


  <div class="title px-16">
    <h1> <?= $post['title'] ?></h1>
  </div>

  <div class="container">
    <p>Date: <?= date('F jS Y', strtotime($post['date'])) ?> </p>
    <h2><?= $post['title'] ?></h2>
    <p>Company:</p>
    <p><?= $post['about_company'] ?>

      <img src="https://picsum.photos/100/50" alt="">
      <br>

      
    </p>
    <p>Company Website:<?= $post['company_link']?></p>
    <p>Position: <?= $post['position']?></p>
    <p>Exprience: <?= $post['Experience']?> </p>
    <p>Salary: <?= $post['Salary']?></p>
    <p>Job location: <?= $post['job_location']?></p>
    <p>Eligibilty Criteria: <?= $post['Eligibility_Criteria']?></p>
    <p>Job Description:  <?= $post['job_Desc']?></p>
    <p>Responsiblity: <?= $post['job_req']?></p>
    <p>How to apply: <?= $post['link']?></p>
    <p>
      <a href="#">apply link</a>
    </p>

  </div>



  <?php
  include 'includes/footer.php'
  ?>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>

</html>