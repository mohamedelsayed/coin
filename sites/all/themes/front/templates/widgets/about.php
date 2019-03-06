<?php global $sitelang; ?>
<?php
//if (isset($home_widgets['about']) && !empty($home_widgets['about'])) {
//    $item = $home_widgets['about'];
//    $title = '';
//    $body = '';
//    if (isset($item->title)) {
//        $title = $item->title;
//    }
//    if (isset($item->body[LANGUAGE_NONE][0]['value'])) {
//        $body = $item->body[LANGUAGE_NONE][0]['value'];
//    }
?>
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="about-info">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                        <h2>Read our story</h2>
                        <h4>We've been Making Furniture Since 1999</h4>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <p>
                            IN 2009-we started our first showroom at NASR CITY -we moved to another at ABBAS EL- AKKAD ST, IN 2012- we established our company.
                            we are looking to produce a Unique Egyptian furniture that conquers the world. using A luxurious lifestyle with high quality and reasonable price.<br />
                            We guarantee Confidence in treatment. Commitment concerning the time of handling the items Using the best materials Using the best imported accessories from Germany.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                    <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/'; ?>about-image.jpg" class="img-responsive" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
<?php
//} ?>