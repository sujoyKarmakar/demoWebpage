<?php

include "includes/db.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include "includes/header.php"
?>



<form action="" method="post">

<?php


if(isset($_POST['submit']))
{
  $post=$_POST['post'];
  $Details=$_POST['Details'];
  $insertQnew="INSERT INTO post(id, title, content) VALUES ('','$post','$Details')";

  $res=mysqli_query($db,$insertQnew);

  if($res)
  {
    ?>
    <script>alert("Post Updated successfully")</script>
    <?php
  }else
  {
    ?>
    <script>alert("OOPS!!!")</script>
    <?php
  }

}

?>
<div class="container align-center py-24 mx-right flex">
    <div class="  bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Create Post</h2>
      <!-- <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p> -->
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Post Title</label>
        <input type="text" id="post" name="post" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Company</label>
        <input type="text" id="Company" name="Company" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">About Company</label>
        <input type="text" id="About_Company" name="About_Company" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div><div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Company Website</label>
        <input type="text" id="Company_Website" name="Company_Website" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Positions</label>
        <input type="text" id="Positions" name="Positions" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Salary</label>
        <input type="text" id="Salary" name="Salary" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Job Location</label>
        <input type="text" id="Job_Location" name="Job_Location" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Experience</label>
        <input type="text" id="Experience" name="Experience" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Eligibilty Criteria</label>
        <input type="text" id="Eligibilty Criteria" name="Eligibilty Criteria" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="Details" class="leading-7 text-sm text-gray-600">Job Description</label>
        <textarea id="Job_Description" name="Job_Description" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <div class="relative mb-4">
        <label for="Details" class="leading-7 text-sm text-gray-600">Job Requirements</label>
        <textarea id="Job_Requirements" name="Job_Requirements" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>

      <div class="relative mb-4">
        <label for="post" class="leading-7 text-sm text-gray-600">Apply Link</label>
        <input type="text" id="Apply_Link" name="Apply_Link" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="filename">
      <label class="custom-file-label" for="customFile">Company Logo</label>
    </div>

      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="submit">Post</button>
    </div>
  </div>



</form>



<?php

include "includes/footer.php"
?>
</body>
</html>