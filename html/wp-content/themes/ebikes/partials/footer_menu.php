<div class="footer-wrapper">
    <div class="container-lg">
        <div class="row text-center text-sm-start">
            <div class="col-12 col-sm-6 mb-sm-0 mb-4">
                <?php if (get_field("sbm_theme_options_footer1_image1", "option")): ?>
                <div class="footer-logo mb-4">
                    <img src="<?php echo esc_url(  the_field("sbm_theme_options_footer1_image1", "option")  ); ?>"
                        alt="<?php echo esc_attr("We Do Logo"); ?>" />
                </div>
                <?php endif; ?>
                <?php if (get_field("sbm_theme_options_footer1_detail1", "option")) { ?>
                <div class="footer-section-content">
                    <?php the_field("sbm_theme_options_footer1_detail1", "option"); ?>
                </div>
                <?php } ?>
                <p class="copyright mt-4">© WeDo <script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                    </script>
                </p>
            </div>

            <div class="col-12 text-sm-end col-sm-6 mb-sm-0 mb-4">

                <div class="footer-contact pt-2">
                    <?php
							if (get_field('sbm_theme_options_contact_phone', 'option')) :
						?>
                    <p class="footer-phone"><a
                            href="tel:<?= the_field('sbm_theme_options_contact_phone', 'option'); ?>">
                            <?= the_field('sbm_theme_options_contact_phone', 'option'); ?>
                        </a></p>
                    <?php endif;?>
                    <?php 
                    if (have_rows('sbm_theme_options_contact_social_icons_repeater', 'option')) :
                        ?>
                    <ul class="footer-social-links d-inline">
                        <?php while (have_rows('sbm_theme_options_contact_social_icons_repeater', 'option')) : the_row(); ?>
                        <li class="ms-3">
                            <a href="<?= the_sub_field('sbm_theme_options_contact_social_icons_repeater_url', 'option'); ?>"
                                title="<?= the_sub_field('sbm_theme_options_contact_social_icons_repeater_name'); ?>"
                                target="_blank"><i
                                    class="<?= the_sub_field('sbm_theme_options_contact_social_icons_repeater_icon'); ?>"></i>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <div class="footer-quick-links">
                        <?php if (have_rows("sbm_theme_options_footer_qlinks", "option")): ?>

                        <ul>
                            <?php while (have_rows("sbm_theme_options_footer_qlinks", "option")):    the_row();
			        $footer_quick_links = get_sub_field("sbm_theme_options_q_link");
			        $target = "";
			        if ($footer_quick_links["target"]) {
			            $target = $footer_quick_links["target"];
			        }
			        ?>
                            <li>
                                <a href="<?php echo esc_url(       $footer_quick_links["url"]    ); ?>"
                                    title="<?php echo esc_attr( $footer_quick_links["title"]); ?>"
                                    target="<?php echo $target; ?>"> <?php echo $footer_quick_links[ "title"]; ?>
                                </a>
                            </li>
                            <?php    endwhile; ?>
                        </ul>
                        <?php endif; ?>

                    </div>
                    <p class="copyright"><?php echo get_field('sbm_theme_options_footer2_text', 'option') ?></p>
                </div>
            </div>
        </div>
    </div>
</div>