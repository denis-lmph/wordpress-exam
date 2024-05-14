<?php

if (get_field('sbm_theme_options_embed_superheader_content_show', 'option')):

if (get_field('sbm_theme_options_embed_superheader_content', 'option')) :
?>
<div class="header__alert">
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <i class="fad fa-bolt"></i>
        <?= the_field('sbm_theme_options_embed_superheader_content', 'option'); ?>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<div class="container-fluid">
    <div class="nav-banner">
        <div class="contact-details d-flex justify-content-end">
            <div class="contact">
                <a href="">Contact Us</a>
            </div>
            <div class="contact">
                <a href="">Locations</a>
            </div>
            <div class="contact">
                <a href="">03 9801 1622</a>
            </div>

        </div>
    </div>
</div>
<?php
endif;
endif;
?>