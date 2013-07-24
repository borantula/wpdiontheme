<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<!-- ÖRNEK HEADER: SİLİNEBİLİR-->
	<header id="masthead" class="site-header" role="banner">
		<div class="logo">
			
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">
		<!-- / ÖRNEK HEADER: SİLİNEBİLİR-->

	<button id="success">Yes</button>
	<button id="fail">No</button>


	<script type="text/javascript">

	jQuery(document).ready(function($){
		console.log('asdf');

		$('#success').click(function(){

			$.post(amadeusAjaxUrl('tester-event'),{success : 'yes'},function(d){
				console.log(d);
				console.log('hello');
			});

		});

		$('#fail').click(function(){
			$.post(amadeusAjaxUrl('tester-event'),{success:'no'},function(d){
				console.log(d);
			});
		});

	})


	</script>

	<?php 	echo get_option( 'dion-ajax-test'); ?>
