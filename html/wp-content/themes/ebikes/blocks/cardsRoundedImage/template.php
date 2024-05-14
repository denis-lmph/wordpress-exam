<?php


$heading = get_field('cards_heading');
$subheading = get_field('cards_columns');

?>
<section class="cards-rounded-image section">
  <div class="cards-rounded-image__content content">
    <div class="row">
        <?php if ($heading) : ?>
          <div class="cards-rounded-image__heading-wrapper">
              <h2 class="cards-rounded-image__heading"><?= $heading; ?></h2>
          </div>
        <?php endif; ?>
        <?php if(have_rows("cards_columns")): ?>
        <?php while( have_rows('cards_columns') ): the_row();
                $card_image = get_sub_field('card_image');
                $card_title = get_sub_field('card_title');
                $card_sub_title = get_sub_field('card_sub_title');
                $card_description = get_sub_field('card_description');
        ?>
        <div class="col-lg-4 col-md-4 col-sm-12 card-item">
          <div class="card-item__content">
              <img class="card-item__images img-round" src="<?= $card_image['url'];?>" />
              <h3 class="card-item__title"><?= $card_title ?></h3>
              <h4 class="card-item__sub-title"><?= $card_sub_title ?></h4>
              <p class="card-item__description"><?= $card_description ?></p>
          </div>  
        </div> 
      <?php endwhile; ?>
      <?php endif; ?>               
    </div>
  </div>
</section>