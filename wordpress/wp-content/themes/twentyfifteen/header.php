<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page">
		<header>
			<div class="container">
				<div class="page-logo">
					<a href="https://templatemonster.com">
						<img src="images/logo.png" alt="TemplateMonster">
					</a>
				</div>
				<div class="page-title">
					<div class="page-title-divider"></div>
					<h1>Hey! My name is David Braun, and I'm a CEO<br> of the TemplateMonster company.</h2>
					<p>Today I would like to talk to you about couple of things things that are eating my brain,<br> that's: excellent service, customer satisfaction, happiness, and smiles on your faces.</p>
					<a href="#">Continuation in Video</a>
				</div>
			</div>
		</header>

	<div id="content" class="site-content">
