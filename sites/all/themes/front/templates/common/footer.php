<?php
global $sitelang;
$isFooter = 1;
?>
<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-4">
                <p><?php echo __('Copyright © COIN. All Rights Reserved.'); ?></p>
            </div>
            <div class="col-md-6 col-sm-8">
                <ul class="wow fadeInUp social-icon animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <?php include 'social.php'; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div id="Developer" class="hidden-xs hidden-sm hidden-md hidden-lg">
    Developed by <a hreflang="<?php echo $sitelang; ?>" href="http://www.mohamedelsayed.net" target="_blank">Mohamed Elsayed</a>
</div>