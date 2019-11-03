<?php global $redux_theory; ?>
<!DOCTYPE HTML>
<html <?php language_attributes();?>>
	<head>
		<title>Theory by TEMPLATED</title>
		<meta charset="<?php bloginfo('charset')?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
			<style>
				#banner {
				padding: 12em 0 10em 0;
				background-image: url(<?php echo esc_url($redux_theory['banner']['url']);?>);
				background-size: cover;
				background-position: top;
				background-attachment: fixed;
				background-repeat: no-repeat;
				text-align: center;
				border-top: 0.5em solid #5385c1;
				}
			</style>
	</head>
	<body <?php body_class();?>>
	
	<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><?php echo esc_html($redux_theory['logo']);?></a>
					
					<!--<nav id="nav">
						
						<a href="index.html">Home</a>
						<a href="generic.html">Generic</a>
						<a href="elements.html">Elements</a>
					</nav>-->
						<?php 
						wp_nav_menu(array(
							'theme_location'  => 'primary-menu',
							'menu'	=>'',
							'container'	=> 'nav',
							'container_id'    => 'nav',
							
						));
									
						?>
					
					
					
														
							
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
				
			</header>
			
			
		<!--Banner -->
		<?php if(is_page(9)){?>
			<section id="banner">
				<h1><?php bloginfo('name');?></h1>
				<p><?php bloginfo('description');?></p>
			</section>
		<?php }?>
