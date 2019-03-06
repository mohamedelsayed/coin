<?php global $sitelang; ?>
<?php global $base_url; ?>
<?php
$title = __('contact me');
$body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.';
if (isset($home_widgets['contact']) && !empty($home_widgets['contact'])) {
    $item = $home_widgets['contact'];
    $title = '';
    $body = '';
    if (isset($item->title)) {
        $title = $item->title;
    }
    if (isset($item->body[LANGUAGE_NONE][0]['value'])) {
        $body = $item->body[LANGUAGE_NONE][0]['value'];
    }
}
?>
<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <!-- How to change your own map point
                1. Go to Google Maps
                2. Click on your location point
                3. Click "Share" and choose "Embed map" tab
                4. Copy only URL and paste it within the src="" field below
            -->
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13825.733547947368!2d31.27214303188734!3d29.966972599718247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583860fb2844bf%3A0xddebd8d92b7f649c!2sCoin+Furniture!5e0!3m2!1sen!2seg!4v1549726497388" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Contact Us</h2>
                    </div>
                </div>

                <!-- CONTACT FORM -->
                <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                    <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                    <h6 class="text-success">Your message has been sent successfully.</h6>

                    <!-- IF MAIL NOT SENT -->
                    <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="name" placeholder="Name">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                        <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Your Message"></textarea>

                        <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>