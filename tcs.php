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
      <h1>TCS Placement Papers 2022</h1>
    </div>

    <div class="subtitle">
      <h1>TCS Previous Papers with Solutions for Recruitment 2022</h1>
      <p>TCS Placement based Papers with Solutions are given below. If you're looking for TCS Placement Paper 2022 for your Recruitment Test? Don't worry you will find all the TCS Previous Year based Papers with Solutions on PrepInsta. Around 91% of the students who got selected in TCS had prepared from PrepInsta, so you're at the best place to learn.</p>
      <p>TCS Online Test has totally of 6 sections and a total of 92 questions and the time given is 180 mins. We suggest you study from our TCS Model papers and TCS Sample papers given on our website and a good amount of questions will be of a similar pattern in the TCS Written Test 2022.</p>
    </div>


    <div class="tables">
      <div class="properties">
        <h3>Name of section</h3>
        <p>Quant</p>
        <p>verbal</p>
        <p>Reasoning</p>
        <p>programming logic</p>
        <p>Hands ON(coding 1)</p>
        <p>Hands ON(coding 2)</p>
        <p style="color: black; font-weight: 300;">Total</p>



      </div>
      <div class="values">
        <h3>Number of questions</h3>
        <p>24 Ques</p>
        <p>26 Ques</p>
        <p>30 Ques</p>
        <p>10 Ques</p>
        <p>1 code</p>
        <p>1 code</p>
        <p style="color: black;">92</p>


      </div>
    </div>

  </div>


  <?php
  include "includes/footer.php"
  ?>

</body>

</html>