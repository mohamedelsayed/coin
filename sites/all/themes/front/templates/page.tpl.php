<?php
/**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2019 Programming by "http://www.mohamedelsayed.net"
 */
global $sitelang;
include_once 'common' . DS . 'header.php';
include_once 'widgets' . DS . 'slider.php';
?>
<div id="page" class="page-div page_margin_bottom" style="min-height: 700px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php print render($page_content); ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'widgets' . DS . 'testimonial.php';
include_once 'widgets' . DS . 'features.php';
include_once 'widgets' . DS . 'contact.php';
include_once 'common' . DS . 'footer.php';
