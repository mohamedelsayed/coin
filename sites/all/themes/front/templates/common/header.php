<?php
elsayed_redirect_user_to_admin();
global $base_url;
?>
<?php global $sitelang; ?>
<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>
<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand">
                <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>logo.png" />
            </a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#team" >Collections</a></li>
                <li><a href="#menu" class="smoothScroll">New Arrival</a></li>
                <li><a href="#Offers" class="smoothScroll">Offers</a></li>
                <li><a href="#testimonial" class="smoothScroll">Testimonials</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
                <li><a href="#" class="language">العربية</a></li>
                <li class="social">
                    <a href="#" class="fa fa-facebook-square" attr="facebook icon"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </li>
            </ul>
        </div>
    </div>
</section>