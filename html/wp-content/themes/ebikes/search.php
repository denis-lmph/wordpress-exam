<?php get_header(); ?>

<div id="primary" class="content">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'your-theme-textdomain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p><?php esc_html_e( 'No results found.', 'your-theme-textdomain' ); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>
