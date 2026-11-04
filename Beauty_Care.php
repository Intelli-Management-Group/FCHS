<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FCHS - Beauty Care</title>
    <!-- Stylesheets -->

    <link rel="stylesheet" href="lib/bootstrap.css">
    <!-- <link href="http://t.commonsupport.com/care-giver/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"> -->
    <link href="lib/settings.css" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="http://t.commonsupport.com/care-giver/css/responsive.css" rel="stylesheet"> -->
    <link href="lib/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">
        <div class="preloader"></div>
        <?php include 'header.php'; ?>
        <!-- End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(img/Services/banner_spa_n_beauty.jpg)">
        <div Style="height: 170px"></div>
			<div Style="height: 50px">
			   <h3 class="h2bg">Experience total bliss and rejuvenation</h3>
			</div>
			<div Style="height: 100px"></div>
        </section>
        <!--End Page Title-->

        <!-- Best Life Realized -->
        <section class="mission-section style-two">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="content-column col-lg-4 col-md-5 col-sm-12">
                        <div class="">
                            <h5 class="text3" style="letter-spacing: 2px !important;">OUR SERVICES</h5>
                            <h2>Beauty Care</h2>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-7 col-sm-12">
                        <div class="inner-column">
                            <ul class="mission-list">
                                <li class="text3">
                                    Everybody deserves a day for themselves. Our Spa Care services offer a variety of special services that will help carry out those plans, guaranteeing seniors will be re-energized and relaxed. Highly trained professionals will provide services that range from haircuts to body massages, skin care, and even nail care.
                                </li>
                                <br/>
								<li class="text3">
								    Hair Style services equipped with professionally trained hair stylists will provide a salon service like no other, each haircut will be carefully tailored toward your style and preference in addition to a shampoo, blow dry, and styling service. 
                                </li>
                                <br/>
								<li class="text3">
								    Our Spa Care services will take care of your physical and mental health, from our body massages to nail or facial care, you are bound to feel pampered and confident.  
								</li>
								<br/>
								<li class="text3">
								    Practice self-love in a space that prioritizes comfort, dignity, and satisfaction. To schedule your appointment, reach out to us by phone or email, and embark on a journey of beauty, self-care, and renewal.
								</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Best Life Realized -->

        <!-- Service Section -->
        <section class="news-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title style-two">
                    <div class="clearfix  pt-4 pb-4">
                        <div style="text-align: center">
                            <h2 class="h2 pt-5">Explore Our Services</h2>
                        </div>
                    </div>
                </div>


                <div class="row clearfix">

                    <!-- News Block -->
                    <div class="news-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="Companion_Care.php"><img src="img/Services/img_companion.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h5 style="text-align: center"><a class="h4" href="Companion_Care.php">Companion Care</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="news-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="Personal_Care.php"><img src="img/Services/img_personal.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h5 style="text-align: center"><a class="h4" href="Personal_Care.php">Personal Care</a></h5>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="Nursing_Care.php"><img src="img/Services/img_nursing.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h5 style="text-align: center"><a class="h4" href="Nursing_Care.php">Nursing Care</a></h5>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="Specialty_Care.php"><img src="img/Services/img_specialty.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h5 style="text-align: center"><a class="h4" href="Specialty_Care.php">Specialty Care</a></h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Service Section -->
        <?php include 'footer.php' ?>
    </div>
    <!--End pagewrapper-->
    

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script>
        $(document).ready(function () {
            $(".scroll-to-top").hide();

            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) { 
                    $(".scroll-to-top").fadeIn();
                } else {
                    $(".scroll-to-top").fadeOut();
                }
            });

            $(".scroll-to-target").on('click', function () {
                var target = $(this).attr('data-target');
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1500);
            });
        });
    </script>
    <!--Scroll to top-->
    <!-- <script src="http://t.commonsupport.com/care-giver/js/jquery.js"></script> -->
    <!--Revolution Slider-->
    <!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script> -->
    <script src="lib/jquerycare.js"></script>
    <script src="lib/revolution.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script> -->
    <script src="lib/layeranimation.js"></script>
    <script src="lib/revolution.extension.navigation.min.js"></script>
    <script src="lib/revolution.extension.parallax.min.js"></script>
    <script src="lib/revolution.extension.slideanims.min.js"></script>
    <script src="lib/main-slider-script.js"></script>
    <script src="lib/appear.js"></script>
    <script src="lib/fancybox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script>
    <!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="http://t.commonsupport.com/care-giver/js/main-slider-script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script> -->
    <script src="js/appear.js"></script>
    <!-- <script src="js/script.js"></script> -->
</body>

</html>