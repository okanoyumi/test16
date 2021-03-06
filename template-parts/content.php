<?php
/**
 *
 * Display posts
 *
 * @package WordPress
 **/

?>

<div class="post-container">
<?php
if ( is_single() ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
} else {
	the_title( '<h2 class="entry-title"><a href"' . esc_url( get_permalink() ) . '"rel="bookmark">', '</a></h2>' );
}
?>
<ul>
	<li><?php echo get_the_date(); ?></li>
	<li><?php the_category(); ?></li>
	<li class="post-img"><?php the_post_thumbnail(); ?></li>
	<li><?php the_content(); ?></li>
</ul>
</div>
