<!-- FOOTER SECTION -->

<div class="footer-section">
    <div class="container">

        <!-- FOOTER TOP ROW -->

        <div class="row">

            <div class="col-12 col-md-4 col-12 col-sm-12">
                <div class="footer-widget">
                    <div class="footer-widget-logo">
                        <img src="<?php the_field('sbm_theme_options_footer1_image1', 'option');?>" alt="">
                    </div>
                </div>  
            </div>

            <div class="col-12 col-md-4 col-12 col-sm-12">
   
            </div>

            <div class="col-12 col-md-4 col-12 col-sm-12 m-order-8">
                <div class="footer-widget">
                    <div class="footer-widget__social-icons">
                        <ul class="footer-social-links">
                            <?php
                            $facebook = get_field('sbm_theme_options_footer_contact_facebook', 'option');
                            $linkedin = get_field('sbm_theme_options_footer_contact_linkedin', 'option');
                            $instagram = get_field('sbm_theme_options_footer_contact_instagram', 'option');

                            $facebookIcon = get_template_directory_uri() . '/assets/images/icon-facebook.svg';
                            $linkedInIcon = get_template_directory_uri() . '/assets/images/icon-linkedin.svg';
                            $instagramIcon = get_template_directory_uri() . '/assets/images/icon-instagram.svg';
                            ?>

                            <?php if ($facebook): ?>
                                <li class="footer-social-links__item">
                                    <a href="<?= $facebook['url']; ?>" title="Facebook" target="_blank">
                                        <img class="footer-social-links__icon" src="<?= $facebookIcon; ?>" alt="Facebook" />
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($linkedin): ?>
                                <li class="footer-social-links__item">
                                    <a href="<?= $linkedin['url']; ?>" title="LinkedIn" target="_blank">
                                        <img class="footer-social-links__icon" src="<?= $linkedInIcon; ?>" alt="LinkedIn" />
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($instagram): ?>
                                <li class="footer-social-links__item">
                                    <a href="<?= $instagram['url']; ?>" title="Instagram" target="_blank">
                                        <img class="footer-social-links__icon" src="<?= $instagramIcon; ?>" alt="Instagram" />
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-12 col-sm-12">
                <div class="footer-widget">
                    <div class="footer-widget-form">
                        <?php $gf_id = get_field('sbm_theme_options_footer_gravity_forms_id', 'option');
                        echo do_shortcode("[gravityform id='$gf_id' title='false' description='false' ajax='true' ]") ?>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-12 col-sm-12">
                <div class="footer-widget">
                    <div class="footer-widget-quick-links">
                        <div class="footer-widget-quick-links__content">
                            <h4 class="footer-widget-quick-links__heading">QUICK LINKS</h4>
                            <?php if (have_rows("sbm_theme_options_footer_quick_links", "option")): ?>
                                <ul class="footer-widget-quick-links__list">
                                    <?php 
                                    while (have_rows("sbm_theme_options_footer_quick_links", "option")): the_row();
                                        $footer_quick_links = get_sub_field("sbm_theme_options_footer_quick_link_item");
                                        $target = "";
                                        if ($footer_quick_links["target"]) {
                                            $target = $footer_quick_links["target"];
                                        }
                                    ?>
                                    <li class="footer-widget-quick-links__item">
                                        <a href="<?php echo esc_url($footer_quick_links["url"]); ?>"
                                            title="<?php echo esc_attr($footer_quick_links["title"]); ?>"
                                            target="<?php echo $target; ?>">
                                            <?php echo $footer_quick_links["title"]; ?>
                                        </a>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-12 col-sm-12">
                <div class="footer-widget">
                    <div class="footer-widget-contact-details">
                        <div class="footer-widget-contact-details__content">
                            <h4 class="footer-widget-contact-details__heading">CONTACT</h4>
                            <p class="footer-widget-contact-details__detail"><a href="tel:<?php the_field('sbm_theme_options_footer_contact_phone', 'option'); ?>"><?php the_field('sbm_theme_options_footer_contact_phone', 'option'); ?><a></p>
                            <p class="footer-widget-contact-details__detail"><a href="mailto:<?php the_field('sbm_theme_options_footer_contact_email', 'option'); ?>"><?php the_field('sbm_theme_options_footer_contact_email', 'option'); ?></a></p>
                            <p class="footer-widget-contact-details__detail"><?php the_field('sbm_theme_options_footer_contact_address', 'option'); ?></p>
                        </div>
                    </div>
                <div>
            </div>
        </div>



    </div>


    <!-- footer links  -->
    <!-- <div class="footer-links">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer1") ) : ?>
        <?php endif;?>
    </div> -->
    <!-- end footer links  -->

    <!-- <div class="lower-footer text-center m-0">
        <div class="row">
            <div class="col-12 col-md-6 lower-footer-left">
                <div class="tnc"><?php the_field('sbm_theme_options_footer_tc', 'option');?></div>
                <div class="privacy"><?php the_field('sbm_theme_options_privacy', 'option');?></div>
            </div>
            <div class="col-12 col-md-6 lower-footer-right">
                <?php the_field('sbm_theme_options_footer1_copyright', 'option');?>
            </div>
        </div>
    </div> -->
</div>
<!-- end footer section  -->

<!-- FOOTER NAV SECTION -->

<!-- </script> -->

<!-- <div class="div">

</div> -->