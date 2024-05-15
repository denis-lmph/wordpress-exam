<div class="content-wrapper">
    <div class="content">
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <?php the_content();?>
        <?php endwhile; // end of the loop. ?>
    </div>    
</div>