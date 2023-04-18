<?
/**
 * The template for displaying all single posts
 *
**/

get_header();


the_post();
get_template_part( 'template-parts/content/content-page' );


if ( is_active_sidebar( 'widget-markers-1' ) ) : ?>
	<aside class="widget-area">
		<? dynamic_sidebar( 'widget-markers-1' ); ?>
	</aside>
<? endif;


if ( comments_open() || get_comments_number() ) {
  comments_template();
}

get_footer();
