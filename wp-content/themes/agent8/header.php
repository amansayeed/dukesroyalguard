<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet" type="text/css">
</head>

<body  class="home-page">
<header>
			<div class="lk-container">
				<div class="lk-row">
					<div class="lk-lg-3 lk-md-3 sm-md-3 lk-xs-8">
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""/></a>
						</div>
					</div>
					<div class="lk-lg-9 lk-md-9 sm-md-9 lk-xs-4">
						<form action="" class="form-inline" id="myDiv" style="position:relative" >                
							<div class="form-group" id="top-login">
								<input class="form-control mr-sm-2 valid" placeholder="Email" type="text" value="">
							</div>
							<div class="form-group" id="top-login">
								<input class="form-control mr-sm-2 valid"  placeholder="Password" type="password">
							</div>                   
							<button class="btn primary-btn my-2 my-sm-0" type="submit">Submit</button>
							<small class="ml-sm-2"><a href="https://www.agent8.ca/Account/ForgotPassword">Forgot password?</a></small>
						</form>
					</div>
				</div>
			</div>
	</header>
