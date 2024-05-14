<?php

$heading = get_field('heading');
$subheading = get_field('subheading');
$description = get_field('description');

?>

<section class="find-me-a-bike section">

  <div class="content">
    <div class="col-12 col-md-6 find-me-a-bike__left-column">

        <?php if ($heading) : ?>
          <div class="find-me-a-bike__heading-wrapper">
            <h2 class="heading"><?= $heading ?></h2>
          </div> 
        <?php endif; ?>

        <?php if ($subheading) : ?>
          <div class="find-me-a-bike__sub-heading-wrapper">
            <h3 class="find-me-a-bike__sub-heading"><?= $subheading ?></h3>
          </div>   
        <?php endif; ?>

        <?php if ($description) : ?>
          <div class="find-me-a-bike__description-wrapper">
            <p class="find-me-a-bike__description"><?= $description ?></p>
          </div>
        <?php endif; ?>
    </div>
    <div class="col-12 col-md-6 find-me-a-bike__left-right">
          <!-- Empty Content -->
    </div>
  </div>
</section>