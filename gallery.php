<?php require "includes/db.php"?>


<?php include "includes/header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
     


    <?php 
    $gallquery="SELECT * FROM gallery ORDER BY id DESC";
    $run=mysqli_query($db,$gallquery);
    $pic=mysqli_fetch_assoc($run);


    ?>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="gallery/classplus.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="gallery/award.jpeg">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="gallery/bright.png">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="gallery/rsz_29512782_1592895407413413_40298559696059573_n.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="gallery/bangalore-school-of-civil-services-hebbal-bangalore-ias-tutorialsb-1z4ospt.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="gallery/kidsjpg.jpg">
        </div>
      </div>
    </div>
  </div>
</section>



    

<?php include "includes/footer.php"?>

</body>
</html>