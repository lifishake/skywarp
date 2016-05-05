<?php
/**
 * 用来显示归档页。包括Category，Tag和时间归档。
 *
 * @package WordPress
 * @subpackage SkyWarp
 * @since SkyWarp 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <?php
            
            // Start the Loop.
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', get_post_format() );

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => '前页',
                'next_text'          => '后页',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . '页' . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
