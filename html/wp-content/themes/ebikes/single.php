<?php
get_header();

$headerImage = get_template_directory_uri() . '/assets/images/knox-shopping-centre.png';
$chevron = get_template_directory_uri() . '/assets/images/right-chevron-gold.png';
$facebookIcon = get_template_directory_uri() . '/assets/images/Facebook.png';
$twitterIcon = get_template_directory_uri() . '/assets/images/Twitter.png';
$linkedInIcon = get_template_directory_uri() . '/assets/images/Linkedin.png';

if (have_posts()):

	$title		  	 = get_field('post_title');
	$bannerImage  	 = get_field('post_image');
	$location 	  	 = get_field('post_location');
	$preview_text 	 = get_field('post_preview-text');
	$blog_page_id 	 = get_option( 'page_for_posts' );
	$blog_page_title = get_the_title( $blog_page_id );

	global $post;
	$blocks = parse_blocks($post->post_content);
	?>
	<section class="post-page">
		<section class="header-default" style="background-image: url('<?php echo $headerImage ?>')">
			<div class="content">
				<div class="title-wrapper">
					<h1><?= $blog_page_title ?></h1>
				</div>
			</div>
		</section>
		<div class="content">
			<?php while (have_posts()):
				the_post(); ?>

				<div class="breadcrumbs">
                    
					<a href="" class="post-link"><?= $blog_page_title ?></a>
					<img src="<?= $chevron ?>" alt="right arrow" class="chevron">
					<!-- <span class="current-case-study"><?php the_title() ?></span> -->
					<h2 class="current-case-study"><?php the_title() ?></h2>
				</div>

				<article>
					<div class="date-socials-wrapper">
						<div class="post-date">
							<?php $post_date = get_the_date('F d, Y');
							echo $post_date; ?>
						</div>
						<div class="socials-wrapper">
							<a href="/" class="share-link">Share</a>
							<a href="/" class="social-link">
								<img src="<?= $facebookIcon ?>" alt="Facebook logo" class="social-icon">
							</a>
							<a href="/" class="social-link">
								<img src="<?= $twitterIcon ?>" alt="Twitter logo" class="social-icon">
							</a>
							<a href="/" class="social-link">
								<img src="<?= $linkedInIcon ?>" alt="LinkedIn logo" class="social-icon">
							</a>
						</div>
					</div>

					<h1 class="post-title">
						<?php the_title() ?>
					</h1>

					<?php if ( $preview_text ) : ?>
					<div class="post-preview-text">
						<p><?= $preview_text ?></p>
					</div>
					<?php endif; ?>

					<div class="banner-image-wrapper">
						<!-- <img src="<?= $bannerImage['url'] ?>" alt=""> -->
						<div class="post-bg-image" style="background-image: url('<?= $bannerImage['url'] ?>')"></div>
					</div>

					<div class="post-content">
						<?php foreach ($blocks as $block) {
							echo render_block($block);
						} ?>	
					</div>

					<div class="post-body">
						<div class="paragraphs-wrapper">
							<?php
							if (have_rows('post_paragraphs-repeater')):
								while (have_rows('post_paragraphs-repeater')):
									the_row();
									$icon = get_sub_field('icon');
									$subHeading = get_sub_field('post_subheading');
									$textContent = get_sub_field('post_text-content');
									?>
									<div class="paragraph-section">
										<div class="paragraph-header">
											<?php if ($icon): ?>
												<div class="icon-wrapper">
													<img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
												</div>
											<?php endif; ?>

											<?php if ($subHeading): ?>
												<h3>
													<?= $subHeading ?>
												</h3>
											<?php endif; ?>
										</div>

										<?php if ($textContent): ?>
											<div class="paragraph-body">
												<?= $textContent ?>
											</div>
										<?php endif; ?>
									</div>
								<?php
								endwhile;
							endif;
							?>
						</div>
					</div>
				</article>

				<?php

				$latest_articles_block = [
					'blockName' => 'acf/latestarticlesslider',
					'attrs' => [
						'id' => 'block_64332f657f61a',
						'name' => 'acf/latestarticlesslider',
						'data' => [
							'latest_articles_heading' => 'Latest Articles',
							'_latest_articles_heading' => 'field_639a799233435'
						],
						'align' => '',
						'mode' => 'preview'
					],
					'innerBlocks' => [],
					'innerHTML' => '',
					'innerContent' => []
				];

				echo render_block( $latest_articles_block ); ?>
				
			<?php endwhile; ?>
		</div>
	<?php
else:

	_e('Sorry, No posts matched your criteria.');

endif;

?>
</section>
<?php get_footer(); ?>