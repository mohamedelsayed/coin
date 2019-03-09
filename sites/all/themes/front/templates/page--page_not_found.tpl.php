<?php
/**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2019 Programming by "http://www.mohamedelsayed.net"
 */
global $base_url;
global $sitelang;
include_once 'common' . DS . 'header.php';
include_once 'widgets' . DS . 'slider.php';
?>
<div class="container" style="width: 100%;margin: auto;">
    <div style="width: 70%;;margin-right: auto; margin-left: auto;">
        <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $GLOBALS['base_url']; ?>" style="cursor: pointer;">
            <img style="margin-top: 90px;width: 100%;max-height: 100%;margin-right: auto; margin-left: auto;" class="" src="<?php echo $GLOBALS['base_url'] . '/' . path_to_theme(); ?>/img/404-Error.jpg" />
        </a>
    </div>
</div>
<?php
include_once 'widgets' . DS . 'testimonial.php';
include_once 'widgets' . DS . 'features.php';
include_once 'widgets' . DS . 'contact.php';
include_once 'common' . DS . 'footer.php';
