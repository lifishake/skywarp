<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $thumbnail_src = skywarp_get_thumbnail_str(); ?>
	<header class="entry-header" <?php if ($thumbnail_src) { echo 'style= " background-size:100% auto; background-position: 0% 0%; background-repeat:no-repeat; background-image:linear-gradient( to right,rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.85)), url('.$thumbnail_src.'"' ;} ?>>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
