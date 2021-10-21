<?php require('includes/db.php'); 

if(isset($_GET['page']))
{
  $page=$_GET['page'];
}else{
  $page=1;
}

$post_per_page=3;
$result= ($page-1)*$post_per_page;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    $query = "SELECT * FROM keywords WHERE key_slug='placement'";
		$res = mysqli_query($db,$query);
		$row = mysqli_fetch_assoc($res);
		?>
		<title><?php echo $row['key_title']; ?></title>
		<meta name="keywords" content="<?php echo $row['key_words']; ?>">
		<meta name="description" content="<?php echo $row['key_desc']; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php 

    include 'includes/header.php'
    
    ?>


<?php 

$postquery= "select * from post order by id desc limit $post_per_page";

$runPQ= mysqli_query($db,$postquery);

while($post=mysqli_fetch_assoc($runPQ))
{

    ?>
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="mt-1 text-gray-500 text-sm">Posted on <?= date('F jS Y',strtotime( $post['created_at'])) ?> </span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?= $post['title'] ?></h2>
          <p class="leading-relaxed" style="
    display: -webkit-box;
    max-width: 100%;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
"><?= $post['content'] ?></p>
          <a class="text-indigo-500 inline-flex items-center mt-4" href="details.php?id=<?=$post['id']?>">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
}
?>

<div class=" container flex items-center space-x-1">
    <a href="#" class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md">
        Previous
    </a>

    <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
        1
    </a>
    <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
        2
    </a>
    <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">
        3
    </a>
    <a href="#" class="px-4 py-2 font-bold text-gray-500 bg-gray-300 rounded-md hover:bg-blue-400 hover:text-white">
        Next
    </a>
</div>








    <?php 
    include 'includes/footer.php'
    ?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>
</html>