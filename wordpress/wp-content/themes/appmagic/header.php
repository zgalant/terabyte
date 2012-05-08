<?php
/**
 * @package WordPress
 * @subpackage AppMagic
 */
?><?php global $options; foreach ($options as $value) { if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/cufon/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/cufon/advent_pro_Bd3_400.font.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/cufon/nevis_700.font.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/site.js"></script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<?php if(is_front_page()){ ?>
<body>
<?php } else { ?>
<body class="sub">
<?php };?>
	
<div id="shim"></div>

<div id="wrap">
	
	<div id="top">
		<a href="<?php bloginfo('url'); ?>" id="logo"><strong>AppMagic</strong> More than you can know</a>

		<?php if($mgk_testimonial_enabled != '') { ?>
		<div id="quotes">
			<div class="quote" id="quote1">
				<p><?php if ($mgk_testimonial_content != '') { echo $mgk_testimonial_content; } else { echo 'Update the text of this testimonial from your options page.'; }?></p>
				<cite><?php if ($mgk_testimonial_citation != '') { echo $mgk_testimonial_citation; } else { echo 'Update Testimonial Citation'; }?></cite>
			</div>
		</div><!-- e: quotes -->
		<?php };?>
	</div><!-- e: top -->
	

	<ul id="nav">
		<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
		<?php wp_list_pages('title_li=' ); ?>
		<li class="get-it"><a href="<?php if ($mgk_itunes_link != '') { echo $mgk_itunes_link; } else { echo 'http://bit.ly/7JoiWB'; }?>">Get It Now</a></li>
	</ul><!-- e: nav -->
	
	
	<div id="splash">
		<h1><?php if ($mgk_header_title != '') { echo $mgk_header_title; } else { echo 'Welcome change text in your theme options page.'; }?></h1>
		<p><?php if ($mgk_header_message != '') { echo $mgk_header_message; } else { echo 'You can replace this text in your theme options page.'; }?></p>
		<p>
			<a href="<?php if ($mgk_itunes_link != '') { echo $mgk_itunes_link; } else { echo 'http://bit.ly/7JoiWB'; }?>" class="buy-now">Buy on iTunes</a>
			<strong class="price">Just <?php if ($mgk_itunes_price!= '') { echo $mgk_itunes_price; } else { echo '$2.99'; }?>!</strong>
		</p>
	</div><!-- e: splash -->
	
	
	<div id="image-bar">
	<?php if(is_front_page()){ ?>
	
		<!-- these iphone screenshots are shown on the front page -->
		<div id="front-phone">
			<div id="phone1" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/1screen.gif" alt="" /></div>
			<div id="phone2" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/2screen.gif" alt="" /></div>
			<div id="phone3" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/3screen.gif" alt="" /></div>
			<div id="phone4" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/4screen.gif" alt="" /></div>
			<div id="phone5" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/5screen.gif" alt="" /></div>
		</div>
	<?php } else { ?>
	
		<!-- the screens are shown on the inner pages -->
		<div id="front-phone">
			<div id="phone1" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/h-screen.gif" alt="" /></div>
			<div id="phone2" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/h-screen2.gif" alt="" /></div>
			<div id="phone3" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/h-screen3.gif" alt="" /></div>
			<div id="phone4" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/h-screen4.gif" alt="" /></div>
			<div id="phone5" class="phone"><img src="<?php bloginfo('template_directory'); ?>/img/h-screen5.gif" alt="" /></div>
		</div>
	<?php };?>
		
		<div id="slider">
			<strong>See App Magic in Action</strong>
			<ul id="screen-nav">
				<li rel="phone1" class="active-screen">1</li>
				<li rel="phone2">2</li>
				<li rel="phone3">3</li>
				<li rel="phone4">4</li>
				<li rel="phone5">5</li>
			</ul>
		</div>
	</div><!-- e: image bar -->
	
	
	<div id="page">
