<?php
global $sitelang;
if (isset($home_widgets['ourstory']) && !empty($home_widgets['ourstory'])) {
    $item = $home_widgets['ourstory'];
    $title = '';
    if (isset($item->title)) {
        $title = $item->title;
    }
    $second_title = '';
    if (isset($item->field_second_title[LANGUAGE_NONE][0]['value'])) {
        $second_title = $item->field_second_title[LANGUAGE_NONE][0]['value'];
    }
    $body = '';
    if (isset($item->body[LANGUAGE_NONE][0]['value'])) {
        $body = $item->body[LANGUAGE_NONE][0]['value'];
    }

    $image = $GLOBALS['default_image'];
    if (isset($item->field_image[LANGUAGE_NONE][0]['uri'])) {
        $image = image_style_url('large', $item->field_image[LANGUAGE_NONE][0]['uri']);
    }
    ?>
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h2><?php echo $title; ?></h2>
                            <h4><?php echo $second_title; ?></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <div><?php echo $body; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $title; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>