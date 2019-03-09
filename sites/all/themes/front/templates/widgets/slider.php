<?php
global $sitelang;
$slider_widget = elsayed_get_content_widget('slider');
if (!empty($slider_widget)) {
    ?>
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php
                foreach ($slider_widget as $key => $slider) {
                    $slider_image = $slider->field_image[LANGUAGE_NONE][0]['uri'];
                    $image = image_style_url('default_size', $slider_image);
                    $slider_title = trim($slider->title);
                    $slider_second_title = '';
                    if (isset($slider->field_second_title[LANGUAGE_NONE][0]['value'])) {
                        $slider_second_title = $slider->field_second_title[LANGUAGE_NONE][0]['value'];
                    }
                    $slider_link = '';
                    if (isset($slider->field_link[LANGUAGE_NONE][0]['value'])) {
                        $slider_link = $slider->field_link[LANGUAGE_NONE][0]['value'];
                    }
                    $slider_blank = 0;
                    if (isset($slider->field_blank[LANGUAGE_NONE][0]['value'])) {
                        $slider_blank = $slider->field_blank[LANGUAGE_NONE][0]['value'];
                    }
                    $href_code = '';
                    $have_link = 0;
                    if (trim($slider_link) != '') {
                        $blank_code = '';
                        if ($slider_blank) {
                            $blank_code = ' target="_blank" ';
                        }
                        $href_code = ' href="' . $slider_link . '" ' . $blank_code;
                        $have_link = 1;
                    }
                    ?>
                    <div class="item item-first" style="background-image: url(<?php echo $image; ?>);">
                        <?php /* I<a hreflang="<?php echo $sitelang; ?>" <?php echo $href_code; ?> > */ ?>
                        <div class="caption">
                            <div class="container">
                                <div class="col-md-8 col-sm-12">
                                    <h3>        <?php echo $slider_title; ?></h3>
                                    <h1>        <?php echo $slider_second_title; ?></h1>
                                    <?php if ($have_link == 1) { ?>
                                        <a hreflang="<?php echo $sitelang; ?>" <?php echo $href_code; ?> class="section-btn btn btn-default smoothScroll">
                                            <?php echo __('Discover Now'); ?></a>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                <?php } ?>
            </div>
    </section>
<?php } ?>