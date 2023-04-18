<?
/**
 * Template Name: root
 * Template Post Type: post, page, event
 * _vp_ 20230110
 * _vp_ 20230418
**/

get_header();
$description = get_the_archive_description();
?>

<div class="TwofoldLayoutW" >
  <div class="TwofoldLayout" >

    <div class="LeftPane" >
      <div class='Breadcrumbs' >
        <h5>Breadcrumbs</h5>
        <? the_archive_title(); ?>
      </div>
      <div class='Map' >
        <h5>A Map, or main content</h5>
      </div>
    </div>
    <div class="RightPane" >
      <div class='Markers' >
        <h5>Markers</h5>
      </div>

      <? if ( have_posts() ) : ?>
        <div class="Newsfeed">
          <h5>Newsfeed</h5>

          ???

        </div>
      <? else : ?>
        <? get_template_part( 'template-parts/content/content-none' ); ?>
      <? endif; ?>

    </div>

    <div class="ItemModal" >
      <? while ( have_posts() ) : ?>
        <? the_post(); ?>
        <? get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
      <? endwhile; ?>
      <? twenty_twenty_one_the_posts_navigation(); ?>
    </div>

  </div>
</div>



      </main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
<? // get_footer();
