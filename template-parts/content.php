<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stonegate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<div class="row">
	<div class="col-sm-6">
		<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
?>
	
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'stonegate' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

	
		?>
	</div><!-- .entry-content -->
	<?php ?>
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				stonegate_posted_on();
				stonegate_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div>
</div>
	<div class="col-sm-6">
	<?php stonegate_post_thumbnail(); ?>
</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
