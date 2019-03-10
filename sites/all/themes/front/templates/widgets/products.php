<?php
$limit = 6;
$page = 1;
$new_arrival = 1;
$hot_offers = 0;
$sectionId = 0;
$return = elsayed_get_products($limit, $page, $sectionId, $new_arrival, $hot_offers);
//$page_count = $return['page_count'];
$products = $return['items'];
?>
<!-- New Arrilvel -->
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
                        <!-- MENU THUMB -->
                        <div class="menu-thumb">
                            <a href="<?php echo $image; ?>" class="image-popup" title="<?php echo $product_title; ?>">
                                <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $product_title; ?>">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3><?php echo $product_title; ?></h3>
                                        <p><?php echo $product_title; ?></p>
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
<!-- Our Hot offer -->
<section id="Offers" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Hot Offers</h2>
                    <h4>Check Our Offers And Enjoy big discount</h4>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- MENU THUMB -->
                <div class="menu-thumb">
                    <a href="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image1.jpg" class="image-popup" title="American Breakfast">
                        <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image1.jpg" class="img-responsive" alt="">

                        <div class="menu-info">
                            <div class="menu-item">
                                <h3>American Breakfast</h3>
                                <p>Tomato / Eggs / Sausage</p>
                            </div>
                            <div class="menu-price">
                                <span>$25</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- MENU THUMB -->
                <div class="menu-thumb">
                    <a href="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image2.jpg" class="image-popup" title="Self-made Salad">
                        <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image2.jpg" class="img-responsive" alt="">

                        <div class="menu-info">
                            <div class="menu-item">
                                <h3>Self-made Salad</h3>
                                <p>Green / Fruits / Healthy</p>
                            </div>
                            <div class="menu-price">
                                <span>$18</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- MENU THUMB -->
                <div class="menu-thumb">
                    <a href="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image3.jpg" class="image-popup" title="Chinese Noodle">
                        <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image3.jpg" class="img-responsive" alt="">

                        <div class="menu-info">
                            <div class="menu-item">
                                <h3>Chinese Noodle</h3>
                                <p>Pepper / Chicken / Vegetables</p>
                            </div>
                            <div class="menu-price">
                                <span>$34</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-4 col-sm-6">
                <!-- MENU THUMB -->
                <div class="menu-thumb">
                    <a href="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image4.jpg" class="image-popup" title="Rice Soup">
                        <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image4.jpg" class="img-responsive" alt="">

                        <div class="menu-info">
                            <div class="menu-item">
                                <h3>Rice Soup</h3>
                                <p>Green / Chicken</p>
                            </div>
                            <div class="menu-price">
                                <span>$28</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- MENU THUMB -->
                <div class="menu-thumb">
                    <a href="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image5.jpg" class="image-popup" title="Project title">
                        <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image5.jpg" class="img-responsive" alt="">

                        <div class="menu-info">
                            <div class="menu-item">
                                <h3>Deli Burger</h3>
                                <p>Beef / Fried Potatoes</p>
                            </div>
                            <div class="menu-price">
                                <span>$46</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- MENU THUMB -->
                <div class="menu-thumb">
                    <a href="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image6.jpg" class="image-popup" title="Project title">
                        <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>menu-image6.jpg" class="img-responsive" alt="">

                        <div class="menu-info">
                            <div class="menu-item">
                                <h3>Big Flat Fried</h3>
                                <p>Pepper / Crispy</p>
                            </div>
                            <div class="menu-price">
                                <span>$30</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>