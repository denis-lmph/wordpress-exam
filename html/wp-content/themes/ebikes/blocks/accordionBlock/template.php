<?php 
    $accordionName = get_field('heading');
?>

<section class="accordion-block">
    <div class="content">
        <?php if ($accordionName) : ?>
        <div class="heading-wrapper">
            <h2 class="heading"><?=  $accordionName ?></h2>
        </div> 
        <?php endif; ?>
        <div class="accordion" id="<?php echo $accordionName ?>">
            <!-- start accordion-item  -->
            <?php if(have_rows("accordion_repeater")): ?>
            <?php while( have_rows('accordion_repeater') ): the_row();
                            $accordionButton = get_sub_field('accordion_button');
                            $accordionContent = get_sub_field('accordion_content');
                            ?>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#<?php echo $accordionName ?><?php echo get_row_index(); ?>" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <?php echo $accordionButton ?>
                    </button>
                </h4>
                <div id="<?php echo $accordionName ?><?php echo get_row_index(); ?>" class="accordion-collapse collapse"
                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php echo $accordionContent ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- end accordion-item  -->
        </div>
    </div>
</section>