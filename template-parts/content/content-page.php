<?
/**
 * Template part for displaying page content in page.php
 *
**/

?>

<article id="post-<? the_ID(); ?>" <? post_class(); ?>>

	<? if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<? get_template_part( 'template-parts/header/entry-header' ); ?>
			<? twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<? elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<? twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<? endif; ?>

	<div class="entry-content">
		<?
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<? if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<? endif; ?>
</article><!-- #post-<? the_ID(); ?> -->
