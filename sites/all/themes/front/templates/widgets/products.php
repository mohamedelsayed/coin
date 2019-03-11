<?php
$limit = 6;
$page = 1;
$new_arrival = 1;
$hot_offers = 0;
$sectionId = 0;
$return = elsayed_get_products($limit, $page, $sectionId, $new_arrival, $hot_offers);
$products = $return['items'];
?>
<?php if (!empty($products)) { ?>
    <section id="menu" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?php echo __('New Arrival'); ?></h2>
                        <h4><?php echo __('Check Our Latest new Furniture made By COIN'); ?></h4>
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
                        $image = image_style_url('large', $product->field_images[LANGUAGE_NONE][0]['uri']);
                    }
                    $product_price = '';
                    if (isset($product->field_price[LANGUAGE_NONE][0]['value'])) {
                        $product_price = $product->field_price[LANGUAGE_NONE][0]['value'];
                    }
                    $new_line = 0;
                    if ($i % 3 == 0) {
                        $new_line = 1;
                    }
                    $i++;
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="menu-thumb">
                            <a href="<?php echo $image; ?>" class="image-popup" title="<?php echo $product_title; ?>">
                                <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $product_title; ?>">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3><?php echo $product_title; ?></h3>
                                        <p><?php echo $product_second_title; ?></p>
                                    </div>
                                    <div class="menu-price">
                                        <span><?php echo $product_price; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php if ($new_line == 1) { ?>
                    </div>
                    <div class="row m-t-5">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php
$new_arrival = 0;
$hot_offers = 1;
$return = elsayed_get_products($limit, $page, $sectionId, $new_arrival, $hot_offers);
$products = $return['items'];
?>
<?php if (!empty($products)) { ?>
    <section id="Offers" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?php echo __('Hot Offers'); ?></h2>
                        <h4><?php echo __('Check Our Offers And Enjoy big discount'); ?></h4>
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
                        $image = image_style_url('large', $product->field_images[LANGUAGE_NONE][0]['uri']);
                    }
                    $product_price = '';
                    if (isset($product->field_price[LANGUAGE_NONE][0]['value'])) {
                        $product_price = $product->field_price[LANGUAGE_NONE][0]['value'];
                    }
                    $new_line = 0;
                    if ($i % 3 == 0) {
                        $new_line = 1;
                    }
                    $i++;
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="menu-thumb">
                            <a href="<?php echo $image; ?>" class="image-popup" title="<?php echo $product_title; ?>">
                                <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $product_title; ?>">
                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3><?php echo $product_title; ?></h3>
                                        <p><?php echo $product_second_title; ?></p>
                                    </div>
                                    <div class="menu-price">
                                        <span><?php echo $product_price; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php if ($new_line == 1) { ?>
                    </div>
                    <div class="row m-t-30">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>