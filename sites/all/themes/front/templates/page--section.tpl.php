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
//$page_title = __('Projects');
//drupal_set_title($page_title);
$limit = $GLOBALS['limit'];
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$new_arrival = 0;
$hot_offers = 0;
$sectionId = arg(1);
$section = node_load($sectionId);
?>
<section id="team" data-stellar-background-ratio="0.5">
    <div class="container">
        <?php
        if (!empty($section)) {
            $section_title = $section->title;
            $section_second_title = '';
            if (isset($section->field_second_title[LANGUAGE_NONE][0]['value'])) {
                $section_second_title = $section->field_second_title[LANGUAGE_NONE][0]['value'];
            }
            $return = elsayed_get_products($limit, $page, $sectionId, $new_arrival, $hot_offers);
            $page_count = $return['page_count'];
            $products = $return['items'];
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?php echo $section_title; ?></h2>
                        <h4><?php echo $section_second_title; ?></h4>
                    </div>
                </div>
                <?php
                if (!empty($products)) {
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
                            $image = image_style_url('thumbnail', $product->field_images[LANGUAGE_NONE][0]['uri']);
                        }
                        $delays = [0.2, 0.4, 0.6, 0.4];
                        if ($i > 4) {
                            $i = 1;
                        }
                        $delay = $delays[$i - 1];
                        $new_line = 0;
                        if ($i % 4 == 0) {
                            $new_line = 1;
                        }
                        $i++;
                        ?>
                        <div class="col-md-3 col-sm-4 product-list-item">
                            <div class="team-thumb wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                                <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $product_title; ?>">
                                <div class="team-hover">
                                    <div class="team-item">
                                        <h4><?php echo __('Check It'); ?></h4>
                                        <ul class="social-icon">
                                            <li><a href="<?php echo $product_url; ?>" class="fa fa-eye"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3><?php echo $product_title; ?></h3>
                                <p><?php echo $product_second_title; ?></p>
                            </div>
                        </div>
                        <?php if ($new_line == 1) { ?>
                            <div class="col-md-12 col-sm-12">&nbsp;</div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <?php
                $paging = elsayed_draw_paging($page_count, $page);
                echo $paging;
            } else {
                ?>
                <div style="width:100%;text-align:center;float:left"><?php echo __('No results found'); ?></div>
            <?php } ?>
        <?php } else { ?>
            <div style="width:100%;text-align:center;float:left"><?php echo __('No results found'); ?></div>
        <?php } ?>
    </div>
</section>
<?php
include_once 'widgets' . DS . 'testimonial.php';
include_once 'widgets' . DS . 'features.php';
include_once 'widgets' . DS . 'contact.php';
include_once 'common' . DS . 'footer.php';
