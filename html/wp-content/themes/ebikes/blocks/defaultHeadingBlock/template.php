<?php
$subHeading = get_field('default-heading-block_subheading');
$heading = get_field('default-heading-block_heading');
$bodyText = get_field('default-heading-block_body-text');
$alignment = get_field('default-heading-block_text-alignment');
$extraSpacing = get_field('default-heading-block_extra-spacing');
$spacing = $extraSpacing ? 'heading-extra-margin' : 'standard-margin';
$bodyTextMaxWidth = get_field('default-heading-block_body-text-max-width');
$maxWidth = $bodyTextMaxWidth === 'default' ? 'default-width' : 'extra-width';
$backgroundColour = get_field('default-heading-block_background-colour');
?>

<section class="default-heading-block" style="background-color: <?= $backgroundColour ?>">
  <div class="content">
    <div class="text-wrapper <?= $alignment ?>">
      <?php if ($subHeading) : ?>
        <h2 class="block-subheading">
          <?= $subHeading ?>
        </h2>
      <?php endif; ?>

      <?php if ($heading) : ?>
        <h2 class="block-heading">
          <?= $heading ?>
        </h2>
      <?php endif; ?>

      <?php if ($bodyText) : ?>
        <p class="body-text <?= $spacing ?> <?= $maxWidth ?>">
          <?= $bodyText ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</section>