<?php
/*
Template Name: Box Container Page Template
*/

// This is a box container page template
get_header();

	if ( have_posts() ) : ?>
<div class="content-wrapper box-container">
    <div class="content">
        <?php	while ( have_posts() ) : the_post(); ?>

        <?php the_content();
                    
            endwhile; ?>

    </div>   
</div>
<?php 
	else :

		_e( 'Sorry, No posts matched your criteria.');

	endif;

get_footer();
	?>