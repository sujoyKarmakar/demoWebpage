<?php
require "includes/db.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400;600&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>
  html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
/* 
*
{
    padding: 0px;
    margin: 0px ;
    font-family: 'Source Serif Pro', serif;
} */
/* 
body{
    background-color: lightblue;
} */

social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
 
}</style>
</head>
<body>

<footer class="bg-dark">
      <div class="container py-5">
        <div class="row py-4">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
            <p class="font-italic text-white">" Placement for All..All for Placement.. " is one stop solution for all kind of placement exam conducted in world. Onlinestudy4u is the only channels in India who provide "MOCK TEST VIDEO SOLUTION" for all kind of placement Exams. OnlineStudy4u has the best mentors who has more than 10years of Experience in IT industry.</p>
            <ul class="list-inline mt-4">
              <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-youtube"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4 text-light">Useful links</h6>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a href="jobs.php" class="text-light">New Vacancies</a></li>
              <li class="mb-2"><a href="successfullcan.php" class="text-light">Successful Candidates</a></li>
              <li class="mb-2"><a href="gallery.php" class="text-light">Gallery</a></li>
              <li class="mb-2"><a href="contactus.php" class="text-light">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4 text-light">Placement Videos</h6>
            <ul class="list-unstyled mb-0 ">
              <li class="mb-2"><a href="https://www.youtube.com/watch?v=VzIZIHTO27U&list=PLYA_1SYVpPQzhpqG1pVZzDgL0UH4SRq7i" class="text-light"  target="_blank">Aptitute</a></li>
              <li class="mb-2"><a href="https://www.youtube.com/watch?v=pmwxApl9rCk&list=PLYA_1SYVpPQynd7hISlUD7AGmcMK8t3-W" class="text-light"  target="_blank">English</a></li>
              <li class="mb-2"><a href="https://www.youtube.com/watch?v=gZJ_Dnpo94A&list=PLYA_1SYVpPQzebPYWu6q0qe2fG6KUotYk" class="text-light"  target="_blank">Interview Preparation</a></li>
              <li class="mb-2"><a href="https://www.youtube.com/watch?v=-9fN0VLBpYE&list=PLYA_1SYVpPQyclnUUFCcXWhEL8fE5RsAx" class="text-light"  target="_blank">Programming</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4 text-light">Newsletter</h6>
            <p class="text-muted mb-4">Subscribe to our Newsletter.</p>

            <?php 
          if(isset($_POST['submit_email']))
          {
            $newsletter=$_POST['newsletter'];
            $insertQnewsletter="INSERT INTO newsletter(email) VALUES ('$newsletter')";
          
            $res=mysqli_query($db,$insertQnewsletter);
          
            if($res)
            {
              ?>
              <script>alert("Thank you for subscription")</script>
              <?php
            }else
            {
              ?>
              <script>alert("OOPS!!!")</script>
              <?php
            }
          
          }
            ?>
           <form action="" method="post">
            <div class="p-1 rounded border">
              <div class="input-group">
                <input type="email" name="newsletter" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                <div class="input-group-append bg-dark text-light ">
                  <button id="button-addon1" name="submit_email" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
    <div class="bg-dark-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 OnlineStudy4u —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@Onlinestudy4u.in</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500" href="https://www.facebook.com/pg/onlinestudy4upratik/posts/" target="_blank">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
      
        <a class="ml-3 text-gray-500" href="https://www.instagram.com/onlinestudy4u.placement/" target="_blank">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-4 text-gray-500" href="https://www.youtube.com/channel/UC512aL5wp8icOicjwwWtOyg" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
              </a>
        
      </span>
    </div>
      </div>
     
    </footer>



          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>
</html>