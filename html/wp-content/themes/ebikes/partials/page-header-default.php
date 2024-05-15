<?php
    
    
$heading = get_the_title();
$logo = get_field('gpcb_option_logo', 'options');
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$global_banner = get_field('gpcb_option_banner_image', 'options');
$bg_img  = $featured_image_url  ? $featured_image_url  : $global_banner['url'] ;
$insert_classes = "product-icon";
?>

<section class="page-header-default section" style="background-image: url('<?php echo $bg_img ?>')">
    <div class="page-header-default__background-overlay"></div>
    <div class="page-header-default__content content">
        <?php if ($logo) : ?>
            <div class="page-header-default__icon-wrapper">
                <img src="<?= $logo['url'] ?>" class="icon <?= $insert_classes ?>" />
            </div>
        <?php endif; ?>
        <?php if ($heading) : ?>
            <div class="page-header-default__heading-wrapper">
                <h1 class="heading-1"><?= $heading ?></h1>
            </div>
        <?php endif; ?>
    </div>
</section>