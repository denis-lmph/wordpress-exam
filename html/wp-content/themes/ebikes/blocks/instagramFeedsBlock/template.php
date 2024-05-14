<?php


$instagram_heading = get_field('instagram_heading');
$feeds_short_code = get_field('feeds_short_code');

?>
<section class="instagram-feeds-block-section">
  <div class="content">
    <div class="row">
        <?php if ($instagram_heading) : ?>
          <div class="heading-wrapper">
              <h2 class="heading"><?= $instagram_heading; ?></h2>
          </div>
        <div class="social-feeds">
            <?php echo $feeds_short_code ?>
        </div>
        <?php endif; ?>           
    </div>
  </div>
</section>