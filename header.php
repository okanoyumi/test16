<?php
/**
 *
 * Header
 *
 * @package WordPress
 **/

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test16</title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<a href="tel:0120-333-333">0120-333-333</a>
		<h1><a href="<?php bloginfo( 'url' ); ?>"<?php bloginfo( 'name' ); ?></a></h1>
		<p><?php bloginfo( 'description' ); ?></p>
		<ul>
			<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_slide_01.jpg"></li>
			<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_slide_02.jpg"></li>
			<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_slide_03.jpg"></li>
		</ul>
	</header>
