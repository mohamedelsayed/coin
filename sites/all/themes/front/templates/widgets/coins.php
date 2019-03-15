<?php
global $sitelang;
global $base_url;
$sections = elsayed_get_sections(5);
if (!empty($sections)) {
    ?>
    <section id="team" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?php echo __('All in Coin'); ?></h2>
                        <h4><?php echo __('They are nice & friendly'); ?></h4>
                    </div>
                </div>
                <?php
                $i = 1;
                foreach ($sections as $key => $section) {
                    if ($i == 4) {
                        break;
                    }
                    $section_image = $section->field_image[LANGUAGE_NONE][0]['uri'];
                    $image = image_style_url('default_size', $section_image);
                    $section_title = trim($section->title);
                    $section_second_title = '';
                    if (isset($section->field_second_title[LANGUAGE_NONE][0]['value'])) {
                        $section_second_title = $section->field_second_title[LANGUAGE_NONE][0]['value'];
                    }
                    $section_url = elsayed_get_node_url_by_id($section->nid);
                    $image = $GLOBALS['default_image'];
                    if (isset($section->field_image[LANGUAGE_NONE][0]['uri'])) {
                        $image = image_style_url('thumbnail', $section->field_image[LANGUAGE_NONE][0]['uri']);
                    }
                    $delays = [0.2, 0.4, 0.6];
                    if ($i > 3) {
                        $i = 1;
                    }
                    $delay = $delays[$i - 1];
                    $i++;
                    ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="team-thumb wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $section_title; ?>">
                            <div class="team-hover">
                                <div class="team-item">
                                    <h4><?php echo __('Check Our') . ' ' . $section_title; ?></h4>
                                    <ul class="social-icon">
                                        <li><a href="<?php echo $section_url; ?>" class="fa fa-eye"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3><a href="<?php echo $section_url; ?>"><?php echo $section_title; ?></a></h3>
                            <p><?php echo $section_second_title; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
    if (count($sections) > 3) {
        $otherSections = [];
        $sections_names = '';
        $sections = array_values($sections);
        for ($j = $i - 1; $j < count($sections); $j++) {
            $section = $sections[$j];
            $otherSections[] = $section;
            $sections_names .= $section->title . ' & ';
            if ($j == 5) {
                break;
            }
        }
        $sections_names = trim(trim(trim($sections_names), '&'));
        ?>
        <section id="Collections" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2><?php echo __('Also Check'); ?></h2>
                            <h4><?php echo __('Check Our') . ' ' . $sections_names; ?></h4>
                        </div>
                    </div>
                    <?php
                    foreach ($otherSections as $section) {
                        $section_title = trim($section->title);
                        $section_second_title = '';
                        if (isset($section->field_second_title[LANGUAGE_NONE][0]['value'])) {
                            $section_second_title = $section->field_second_title[LANGUAGE_NONE][0]['value'];
                        }
                        $section_url = elsayed_get_node_url_by_id($section->nid);
                        $image = $GLOBALS['default_image'];
                        if (isset($section->field_image[LANGUAGE_NONE][0]['uri'])) {
                            $image = image_style_url('medium', $section->field_image[LANGUAGE_NONE][0]['uri']);
                        }
                        ?>
                        <div class="col-sm-6">
                            <!-- MENU THUMB -->
                            <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                                <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $section_title; ?>">
                                <div class="team-hover">
                                    <div class="team-item">
                                        <h4><?php echo __('Check Our') . ' ' . $section_title; ?></h4>
                                        <ul class="social-icon">
                                            <li><a href="<?php echo $section_url; ?>" class="fa fa-eye"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info text-center">
                                <h3><a href="<?php echo $section_url; ?>"><?php echo $section_title; ?></a></h3>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
<?php } ?>