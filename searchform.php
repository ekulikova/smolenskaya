<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package Nisarg
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Поиск:', 'label', 'nisarg' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Поиск &hellip;', 'placeholder', 'nisarg' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Поиск:', 'label', 'nisarg' ); ?>" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Поиск', 'submit button', 'nisarg' ); ?></span></button>
</form>
