<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Yeseva+One|Lato|Gentium+Book+Basic:400,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
        <div class="logo">
            <a href=""><img src="wp-content/uploads/2020/01/Logo.png"></a>
        </div>
        <div class="navigation">
            <div class="menu">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Igredients</a>
                    </li>
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">Reviews</a>
                    </li>
                    <li>
                        <a href="#">Reservations</a>
                    </li>
                </ul>
            </div>
            <div class="social-icons">
                <a href="#"><img src="wp-content/themes/test/img/twitter.svg" alt=""></a>
                <a href="#"><img src="wp-content/themes/test/img/youtube.svg" alt=""></a>
                <a href="#"><img src="wp-content/themes/test/img/facebook.svg" alt=""></a>
            </div>
        </div>
       
        </div>
















	</header><!-- #masthead -->

	<div id="content" class="site-content">
