<?php


$heading = get_field('heading');
$subheading = get_field('subheading');
$description = get_field('description');
$button = get_field('button');
$icon = get_field('icon_content');
$background_image = get_field('background_image');
$gradient_pattern = get_field('gradient_pattern');

$gradient_styles = "";

switch ($gradient_pattern) {
  case "Green":
    $gradient_styles = "background:linear-gradient(265.57deg, #04FF87 -16.4%, #0F232E 84.69%);";
    break;
  case "Red":
    $gradient_styles = "background:linear-gradient(90.19deg, #0F232E -8.03%, #620F18 79.51%);";
    break;
  case "None":
    $gradient_styles = "";
    break;
  default:
     $gradient_styles = "";
}


?>

<section class="left-content-with-image-and-gradient section" style="<?= $gradient_styles ?>");">
  <div class="left-content-with-image-and-gradient__image-overlay" style="background-image:url('<?= $background_image['url'] ?>');">
  </div>
  <div class="left-content-with-image-and-gradient__content content">
    <div class="col-12 col-md-6 left-content-with-image-and-gradient__left-column">
        <?php if ($icon) : ?>
          <div class="left-content-with-image-and-gradient__icon-wrapper">
              <img src="<?= $icon['url'] ?>" class="icon" />
          </div>
        <?php endif; ?>

        <?php if ($heading) : ?>
          <div class="left-content-with-image-and-gradient__heading-wrapper">
            <h2 class="heading"><?= $heading ?></h2>
          </div> 
        <?php endif; ?>

        <?php if ($subheading) : ?>
          <div class="left-content-with-image-and-gradient__sub-heading-wrapper">
            <h3 class="left-content-with-image-and-gradient__sub-heading"><?= $subheading ?></h3>
          </div>   
        <?php endif; ?>

        <?php if ($description) : ?>
          <div class="left-content-with-image-and-gradient__description-wrapper">
            <p class="left-content-with-image-and-gradient__description"><?= $description ?></p>
          </div>
        <?php endif; ?>

        <?php if ($button) : ?>
          <div class="left-content-with-image-and-gradient__button-wrapper">
            <a class="button button--white button--hover-gradient" href="<?= $button['url'] ?>"><?= $button['title'] ?></a>
          </div>  
        <?php endif; ?>
        
    </div>
    <div class="col-12 col-md-6 left-content-with-image-and-gradient__left-right">
          <!-- Empty Content -->
    </div>
  </div>
</section>