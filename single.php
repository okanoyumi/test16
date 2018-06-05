<?php
/**
 *
 * Archive
 *
 * @package WordPress
 **/

get_header(); ?>

<article>

<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content' );
	the_posts_pagenation( array(
		'prev_text' => '&larr;',
		'next_text' => '&rarr;',
	) );
	endwhile;
?>
</article>
<?php
get_footer();
