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
<div class="container" style="width: 100%;margin: auto;min-height: 450px;">
    <div class="custom_access_denied" style="width: 200px;margin-right: auto; margin-left: auto;">
        <img style="width: 100%;max-height: 100%;margin-right: auto; margin-left: auto;" class="" src="<?php echo $GLOBALS['base_url'] . '/' . path_to_theme(); ?>/img/logo-accessdenied.jpg" />
    </div>
    <div class="cutom_login_form">
        <?php
        $elements = drupal_get_form("user_login");
        $form = drupal_render($elements);
        echo $form;
        ?>
    </div>
</div>
<?php
include_once 'widgets' . DS . 'testimonial.php';
include_once 'widgets' . DS . 'features.php';
include_once 'widgets' . DS . 'contact.php';
include_once 'common' . DS . 'footer.php';
