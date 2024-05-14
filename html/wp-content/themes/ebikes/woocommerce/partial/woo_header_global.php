<?php
    
$heading = get_field('gpcb_option_heading', 'options');
$sub_heading = get_field('gpcb_option_sub_heading', 'options');
$description = get_field('gpcb_option_description', 'options');
$logo = get_field('gpcb_option_logo', 'options');
$banner = get_field('gpcb_option_banner_image', 'options');
$insert_classes = "product-icon";
$video_file_mp4 = get_field('gpcb_option_banner_mp4',  'options');
$video_file_webm = get_field('gpcb_option_banner_webm',  'options');
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
                <source src="<?=$video_file_webm['url']?>"  type='video/webm; codecs="vp8.0, vorbis"'>
            <?php endif; ?>  
            Your browser does not support HTML5 video.
        </video>
    <?php endif; ?>   

    <div class="header-woocommerce-default__content content">
        <?php if ($logo) : ?>
            <div class="header-woocommerce-default__icon-wrapper">
                <img src="<?= $logo['url'] ?>" class="icon <?= $insert_classes ?>" />
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
