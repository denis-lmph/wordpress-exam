<?php
$term = get_queried_object();
$term_id = $term->term_id;
$description = $term->description;
$heading = $term->name;
$banner = get_field('banner_image', 'pa_brand_' . $term_id);
$logo = get_field('brand_logo', 'pa_brand_' . $term_id);
$sub_heading = get_field('brand_sub_heading', 'pa_brand_' . $term_id);
$video_file_mp4 = get_field('field_banner_mp4', 'product_cat_' . $term_id );
$video_file_webm = get_field('field_banner_webm', 'product_cat_' . $term_id );
?>

<section class="header-woocommerce-default section" style="background-image: url('<?php echo $banner['url'] ?>')">
    
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
                <img src="<?= $logo['url'] ?>" class="icon" />
            </div>
        <?php endif; ?>
        <?php if ($heading) : ?>
            <div class="header-woocommerce-default__heading-wrapper">
                <h1><?= $sub_heading ?></h1>
            </div>
        <?php endif; ?>
        <?php if ($description) : ?>
            <div class="header-woocommerce-default__description-wrapper">
                <p><?= $description ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>
