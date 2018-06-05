<?php
/**
 *
 * Display posts
 *
 * @package WordPress
 **/

?>

<div>
<?php
if ( is_single() ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
} else {
	the_title( '<h2 class="entry-title"><a href"' . esc_url( get_permalink() ) . '"rel="bookmark">', '</a></h2>' );
}
?>
<ul>
	<li><?php echo get_the_data(); ?></li>
	<li><?php the_category(); ?></li>
	<li><?php the_tags(); ?></li>
	<li><?php the_post_thumbnail(); ?></li>
	<li><?php the_content(); ?></li>
</ul>
</div>
