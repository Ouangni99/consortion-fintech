<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulting - Business, Finance and Professional Services HTML 5 Template</title>
    <!-- fav icon -->
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- animated-css -->
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome-css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- owl-carrosel-css -->
    <link href="assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/css/revolution/layers.css">
    <link rel="stylesheet" href="assets/css/revolution/navigation.css">
    <link rel="stylesheet" href="assets/css/revolution/settings.css">
    <!-- offcanvas-menu-css -->
    <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
    <!-- style-css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="homePageTwo">

    <x-web.preloader />


    <x-web.header />


    <main>
        {{ $slot }}
    </main>


    <x-web.footer />


    <!-- Off-Canvas View Only -->
    <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>

    <div id="offcanvas-menu" class="visible-xs visible-sm">

        <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

        <ul class="menu-wrapper">
            <li>
                <a class="active dropmenu" href="#">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropDown sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a class="active" href="index-two.html">Home Two</a></li>
                    <li><a href="index-three.html">Home Three</a></li>
                    <li><a href="index-four.html">Home Four</a></li>
                    <li><a href="index-five.html">Home Five</a></li>
                    <li><a href="index-six.html">Home Six</a></li>
                </ul><!-- end of dropdown -->
            </li><!-- end of li -->

            <li><a href="about.html">About</a></li><!-- end of li -->


            <li>
                <a class="dropmenu" href="#">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropDown sub-menu">
                    <li><a href="service.html">All Services</a></li>
                    <li><a href="service-one.html">Service-One</a></li>
                    <li><a href="service-two.html">Service-Two</a></li>
                    <li><a href="service-three.html">Service-Three</a></li>
                    <li><a href="service-four.html">Service-Four</a></li>
                </ul><!-- end of dropdown -->
            </li><!-- end of li -->

            <li>
                <a class="dropmenu" href="#">Project <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropDown sub-menu">
                    <li><a href="project.html">Project 4 col</a></li>
                    <li><a href="project-three.html">Project 3 col</a></li>
                    <li><a href="project-two.html">Project 2 col</a></li>
                    <li><a href="single-project.html">Single Project</a></li>
                </ul><!-- end of dropdown -->
            </li><!-- end of li -->

            <li>
                <a class="dropmenu" href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropDown sub-menu">
                    <li><a href="career.html">Career</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="partner.html">Partner</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="testimonial.html">Testimonial</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Single Blog</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="cart.html">Cart</a></li>
                </ul><!-- end of dropdown -->
            </li><!-- end of li -->

            <li><a href="contact.html">Contact</a></li><!-- end of li -->
        </ul> <!-- menu-wrapper -->
    </div>
    <!-- Off-Canvas View Only -->

    <div id="toTop" class="hidden-xs">
        <i class="fa fa-chevron-up"></i>
    </div> <!-- totop -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/language.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>



    <!-- Revolution Slider -->
    <script src="assets/revolution/jquery.themepunch.revolution.min.js"></script>
    {{-- <script src="assets/revolution/jquery.themepunch.tools.min.js"></script> --}}
    {{-- <script src="assets/rs/jquery.themepunch.revolution.min.js"></script> --}}

    <script src="assets/rs/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rs/revolution.extension.actions.min.js"></script>
    <script src="assets/rs/revolution.extension.carousel.min.js"></script>
    <script src="assets/rs/revolution.extension.kenburn.min.js"></script>
    <script src="assets/rs/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/rs/revolution.extension.migration.min.js"></script>
    <script src="assets/rs/revolution.extension.navigation.min.js"></script>
    <script src="assets/rs/revolution.extension.parallax.min.js"></script>
    <script src="assets/rs/revolution.extension.slideanims.min.js"></script>
    <script src="assets/rs/revolution.extension.video.min.js"></script>

    <!-- Revolution Extensions -->
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.video.min.js"></script>


    <script src="assets/js/script.js"></script>
</body>

</html>
