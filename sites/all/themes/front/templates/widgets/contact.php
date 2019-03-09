<?php
global $sitelang;
global $base_url;
?>
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13825.733547947368!2d31.27214303188734!3d29.966972599718247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583860fb2844bf%3A0xddebd8d92b7f649c!2sCoin+Furniture!5e0!3m2!1sen!2seg!4v1549726497388" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?php echo __('Contact Us'); ?></h2>
                    </div>
                </div>
                <form id="contact-form" onsubmit="return validate_contact_us_form();" action="<?php echo $base_url . '/contact-us-form'; ?>" method="post" role="form"  class="wow fadeInUp contactForm" data-wow-delay="0.8s" >
                    <h6 class="text-success"  id="sendmessage"><?php echo __('Your message has been sent successfully.'); ?></h6>
                    <h6 class="text-danger"  id="errormessage"><?php echo __('There is a problem in sending mail. Try again.'); ?></h6>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="name" placeholder="<?php echo __('Name'); ?>">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" id="cf-email" name="email" placeholder="<?php echo __('Email address'); ?>">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="<?php echo __('Subject'); ?>">
                        <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="<?php echo __('Your Message'); ?>"></textarea>
                        <button type="submit" class="form-control" id="cf-submit" name="submit"><?php echo __('Send Message'); ?></button>
                    </div>
                    <div id="sendmail_ajaxLoading"></div>
                </form>
            </div>
        </div>
    </div>
</section>