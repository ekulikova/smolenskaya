<?php
/**
 * Template part for displaying posts.
 *
 * @package Nisarg
 */

?>

<article id="post-<?php the_ID(); ?>"  <?php post_class( 'post-content' ); ?>>

	<?php
	if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'nisarg' ) );
	} ?>

	<!--<?php nisarg_featured_image_disaplay(); ?>-->

	<header class="entry-header">

		<span class="screen-reader-text"><?php the_title();?></span>

		<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
		<?php endif; // is_single() ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<h5 class="entry-date"><?php nisarg_posted_on(); ?></h5>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

<?php if ( 'gallery' == get_post_format() ) : ?>

		<?php nisarg_featured_image_disaplay(); ?>

		<div class="entry-summary">
			<p class="read-more">
					<a class="btn btn-default" href="<?php the_permalink(); ?>">
						Еще фотографии
						<span class="screen-reader-text"> Еще фотографии</span>
					</a>
			</p>
		</div><!-- .entry-summary -->

<?php else:  ?>

	<div class="entry-summary">

		<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
		 } ?>

		<?php the_excerpt(); ?>
		<p class="read-more">
				<a class="btn btn-default" href="<?php the_permalink(); ?>">
					Подробнее
					<span class="screen-reader-text"> Подробнее</span>
				</a>
		</p>
	</div><!-- .entry-summary -->

<?php endif; ?>

	<footer class="entry-footer">
		<?php nisarg_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
