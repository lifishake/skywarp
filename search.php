<?php
/**
 * 用来表示搜索结果
 *
 * @package WordPress
 * @subpackage skywarp
 * @since skywarp 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( '搜索结果:%s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );

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
	</section><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
