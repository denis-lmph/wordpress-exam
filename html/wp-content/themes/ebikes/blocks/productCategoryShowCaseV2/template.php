<?php


$heading = get_field('heading');
$product_category_columns = get_field('product_category_columns');

?>
<section class="product-category-showcase-v2-section">
  <div class="content">
    <!-- <div class="row">
        <?php if ($heading) : ?>
          <div class="col-lg-3 col-md-3 col-sm-12">  
            <div class="heading-wrapper">
                <h2 class="heading"><?= $heading; ?></h2>
            </div>
          </div>     
        <?php endif; ?>
        <?php if ($shop_link) : ?>
          <div class="col-lg-3 col-md-3 col-sm-12">  
            <div class="shop-wrapper top">
                <a href="<?= $shop_link['url']; ?>" class="shop-link p-bold" ><?= $shop_link['title']; ?></a>
            </div>
          </div>     
        <?php endif; ?>    
    </div> -->

    <div class="row">
        <?php if(have_rows("product_category_columns")): ?>
        <?php while( have_rows('product_category_columns') ): the_row();
                $product_category_image = get_sub_field('product_category_image');
                $product_category_title = get_sub_field('product_category_title');
                $product_category_description = get_sub_field('product_category_description');
                $product_category_link = get_sub_field('product_category_link');
        ?>
        <div class="col-lg-4 col-md-4 col-sm-12 product-cat-card-item">
          
            <div class="product-cat-card-item-wrapper">
              <img class="product-cat-card-images" src="<?= $product_category_image['url'];?>" />
              <div class="product-cat-card-item-content">
          
                  <h4 class="product-cat-card-title"><?= $product_category_title ?></h4>
                  <p class="product-cat-card-description"><?=  $product_category_description ?></p>
                  <div class="button-wrapper">
                    <a class="button button--dark-blue btn-browse button--hover-gradient" href="/<?= $product_category_link['url']?>">Browse</a>
                  </div>  


              </div>
            </div>

        </div> 
      <?php endwhile; ?>
      <?php endif; ?>
      
    </div>

  </div>
</section>