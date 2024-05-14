<?php 
	/* Template Name: Blog */ 
?>

<?php 	get_header(); 
if ( have_posts() ) : ?>
<div class="content-wrapper">
    <?php	while ( have_posts() ) : the_post(); ?>
    <?php the_content();				
		endwhile; ?>
</div>
<?php endif;?>
<div class="blog-wrapper">
    <div class="container-lg py-5">
        <h2 class="py-5">Stories</h2>
        <div id="ajax-posts" class="row">
            <?php $blog_query = new WP_Query( array ( 
				'post_type' => 'post',
				'posts_per_page' => '9', 
				'orderby' => 'post_date', 
				 ) 
			); ?>
            <?php 
	if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <div class="col-12 col-sm-6 col-md-4 py-4 d-flex">
                <a href="<?php echo get_permalink( $post->ID ); ?>">
                    <div class="blog-post-wrapper">
                        <div class="postimage">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                        <div class="posttext">
                            <p class="posttitle py-3"><?php the_title(); ?></p>
                            <?php the_excerpt(); ?>
                            <p class="postreadmore">Read more</p>
                        </div>
                    </div>
                </a>
            </div>

            <?php endwhile; 
        else: endif;  ?>
        </div>
        <?php if(wp_count_posts()->publish > 9){ ?>
        <div id="more_posts" class="ebikesbtn-primary green">Load More</div>
        <?php } ?>
    </div>
</div>
<section class="footer-cta py-5 blue">
    <div class="container-lg">
        <div class="row">
            <div class="col-12 col-lg-9">
                <p class="singleline">Ready to go? Let’s get started!</p>
            </div>
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-lg-end">
                <a class="ebikesbtn-primary green" href="/">Start now</a>
            </div>
        </div>
    </div>
</section>
<?php 
get_footer();?>