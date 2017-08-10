<html>
	<head>
		<title>RANDSITE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body> 

	<div class="container">
		<div class="row">
			<!-- <div class="col-xs-12 col-sm-4">
				<a href="">
					<img class="logo img-responsive" src=" <?php echo get_template_directory_uri()?>/img/fox.jpg">
				</a>
			</div>	 -->
			<?php 
				$args = array(
					'theme_location' => 'header-menu',
					'container' => 'div',
					'container_class' => 'col-xs-12 col-sm-8 col-sm-offset-2',
					'container_id' => 'menu-main',
					'menu_class' => 'menu-main',
					'link_before' => '<span class="class-span">',
					'link_after' => '</span>'
				);
				wp_nav_menu($args);
			 ?>
		</div>
		<div class="row">
			<?php 
				$args = array(
					'theme_location' => 'social-menu',
					'container' => 'div',
					'container_class' => 'menu-social'
				);
				wp_nav_menu($args);
			 ?>
		</div>
	</div>

