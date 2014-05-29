<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold" />
	<?php $menu_font = of_get_option('ttrust_menu_font'); ?>
	<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
	<?php $sub_heading_font = of_get_option('ttrust_sub_heading_font'); ?>
	<?php $body_font = of_get_option('ttrust_body_font'); ?>
	<?php $slideshow_heading_font = of_get_option('ttrust_slideshow_heading_font'); ?>
	<?php $slideshow_description_font = of_get_option('ttrust_slideshow_description_font'); ?>
	
	<?php if ($menu_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($menu_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>	
	<?php if ($sub_heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($sub_heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($body_font != "" && $body_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>	
	<?php if ($slideshow_heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($slideshow_heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($slideshow_description_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($slideshow_description_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>

	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />




<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php if(is_front_page() ) { ?>
<script>
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 700) {
             $('.menu-wrapper').addClass('fixed');
         }
         else {
             $('.menu-wrapper').removeClass('fixed');
         }
    });
</script>

<?php } else { ?>

<script>
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 258) {
             $('.menu-wrapper').addClass('fixed');
         }
         else {
             $('.menu-wrapper').removeClass('fixed');
         }
    });
</script>

<?php } ?>











<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

	
	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?> >



<div id="topbar"><div>
<a class="sign-in" href="/wordpress/wp-login.php?redirect_to=/wordpress"><i class="fa fa-sign-in"></i>Sign In</a>
<a class="sign-out" href="<?php echo wp_logout_url( get_permalink() ); ?>"><i class="fa fa-sign-out"></i>Sign Out</a>
<a class="site-register" href="/wordpress/wp-login.php?action=register"><i class="fa fa-user"></i>Register</a>

<span class="social-top"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><img src="/wordpress/wp-content/uploads/2013/11/houzz-social1.png" alt="houzz logo" width="34" height="55" class="alignnone size-full wp-image-270" title=""></a>
</span>
<span class="telephone"><span class="phone"><i class="icon-phone"></i>01273 611091</span><span class="mobile"><i class="icon-phone"></i>07736 126057</span></span>
</div></div>







<div id="container">	
<div id="header">
	<div class="top">
	<div class="surround">
	<div class="inside clearfix">
							
		<?php $ttrust_logo = of_get_option('logo'); ?>
		<div id="logo"><?php if($ttrust_logo) { ?>





<?php if(is_front_page() ) { ?>

<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
<a class="slide-btn" href="/about-us">About Us</a>

<?php } else { ?>

<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></div>

<?php } ?>
		<?php } else { ?>				
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>				
		<?php } ?>	

	
			





		</div>
		
			
							
	</div>
	</div>
	</div>	
	
	<?php if(is_front_page()):?>	
		<?php if(of_get_option('ttrust_slideshow_enabled')) get_template_part( 'part-slideshow'); ?>		
	<?php endif; ?>
	
</div>





<div class="menu-wrapper"><div class="menu-banner">

<div id="mainNav" class="clearfix">							
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>			
		</div>

<div class="social"><a href="fb"><i class="icon-facebook-sign"></i></a><a href="twitt"><i class="icon-twitter-sign"></i></a></div>

</div></div>







<div id="wrap">
<div id="middle" class="clearfix">
	