<?php
/**
 *
 * Archive
 *
 * @package WordPress
 **/

get_header(); ?>

<article>
<?php if ( have_posts() ) : ?>

<?php
the_archive_title( '<h1 class="page-title">', '</h1>' );
the_archive_description();
?>
<?php endif; ?>
<!-- main post -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;
	the_posts_pagenation( array(
		'prev_text' => '&larr;',
		'next_text' => '&rarr;',
	) );
else :
	echo '記事はありません';
endif;
?>
</article>
<?php
get_footer();
