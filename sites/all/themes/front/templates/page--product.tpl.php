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
$nid = arg(1);
$product = node_load($nid);
if (!empty($product)) {
    $product_title = $product->title;
    $product_second_title = '';
    if (isset($product->field_second_title[LANGUAGE_NONE][0]['value'])) {
        $product_second_title = $product->field_second_title[LANGUAGE_NONE][0]['value'];
    }
    $product_description = '';
    if (isset($product->body[LANGUAGE_NONE][0]['value'])) {
        $product_description = $product->body[LANGUAGE_NONE][0]['value'];
    }
    $image = $GLOBALS['default_image'];
//    $default_image = $GLOBALS['default_image'];
    if (isset($product->field_images[LANGUAGE_NONE][0]['uri'])) {
        $image = image_style_url('large', $product->field_images[LANGUAGE_NONE][0]['uri']);
//      $default_image = image_style_url('default_size', $product->field_images[LANGUAGE_NONE][0]['uri']);
    }
    $product_section_title = '';
    $product_section_url = '#';
    $sectionId = 0;
    if (isset($product->field_section[LANGUAGE_NONE][0]['target_id'])) {
        $sectionId = $product->field_section[LANGUAGE_NONE][0]['target_id'];
        $product_section = node_load($sectionId);
        $product_section_title = $product_section->title;
        $product_section_url = elsayed_get_node_url_by_id($sectionId);
    }
    ?>
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>"><?php echo __('Home'); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo $product_section_url; ?>"><?php echo $product_section_title; ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $product_title; ?></li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h2><?php echo $product_title; ?></h2>
                            <h4><?php echo $product_second_title; ?></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <?php echo $product_description; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s" style="position: initial;">
                        <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $product_title; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($product->field_images[LANGUAGE_NONE])) {
        $images = $product->field_images[LANGUAGE_NONE];
        if (!empty($images)) {
            ?>
            <section id="menu" data-stellar-background-ratio="0.5" class="m-t-80" style="margin-top: 0px;">
                <div class="container">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2><?php echo __('Gallery'); ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($images as $key => $image) {
                            $image_url = image_style_url('large', $image['uri']);
                            $default_image_url = image_style_url('default_size', $image['uri']);
                            if (trim($default_image_url) != '') {
                                ?>
                                <div class="col-md-2 col-sm-4" style="margin-bottom: 20px;">
                                    <!-- MENU THUMB -->
                                    <div class="menu-thumb">
                                        <a href="<?php echo $image_url; ?>" class="image-popup">
                                            <img src="<?php echo $image_url; ?>" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <hr />
        <?php } ?>
    <?php } ?>
<?php } ?>
<?php
$limit = 8;
$products = elsayed_get_products_from_same_section($limit, $sectionId, $product->nid);
if (!empty($products)) {
    ?>
    <section id="Collections" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?php echo __('Also Check'); ?></h2>
                    </div>
                </div>
                <?php
                $i = 1;
                foreach ($products as $key => $product) {
                    $product_title = $product->title;
                    $product_url = elsayed_get_node_url_by_id($product->nid);
                    $product_second_title = '';
                    if (isset($product->field_second_title[LANGUAGE_NONE][0]['value'])) {
                        $product_second_title = $product->field_second_title[LANGUAGE_NONE][0]['value'];
                    }
                    $product_description = '';
                    if (isset($product->body[LANGUAGE_NONE][0]['value'])) {
                        $product_description = elsayed_cut_string($product->body[LANGUAGE_NONE][0]['value'], 250);
                    }
                    $image = $GLOBALS['default_image'];
                    if (isset($product->field_images[LANGUAGE_NONE][0]['uri'])) {
                        $image = image_style_url('medium', $product->field_images[LANGUAGE_NONE][0]['uri']);
                    }
//                        $delays = [0.2, 0.4, 0.6, 0.4];
//                        if ($i > 4) {
//                            $i = 1;
//                        }
//                        $delay = $delays[$i - 1];
                    $new_line = 0;
                    if ($i % 4 == 0) {
                        $new_line = 1;
                    }
                    $i++;
                    ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $product_title; ?>">
                            <div class="team-hover">
                                <div class="team-item">
                                    <h4><?php echo $product_title; ?></h4>
                                    <ul class="social-icon">
                                        <li><a href="<?php echo $product_url; ?>" class="fa fa-eye"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center">
                            <h3><a href="<?php echo $product_url; ?>"><?php echo $product_title; ?></a></h3>
                        </div>
                    </div>
                    <?php if ($new_line == 1) { ?>
                        <div class="col-md-12 col-sm-12">&nbsp;</div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
}
//include_once 'widgets' . DS . 'testimonial.php';
include_once 'widgets' . DS . 'features.php';
include_once 'widgets' . DS . 'contact.php';
include_once 'common' . DS . 'footer.php';
