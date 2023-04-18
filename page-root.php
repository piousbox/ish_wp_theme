
<? get_header(); ?>

<!-- <header class="entry-header alignwide"> -->
  <? // twenty_twenty_one_post_thumbnail(); ?>
<!-- </header> -->

<div class="entry-content">
  <? the_content(); ?>
</div>


<? if ( is_active_sidebar( 'widget-markers-1' ) ) : ?>
	<aside class="Markers">
		<? dynamic_sidebar( 'widget-markers-1' ); ?>
	</aside>
<? endif; ?>

<? get_footer();
