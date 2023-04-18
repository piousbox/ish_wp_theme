<?
/*
 * Displays the footer widget area.
 *
**/

if ( is_active_sidebar( 'widget-footer-1' ) ) : ?>

	<aside class="widget-area">
		<? dynamic_sidebar( 'widget-footer-1' ); ?>
	</aside>

	<?
endif;
