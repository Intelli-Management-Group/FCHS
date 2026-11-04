
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CareGiver - Elder Care HTML Template | Home Page 01</title>
<!-- Stylesheets -->

<link rel="stylesheet" href="lib/bootstrap.css">
<!-- <link href="http://t.commonsupport.com/care-giver/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"> -->
<link href="lib/settings.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" integrity="sha512-QKC1UZ/ZHNgFzVKSAhV5v5j73eeL9EEN289eKAEFaAjgAiobVAnVv/AGuPbXsKl1dNoel3kNr6PYnSiTzVVBCw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.css" integrity="sha512-9Tu/Gu0+bXW+oGrTGJOeNz2RG4MaF52FznXCciXFrXehFTLF6phJnJFNVOU2mmj9FWIXk9ap0H1ocygu1ZTRqg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="
https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css
" rel="stylesheet">
<!-- 
<link href="http://t.commonsupport.com/care-giver/css/style.css" rel="stylesheet">
<link href="http://t.commonsupport.com/care-giver/css/responsive.css" rel="stylesheet"> -->

<link href="lib/style.css" rel="stylesheet">
<link href="lib/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<style>
    .fixed-header .header-upper,
    .fixed-header{
        position: fixed !important;
        left: 0px !important;
        top: 0px !important;
        width: 100% !important;
    }
</style>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <header class="main-header ">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo mt-2"><a href="index.php"><img src="img/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="fa fa-bars"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a id="index" href="index.php">Home</a>
                                    </li>
                                    <li class="dropdown"><a id="company" href="about_us.php">Company</a>
                                        <ul>
                                            <li><a href="about_us.php">About Us</a></li>
                                            <li><a href="philosophy.php">Philosophy</a></li>
                                            <li><a href="our_values.php">Our Values</a></li>
                                            <li><a href="sustainibility.php" style="padding-bottom: 15px">Sustainability</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a id="products" href="product-coco-water.php">Products</a>
                                        <ul>
                                            <li><a href="product-coco-water.php">Coconut Water</a></li>
                                            <li><a href="product-juice.php" style="padding-bottom: 15px">100% Pure Juices</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a id="contact" href="contact-us.php">Contact</a>
                                    </li>

                                   
									
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.php"><img src="img/logo.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
	
</div>  
<!--End pagewrapper-->

    <script>
		const currentPathLink = window.location.pathname.split("/");
		const path = currentPathLink[currentPathLink.length - 1];
       
		if(path === "index.php"){
			const element = document.getElementById('index');
			element.style.color = '#9dca00';
		}else if(path === "about_us.php" || path === "philosophy.php" || path === "our_values.php" || path === "sustainibility.php") {
			const element = document.getElementById('company');
			element.style.color = '#9dca00';
		} else if(path === "product-coco-water.php" || path === "product-juice.php") {
			const element = document.getElementById('products');
			element.style.color = '#9dca00';
		} else if(path === "contact-us.php") {
			const element = document.getElementById('contact');
			element.style.color = '#9dca00';
		}
	</script>

<!--Scroll to top-->
<!-- <script src="http://t.commonsupport.com/care-giver/js/jquery.js"></script> -->
<script src="lib/jquerycare.js"></script>

<!--Revolution Slider-->
<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script> -->
<script src="lib/revolution.js"></script>
<script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script>
<script src="lib/layeranimation.js"></script>
<script src="lib/revolution.extension.navigation.min.js"></script>
<script src="lib/revolution.extension.parallax.min.js"></script>
<script src="lib/revolution.extension.slideanims.min.js"></script>
<script src="lib/main-slider-script.js"></script>
<script src="lib/appear.js"></script>
<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> -->
<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script> -->
<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script> -->
<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> -->
<!-- <script src="http://t.commonsupport.com/care-giver/js/main-slider-script.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<script src="lib/fancybox.js"></script>
<!-- <script src="http://t.commonsupport.com/care-giver/js/appear.js"></script> -->
<script src="js/script.js"></script>
</body>
</html>