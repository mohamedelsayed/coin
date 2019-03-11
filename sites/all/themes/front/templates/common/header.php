<?php
elsayed_redirect_user_to_admin();
global $base_url;
global $sitelang;
$is_front_page = drupal_is_front_page();
$link1 = '#home';
$link2 = '#about';
$link3 = '#team';
$link4 = '#menu';
$link5 = '#Offers';
$link6 = '#testimonial';
$link7 = '#contact';
if (!$is_front_page) {
    $link1 = $base_url . $link1;
    $link2 = $base_url . $link2;
    $link3 = $base_url . $link3;
    $link4 = $base_url . $link4;
    $link5 = $base_url . $link5;
    $link6 = $base_url . $link6;
}
?>
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
            <a href="<?php echo $base_url; ?>" class="navbar-brand">
                <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>logo.png" />
            </a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link1; ?>" class="smoothScroll"><?php echo __('Home'); ?></a></li>
                <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link2; ?>" class="smoothScroll"><?php echo __('About'); ?></a></li>
                <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link3; ?>" class="smoothScroll" ><?php echo __('Collections'); ?></a></li>
                <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link4; ?>" class="smoothScroll"><?php echo __('New Arrival'); ?></a></li>
                <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link5; ?>" class="smoothScroll"><?php echo __('Offers'); ?></a></li>
                <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link6; ?>" class="smoothScroll"><?php echo __('Testimonials'); ?></a></li>
                <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link7; ?>" class="smoothScroll"><?php echo __('Contact'); ?></a></li>
                <?php if ($sitelang == 'en') { ?>
                    <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $base_url . '/ar'; ?>" class="language">العربية</a></li>
                <?php } else { ?>
                    <li><a hreflang="<?php echo $sitelang; ?>" href="<?php echo $base_url . '/en'; ?>" class="language">English</a></li>
                <?php } ?>
                <li class="social">
                    <?php include 'social.php'; ?>
                </li>
            </ul>
        </div>
    </div>
</section>