<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<link rel="icon" href="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/favicon.ico" />
<link rel="shortcut icon" href="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/favicon.ico" />

<?php wp_head(); ?>

</head>
<body>

<div id="head" class="clearfloat">

<div class="clearfloat">
	<div id="logo" class="left">
	<a href="http://www.scouts.org.uk/" target="_blank"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/scout-logo-small.jpg" alt="Scouts Logo" /></a>
</div>
	<div class="right">
	<a href="<?php echo get_option('home'); ?>/"><h1><?php bloginfo('name'); ?></h1>
<div align="right"><?php bloginfo('description'); ?></div></a>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>

</div>

<div id="navbar" class="clearfloat">

<ul id="page-bar" class="left clearfloat">

<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li&exclude='); ?>
<div style="float:right"><li><?php if ( is_user_logged_in() ) { ?> <?php wp_register('', ''); ?></li>
<li><?php } ?> <?php wp_loginout(); ?></li></div>
</ul>


</div>

<div id="navbar2" class="clearfloat">
<ul id="page-bar2" class="left clearfloat">
<li><a href="<?php echo get_option('home'); ?>/beavers"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/beavers.gif" border="0" alt="Beavers"></a></li>
<li><a href="<?php echo get_option('home'); ?>/cubs"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/cubs.gif" border="0" alt="Cubs"></a></li>
<li><a href="<?php echo get_option('home'); ?>/scouts"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/scouts.gif" border="0" alt="Scouts"></a></li>
<li><a href="<?php echo get_option('home'); ?>/explorers"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/explorers.gif" border="0" alt="Explorers"></a></li>
<li><a href="<?php echo get_option('home'); ?>/network"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/network.gif" border="0" alt="Network"></a></li>
<li><a href="<?php echo get_option('home'); ?>/activesupport"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/active-support.png" border="0" alt="Active Support"></a></li>
<li><a href="http://www.scouts.org.uk/join" target="_blank"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/join-sml.PNG" border="0" alt="Join the adventure!"></a></li>
<li><a href="http://www.scoutshops.com" target="_blank"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/scoutshops.jpg" border="0" alt="Scout Shops"></a></li>
<li><a href="http://www.iscout4wordpress.org.uk" target="_blank"><img src="<?php echo get_option('home'); ?>/wp-content/themes/iscout4wordpress/images/iscout4wordpress-logo.png" border="0" alt="i.SCOUT 4 WordPress Themes"></a></li>

</ul>

</div>

</div>

<div id="page" class="clearfloat">