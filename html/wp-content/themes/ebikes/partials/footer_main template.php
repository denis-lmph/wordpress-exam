<!-- FOOTER SECTION -->

<div class="footer-section">
    <div class="footer-logo">
        <img src="<?php the_field('sbm_theme_options_footer1_image1', 'option');?>" alt="">
    </div>
    <!-- footer links  -->
    <div class="footer-links">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer1") ) : ?>
        <?php endif;?>
    </div>
    <!-- end footer links  -->

</div>
<!-- end footer section  -->