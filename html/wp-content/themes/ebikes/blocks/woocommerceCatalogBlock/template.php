<?php


$heading = get_field('heading');
$icon = get_field('icon_content');

?>
<section class="woocommerce-catalog-carousel">
  <div class="woocommerce-catalog-carousel__content content">
    <div class="row">
        <div class="col-12 col-md-8 left-column">

        <?php if ($icon) : ?>
          <div class="woocommerce-catalog-carousel__icon-wrapper">
              <img src="<?= $icon['url'] ?>" class="icon" />
          </div>
        <?php endif; ?>

          <?php if ($heading) : ?>
              <div class="woocommerce-catalog-carousel__heading-wrapper">
                  <h2 class="heading"><?= $heading; ?></h2>
              </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-4 woocommerce-catalog-carousel__left-column">
            <?php echo do_shortcode('[wpf-filters id=2]');?>
        </div>
    <div class="product-carousel-wrapper"> 
        <!-- <?php echo do_shortcode('[products per_page="3" paginate="true" columns="3" orderby="default"]') ?> -->

     <?php echo do_shortcode('[custom_product_carousel limit="10"]') ?> 
    </div>

  </div>
</section>