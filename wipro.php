<?php
require "includes/db.php";
require "includes/header.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Onlinestudy4u | TCS </title>
  <style>
    .subtitle h1,
    p {
      padding: 10px;
      margin: 10px;
      font-size: 20px;
      color: rgb(94, 87, 87);


    }

    .tables {
      padding-top: 20px;
      display: grid;
      grid-template-columns: 2fr 2fr;

    }

    .properties,
    .values {
      color: blueviolet;
    }
  </style>
</head>

<body>


  <div class="container py-24">
    <div class="title">
      <h1>Wipro Placement Papers 2021</h1>
    </div>

    <div class="subtitle">
      <h1>Wipro Previous Years based Questions with Solutions 2021</h1>
      <p>Here on this page, you will find the Latest Wipro Placement Questions with similar patterns which we have analyzed from Previous Year Wipro placement papers with solutions for 2021 are discussed below.</p>
      <p>As seen from Wipro's previous papers the test is of moderate difficulty. We have tried to put questions of each and every topic covering all the patterns.</p>
    </div>


    <div class="tables">
      <div class="properties">
        <h3>Placement Exam for</h3>
        <p>Number of section</p>
        <p>Type of exam</p>
        <p style="color: black; font-weight: 300;">Mode Conducted</p>



      </div>
      <div class="values">
        <h3>Wipro</h3>
        <p>3</p>
        <p>Adaptive</p>
        <p style="color: black;">Online/Written</p>


      </div>
    </div>

  </div>


  <?php
  include "includes/footer.php"
  ?>

</body>

</html>