<div class="header-contact">
    <div class="container-fluid">
        <div class="header-contact-wrapper d-flex justify-content-end">
            <?php
		if (get_field('sbm_theme_options_contact_email', 'option')) :
		?>
            <a href="mailto:<?php the_field('sbm_theme_options_contact_email', 'option'); ?>" class="me-3">
                <?php the_field('sbm_theme_options_contact_email', 'option'); ?>
            </a>

            <?php endif; ?>
            <?php

        // contact link 
        if (get_field('sbm_theme_options_header_contact_link', 'option')) :
            ?>
            <a href="<?php the_field('sbm_theme_options_header_contact_link', 'option'); ?>" class="me-3">
                Contact
            </a>
            <?php endif;
        // end contact link   
        // header location link 
        if (get_field('sbm_theme_options_header_locations_link', 'option')) :
            ?>
            <a href="<?php the_field('sbm_theme_options_header_locations_link', 'option'); ?>" class="me-3">
                <img src="/wp-content/themes/ebikes/assets/images/location.png" alt="">Locations
            </a>
            <?php endif;
        // end header location link     
        // header phone link 
        if (get_field('sbm_theme_options_contact_phone', 'option')) :
		?>
            <a href="tel:<?php the_field('sbm_theme_options_contact_phone', 'option'); ?>" class="me-3">
                <img src="/wp-content/themes/ebikes/assets/images/phone.png"
                    alt=""><?php the_field('sbm_theme_options_contact_phone', 'option'); ?>
            </a>
            <?php endif;
            // end header phone link 



		if (have_rows('sbm_theme_options_contact_social_icons_repeater', 'option')) :
		?>
            <ul class="social_media_icon me-3 d-inline">
                <?php
				while (have_rows('sbm_theme_options_contact_social_icons_repeater', 'option')) : the_row();
				?>
                <li class="me-1"><a
                        href="<?php the_sub_field('sbm_theme_options_contact_social_icons_repeater_url', 'option'); ?>"
                        title="<?php the_sub_field('sbm_theme_options_contact_social_icons_repeater_name'); ?>"
                        target="_blank"><i
                            class="<?php the_sub_field('sbm_theme_options_contact_social_icons_repeater_icon'); ?>"></i></a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php
		endif;
		?>
        </div>

    </div>

</div>