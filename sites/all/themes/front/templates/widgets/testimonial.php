<?php
global $sitelang;
$testimonials_widget = elsayed_get_content_widget('testimonial');
if (!empty($testimonials_widget)) {
    ?>
    <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?php echo __('Testimonials'); ?></h2>
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        foreach ($testimonials_widget as $key => $testimonial) {
                            $testimonial_name = trim($testimonial->title);
                            $testimonial_job = '';
                            if (isset($testimonial->field_job[LANGUAGE_NONE][0]['value'])) {
                                $testimonial_job = $testimonial->field_job[LANGUAGE_NONE][0]['value'];
                            }
                            $testimonial_body = '';
                            if (isset($testimonial->body[LANGUAGE_NONE][0]['value'])) {
                                $testimonial_body = $testimonial->body[LANGUAGE_NONE][0]['value'];
                            }
                            ?>
                            <div class="item">
                                <p><?php echo $testimonial_body; ?></p>
                                <div class="tst-author">
                                    <h4><?php echo $testimonial_name; ?></h4>
                                    <span><?php echo $testimonial_job; ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>