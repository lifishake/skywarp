<?php
/**
 * 用来搜索框
 *
 * @package WordPress
 * @subpackage SkyWarp
 * @since SkyWarp 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo '搜索'; ?></span>
		<input type="search" class="search-field" placeholder="搜索一下，兴许有惊喜" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo '提交' ; ?></span></button>
</form>
