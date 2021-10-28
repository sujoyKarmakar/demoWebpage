<?php require('includes/db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/glider.min.css">


    <?php
    $query = "SELECT * FROM keywords WHERE key_slug='index'";
    $res = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($res);
    ?>
    <title><?php echo $row['key_title']; ?></title>
    <meta name="keywords" content="<?php echo $row['key_words']; ?>">
    <meta name="description" content="<?php echo $row['key_desc']; ?>">

</head>

<body>
    <style>
        <?php include 'CSS/style.css'; ?>
    </style>
    <?php
    include "includes/header.php";
    ?>
    <!-- MAin hero box -->
    <section>
        <div class="main-content">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1>Want to get job in top IT companies?</h1>
                    <h3>Welcome to onlinestudy4u.in. Your one step solution for all your placement need!! </h3>
                    <button class="btn1" onClick="document.getElementById('Top').scrollIntoView({behavior:'smooth'});">Learn more
                    </button>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="content-img">
                        <img src="images/onlinestudy4u.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our app starts -->
    <section class="text-gray-600 body-font" id="Top">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="images/moblieapp.png">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 custom_font"> India's best Courses for interview preparation!
                </h1>
                <p class="mb-8 leading-relaxed">Get our premium courses and 24X7 online assistance. Get the app now.</p>
                <div class="flex lg:flex-row md:flex-col">
                    <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none" onclick="openInNewTab('https://play.google.com/store/apps/details?id=co.varys.kfqrn&hl=en_IN&gl=US')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
                            <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
                        </svg>
                        <span class="ml-4 flex items-start flex-col leading-none">
                            <span class="text-xs text-gray-600 mb-1">GET IT ON</span>
                            <span class="title-font font-medium">Google Play</span>
                        </span>
                    </button>
                </div>
            </div>
    </section>
    <!-- Our app ends -->
    <!-- Top courses -->
    <section class="text-gray-600 body-font bg-blue-900">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <!-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2> -->
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-light">Our Popular courses</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Find our best videos for free
                <p>
            </div>
            <div class="flex flex-wrap">
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h2 class="text-lg sm:text-xl text-light font-medium title-font mb-2">APTITUTE PLACEMENT VIDEOS</h2>
                    <p class="leading-relaxed text-light mb-4">Best aptitude video avialable on internet. Get these free course and upgrade your skills. <br> <br>
                        <hr>
                    </p>
                    <a class="text-light inline-flex items-end" href="https://www.youtube.com/watch?v=VzIZIHTO27U&list=PLYA_1SYVpPQzhpqG1pVZzDgL0UH4SRq7i" target="_blank">Watch video
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h2 class="text-lg sm:text-xl text-light font-medium title-font mb-2">INTERVIEW PREPARATION VIDEOS</h2>
                    <p class="leading-relaxed text-light mb-4">Get prepared for your next interview. View our mock interview videos and clear any interview round <br> <br>
                        <hr>
                    </p>
                    <a class="text-light inline-flex items-end" href="https://www.youtube.com/watch?v=pmwxApl9rCk&list=PLYA_1SYVpPQynd7hISlUD7AGmcMK8t3-W" target="_blank">watch video
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h2 class="text-lg sm:text-xl text-light font-medium title-font mb-2">PROGRAMMING PLACEMENT VIDEOS</h2>
                    <p class="leading-relaxed text-light mb-4">Still struggling to get clear concept of basic programming? Follow our videos and clear your concept!
                        <hr>
                    </p>
                    <a class="text-light inline-flex self-end" href="https://www.youtube.com/watch?v=gZJ_Dnpo94A&list=PLYA_1SYVpPQzebPYWu6q0qe2fG6KUotYk" target="_blank">Watch video
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h2 class="text-lg sm:text-xl text-light font-medium title-font mb-2">OTHER POPULAR VIDEOS</h2>
                    <p class="leading-relaxed text-light mb-4"> <br> Videos on how to give interview, how to get groomed for the interview, last minutes revision and many more.
                        <hr>
                    </p>
                    <a class="text-light inline-flex self-end" href="https://www.youtube.com/watch?v=-9fN0VLBpYE&list=PLYA_1SYVpPQyclnUUFCcXWhEL8fE5RsAx" target="_blank">Watch video
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"> <a href="https://www.youtube.com/c/OnlineStudy4u/featured" style="text-decoration: none; color:white" target="_blank">View more</a> </button>
        </div>
    </section>
    <!-- Top courses end -->


    <!-- Why choose us -->
    <section class="text-black body-font ">
        <div class="container px-5 py-24 mx-auto text-dark">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-dark">Why choose us?</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We at onlinestudy4u have the best faculty. The course here are easy, practical and informative. We provide live classes which help you to get your dream job. Find our Statitics. </p>
            </div>

            <div class="elements">

                <div class="inner">
                    <hr>
                    <p>Over</p>
                    <h2>2000+</h2>
                    <p>Quality Videos to learn from</p>

                </div>
                <div class="inner">
                    <hr>
                    <br>
                    <p></p>
                    <h2>10000+</h2>
                    <p>Students are placed in Top IT companies</p>
                </div>
                <div class="inner">
                    <hr>
                    <p>Affordable Course</p>
                    <h2>10000+</h2>
                    <p>Units were sold</p>
                </div>
                <div class="inner">
                    <hr>
                    <br>
                    <p></p>
                    <h2>100+</h2>
                    <p>Industry specialist educators</p>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Why choose us end -->

    <!-- our faculty  -->
    <section class="text-gray-600 body-font bg-blue-900">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-2xl font-medium title-font mb-4 text-light tracking-widest">OUR TEAM</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-light">We are the team with skill and experience. We have both teaching as well as industry experience. Meet our faculty!!</p>
            </div>

            <div class="glider-content multiple">
                <div class="flex flex-wrap -m-4">
                    <div class="glider">

                        <?php

                        $postquery = "SELECT * FROM faculty";

                        $runPQ = mysqli_query($db, $postquery);

                        while ($faculty = mysqli_fetch_assoc($runPQ)) {
                        ?>

                            <div class="p-4 lg:w-1/2 bg-white">
                                <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="gallery/<?php echo $faculty['img']; ?>">
                                    <div class="flex-grow sm:pl-8">
                                        <h2 class="title-font font-medium text-lg text-gray-900"><?= $faculty['fn'] ?></h2>
                                        <!-- <h3 class="text-gray-500 mb-3">Teacher</h3> -->
                                        <p class="mb-4"><?= $faculty['about'] ?></p>
                                        <span class="inline-flex">
                                            <a class="text-gray-500">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                                </svg>
                                            </a>
                                            <a class="ml-2 text-gray-500">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                                </svg>
                                            </a>
                                            <a class="ml-2 text-gray-500">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- our faculty end -->

    <!-- Testomonial  -->
    <section class="text-gray-600 body-font ">
        <div class="container px-5 py-20 mx-auto">
            <h1 class="text-3xl font-medium title-font text-dark mb-8 text-center">Testimonials</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-black">Let's hear from our student, what they feel about the premium courses and their success story. </p>

            <div class="glider-contain multiple">
                <div class="flex flex-wrap -m-4">
                    <div class="glider2">
                        <?php
                        $candidates = "Select * from candidates order by id desc limit 10";

                        $runCandidates = mysqli_query($db, $candidates);

                        while ($canDetials = mysqli_fetch_assoc($runCandidates)) {
                        ?>




                            <section class="text-black body-font bg-light">
                                <div class="container px-5 py-24 mx-auto">
                                    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center" style="color: black; font-weight:500;">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                                            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                        </svg>
                                        <p class="leading-relaxed "><?= $canDetials['feedback'] ?></p>
                                        <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm"><?= $canDetials['cn'] ?></h2>
                                        <p class="text-gray-500"><?= $canDetials['ey'] ?></p>
                                    </div>
                                </div>
                            </section>


                        <?php } ?>

                    </div>
                    <div role="tablist" class="dots"></div>
                </div>

            </div>

        </div>
    </section>
    <!-- Testimonial  end -->





    <?php
    include 'includes/footer.php';
    ?>

    <script src="js/glider.min.js"></script>

    <script>
        const glider = new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            slidesToScroll: 'auto',
            draggable: true,
            dots: '.dots',
            duration: 1
            //   arrows: {
            //     prev: '.glider-prev',
            //     next: '.glider-next'
            //   }
        });

        // Glider animation

        function sliderAuto(slider, miliseconds) {
            const slidesCount = slider.track.childElementCount;
            let slideTimeout = null;
            let nextIndex = 1;

            function slide() {
                slideTimeout = setTimeout(
                    function() {
                        if (nextIndex >= slidesCount) {
                            nextIndex = 0;
                        }
                        slider.scrollItem(nextIndex++);
                    },
                    miliseconds
                );
            }

            slider.ele.addEventListener('glider-animated', function() {
                window.clearInterval(slideTimeout);
                slide();
            });

            slide();
        }

        sliderAuto(glider, 5000)

        // ends


        const glider2 = new Glider(document.querySelector('.glider2'), {
            slidesToShow: 1,
            slidesToScroll: 'auto',
            draggable: true,
            dots: '.dots',
            duration: 0.25
            //   arrows: {
            //     prev: '.glider-prev',
            //     next: '.glider-next'
            //   }
        });

        sliderAuto(glider2, 5000)
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200
        });
    </script>
    <script>
        function openInNewTab(href) {
            Object.assign(document.createElement('a'), {
                target: '_blank',
                href: href,
            }).click();
        }
    </script>

</body>

</html>