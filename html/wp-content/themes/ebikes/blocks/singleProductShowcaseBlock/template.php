<?php


$heading = get_field('heading');
$subheading = get_field('subheading');
$description = get_field('description');
$button = get_field('product');
$icon = get_field('icon_content');
$background_image = get_field('background_image');
$gradient_pattern = get_field('gradient_pattern');
$product_obj = get_field('product');
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

<section class="single-product-showcase section" style="<?= $gradient_styles ?>");">
  <div class="single-product-showcase__image-overlay" style="background-image:url('<?= $background_image['url'] ?>');">
  </div>
  <div class="single-product-showcase__content content">
    <div class="col-12 col-md-6 single-product-showcase__left-column">
        <?php if ($icon) : ?>
          <div class="single-product-showcase__icon-wrapper">
              <img src="<?= $icon['url'] ?>" class="icon" />
          </div>
        <?php endif; ?>

        <?php if ($heading) : ?>
          <div class="single-product-showcase__heading-wrapper">
            <h2 class="single-product-showcase__heading"><?= $heading ?></h2>
          </div> 
        <?php endif; ?>

        <?php if ($subheading) : ?>
          <div class="single-product-showcase__sub-heading-wrapper">
            <h3 class="single-product-showcase__sub-heading"><?= $subheading ?></h3>
          </div>   
        <?php endif; ?>

        <?php if ($description) : ?>
          <div class="single-product-showcase__description-wrapper single-product-showcase__specs-wrapper">
              <?= $description ?>
          </div>
        <?php endif; ?>
        <?php if ($background_image) : ?>
          <div class="single-product-showcase__product-image-wrapper" style="background-image:url('<?= $background_image['url'] ?>');">
        
          </div>
        <?php endif; ?>
        <?php if ($button) : ?>
          <div class="single-product-showcase__button-wrapper">
            <a class="button button--white button--hover-gradient" href="/<?= $product_obj->post_name?>">Read More</a>
          </div>  
        <?php endif; ?>

        <?php if ($button) : ?>
          <div class="single-product-showcase__button-wrapper add-cart-button-wrapper">
            <a class="button button--white button--hover-gradient"  href="/<?= $product_obj->post_name?>">Add to cart</a>
          </div>  
        <?php endif; ?>
    </div>
    <div class="col-12 col-md-6 single-product-showcase__left-right">
          <!-- Empty Content -->
    </div>
  </div>
</section>