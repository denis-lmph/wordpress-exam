<?php

$term = get_queried_object();
$term_id = $term->term_id;
$heading = $term->name;
$sub_heading = get_field('sub_heading',  'product_cat_' . $term_id );
$description = $term->description;
$logo = get_field('logo',  'product_cat_' . $term_id );
$banner = get_field('banner_image', 'product_cat_' . $term_id );
$video_file_mp4 = get_field('video_file_mp4', 'product_cat_' . $term_id );
$video_file_webm = get_field('video_file_webm', 'product_cat_' . $term_id );
$insert_classes = "product-icon";

?>

<section class="header-woocommerce-default" style="background-image: url('<?php echo $banner['url'] ?>')">

    <div class="header-woocommerce-default__background-overlay">
        <!-- Video background -->
    </div>
    <?php if ($video_file_mp4 || $video_file_webm)  : ?>
        <video playsinline autoplay muted loop class="header-woocommerce-default__video-background">
            <?php if ($video_file_mp4) : ?>
                <source src="<?=$video_file_mp4['url']?>" type="video/mp4">
            <?php endif; ?>   
            <?php if ($video_file_webm) : ?>
                <source src="<?=$video_file_webm['url']?>" type='video/webm; codecs="vp8.0, vorbis"'>
            <?php endif; ?>  
            Your browser does not support HTML5 video.
        </video>
    <?php endif; ?>   

    <div class="header-woocommerce-default__content content">
        <?php if ($logo) : ?>
            <div class="header-woocommerce-default__icon-wrapper">
                <img src="<?= $logo['url'] ?>" class="icon <?= $insert_classes  ?>" />
            </div> 
        <?php endif; ?>
        <?php if ($heading) : ?>
            <div class="header-woocommerce-default__heading-wrapper">
                <h1 class="heading-1"><?= $heading ?></h1>
            </div> 
        <?php endif; ?>
        <?php if ($sub_heading) : ?>
            <div class="header-woocommerce-default__sub-heading-wrapper">
                <h2><?= $sub_heading ?></h2>
            </div> 
        <?php endif; ?>
        <?php if ($description) : ?>
            <div class="header-woocommerce-default__description-wrapper">
                <p><?= $description ?></p>
            </div> 
        <?php endif; ?>
    </div>
</section>