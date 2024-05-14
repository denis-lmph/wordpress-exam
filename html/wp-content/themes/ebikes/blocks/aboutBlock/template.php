<?php


$heading = get_field('heading');
$subheading = get_field('subheading');
$description = get_field('description');
$button = get_field('button');
$background_image = get_field('background_image');
$banner_styles = "";

if ($background_image) {
  $banner_styles .= " background: url(" . $background_image['url'] . ")";
} else {
  $banner_styles .= " position:relative;";
}

?>

<section class="about-block section" style="<?php echo $banner_styles; ?>">
  <div class="about-block__content content">
    <div class="col-12 col-md-5 about-block__left-column">

    <?php if ($heading) : ?>
          <div class="about-block__heading-wrapper">
            <h2 class="about-block__heading"><?= $heading ?></h2>
          </div> 
        <?php endif; ?>

        <?php if ($subheading) : ?>
          <div class="about-block__sub-heading-wrapper">
            <h3 class="about-block__sub-heading"><?= $subheading ?></h3>
          </div>   
        <?php endif; ?>

        <?php if ($description) : ?>
          <div class="about-block__description-wrapper">
            <p class="about-block__description"><?= $description ?></p>
          </div>
        <?php endif; ?>

        <?php if ($button) : ?>
          <div class="about-block__button-wrapper">
            <a class="button button--white button--hover-gradient" href="<?= $button['url'] ?>"><?= $button['title'] ?></a>
          </div>  
        <?php endif; ?>

      
    </div>
    <div class="col-12 col-md-7 about-block__left-right">
          <!-- Empty Content -->
    </div>
  </div>
</section>