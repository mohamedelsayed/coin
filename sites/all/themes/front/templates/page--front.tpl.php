<?php

/**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2019 Programming by "http://www.mohamedelsayed.net"
 */
drupal_set_title('');
global $base_url;
global $sitelang;
$home_widgets = elsayed_get_home_widgets();
$GLOBALS['home_widgets'] = $home_widgets;
include_once 'common' . DS . 'header.php';
include_once 'widgets' . DS . 'slider.php';
include_once 'widgets' . DS . 'ourstory.php';
include_once 'widgets' . DS . 'coins.php';
include_once 'widgets' . DS . 'testimonial.php';
include_once 'widgets' . DS . 'features.php';
include_once 'widgets' . DS . 'contact.php';
include_once 'common' . DS . 'footer.php';
