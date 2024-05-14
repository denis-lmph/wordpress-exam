<?php

/* Get Page values */
$_heading = get_field('heading');
$_product_category_columns = get_field('product_category_columns');
$_shop_link = get_field('shop_link');

/* Get Global values */

$heading_global = get_field('pcsb_option_heading', 'options');
$product_category_columns_global = get_field('pcsb_option_product_category_columns', 'options');
$shop_link_global = get_field('pcsb_option_shop_link', 'options');


$heading = $_heading ? $_heading : $heading_global ;
$product_category_columns = $_product_category_columns ? $_product_category_columns : $product_category_columns_global;
$shop_link = $_shop_link ? $_shop_link : $shop_link_global;

?>
<section class="product-category-showcase section">
  <div class="product-category-showcase__content content">
    <div class="row">
        <?php if ($heading) : ?>
          <div class="col-lg-6 col-md-6 col-sm-12">  
            <div class="product-category-showcase__heading-wrapper">
                <h2 class="product-category-showcase__heading"><?= $heading; ?></h2>
            </div>
          </div>     
        <?php endif; ?>
        <?php if ($shop_link) : ?>
          <div class="col-lg-6 col-md-6 col-sm-12">  
            <div class="product-category-showcase__shop-wrapper top">
                <a href="<?= $shop_link['url']; ?>" class="shop-link p-bold" ><?= $shop_link['title']; ?></a>
            </div>
          </div>     
        <?php endif; ?>    
    </div>

    <div class="row">
      <?php if ($product_category_columns ) :
            foreach ($product_category_columns  as $column) :
                $product_category_image = $column["product_category_image"];
                $product_category_title = $column["product_category_title"];
                $product_category_link = $column["product_category_link"];
            ?>
          <div class="col-lg-3 col-md-12 col-sm-12 product-category-showcase__item">
              <a href="<?= $product_category_link['url'] ?>">
                  <div class="product-category-showcase__item__container">
                  <?php if ($product_category_image) : ?>
                            <img class="product-category-showcase__item__images" src="<?= $product_category_image['url']; ?>" />
                  <?php endif; ?>    
                      <div class="product-category-showcase__item__content">
                          <p>Shop</p>
                          <h4 class="product-category-showcase__item__title"><?= $product_category_title ?></h4>
                      </div>
                  </div>
              </a>
          </div>
      <?php endforeach;
      endif; ?>
      <?php if ($shop_link) : ?>
          <div class="col-lg-12 col-md-12 col-sm-12">  
            <div class="product-category-showcase__shop-wrapper bottom">
                <a href="<?= $shop_link['url']; ?>" class="shop-link p-bold" ><?= $shop_link['title']; ?></a>
            </div>
          </div>     
      <?php endif; ?>    
    </div>

  </div>
</section>