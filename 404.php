<?php
/**
 * 用来表示404页
 *
 * @package WordPress
 * @subpackage SkyWarp
 * @since SkyWarp 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo('出错了!') ; ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo('没找到内容。试试搜索吧！'); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
