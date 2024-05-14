<?php
$title = get_field('home-header_title');
// $subHeading = get_field('home-header_subheading');
$buttonOne = get_field('home-header_button-one');
$buttonTwo = get_field('home-header_button-two');
$bannerImage = get_field('home-header_banner-image');
$bannerVideo = get_field('home-header_banner-video-text');

$bannerStyles = "";

if ($bannerImage) {
  $bannerStyles .= " background: linear-gradient(180deg, #0F232E -16.72%, #9BAAB9 20.91%, #FFFFFF 61.67%);";
} else {
  $bannerStyles .= " position:relative;";
}

?>

<section class="home-banner" style="<?php echo $bannerStyles; ?>">

  <div class="home-banner__content content">
    <div class="home-banner__image-wrapper">
      <img class="home-banner__image" src="<?= $bannerImage['url'] ?>">
    </div>
    <div class="home-banner__text-wrapper">
      <?php if ($title) : ?>
        <h1 class="home-banner__title">
          <?= $title ?>
        </h1>
      <?php endif; ?>
    </div>

    <div class="home-banner__button-wrapper">
      <?php if ($buttonOne) : ?>
        <a class="button button--dark-blue button--hover-gradient" href="<?= $buttonOne['url'] ?>">
          <?= $buttonOne['title'] ?>
        </a>
      <?php endif; ?>

      <?php if ($buttonTwo) : ?>
        <a class="button button--dark-blue button--hover-gradient" href="<?= $buttonTwo['url'] ?>">
          <?= $buttonTwo['title'] ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>
