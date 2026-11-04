<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>FCHS - About Us</title>
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

        <!-- Our Team -->
        <section class="mission-section style-two ">
		<div class="auto-container aboutUpper">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="content-column col-lg-4 col-md-5 col-sm-12">
					<div class="">
                        <h5 class="text3" style="letter-spacing:2px !important;">ABOUT US</h5>
                        <h2 class="h1">Our Team</h2>
                    </div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-7 col-sm-12">
					<div class="inner-column">
						<ul class="mission-list">
							<li class="text3">
							    We will help your family find a way that’s right for your loved one.  Our experience, expertise, compassionate approach, and highly-skilled Care Professionals can help people live better, more fulfilled lives.  All people deserve to have a good quality of life and feel safe and content while still being independent.  We take pride that with kindness and compassion, our highly-trained and trusted team deliver tailored care for all needs from companionship through to complex health requirements. 
							</li>
                        </ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
    <!-- End Best Life Realized -->


    <!-- Our Service Section -->
	<section class="quality-section" style="background-color: #edf1f4">
		<div class="auto-container">
			<div class="inner-container">
				
				<div class="row clearfix">
		
					<!-- Images Column -->
					<div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row ">
                            <div class="column col-lg-12 col-md-12 col-sm-12" >
                                <div class="image">
                                    <img class="chooseUs" style="padding: 0px 40px" src="img/About/img_why_choose_us.jpg" alt="" />
                                </div>
                            </div>
                        </div>
					</div>

                    <!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title Two -->
							
							<div class="sec-title-two style-two">
								<h4 class="h2 mb-4" style="color: #fff">Why Choose Us </h4>
								<div class="text3" style="color: #fff" class="text">We offer a full range of high-quality services enabling you and your loved one’s peace of mind.  Our focus is to help clients maintain their sense of independence within the comfort and respect.  Through considerate, compassionate, high-quality care, we focus on upholding the dignity of all those we take care of.  We ensure that our experienced care professionals are carefully selected, trustworthy, and they are committed to the highest professional standards of patient-centred care.  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Service Section Section -->

    <!-- Quality Section -->
	<section class="quality-section">
		<div class="auto-container">
			<div class="inner-container">
				
				<div class="row clearfix">
					
					<!-- Title Column -->
					<div class="title-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column pt-0">
							<!-- Sec Title Two -->
							<div class="sec-title-two style-two">
								<h2 class="h3">We are seeking compassionate individuals like you to join our team. </h2>
								<div class="text text3">If you have a genuine love for the elderly, a desire to make a positive impact, and a passion for creating meaningful connections, then we invite you to embark on a fulfilling journey with us. </div>
							</div>
							<div class="btn-box" style="margin-top: 20px">
								<a href="Career.php" class="theme-btn btn-style-one"><span class="txt">Apply Now</span></a>
							</div>
						</div>
					</div>
					
					<!-- Images Column -->
					<div class="images-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="row clearfix">
								
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<div class="image">
										<img src="img/About/img_join_1.jpg" alt="" />
									</div>
								</div>
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<div class="image">
										<img src="img/About/img_join_2.jpg" alt="" />
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Quality Section -->
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
