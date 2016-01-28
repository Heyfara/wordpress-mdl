<!doctype html>
<html>
	<head>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php echo get_bloginfo('name'); ?></title>

	    <!-- Add to homescreen for Chrome on Android -->
	    <meta name="mobile-web-app-capable" content="yes">
	    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

	    <!-- Add to homescreen for Safari on iOS -->
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
	    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

	    <!-- Tile icon for Win8 (144x144 + tile color) -->
	    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	    <meta name="msapplication-TileColor" content="#3372DF">

	    <link rel="shortcut icon" href="images/favicon.png">

	    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
	    <!--
	    <link rel="canonical" href="http://www.example.com/">
	    -->

	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.blue-pink.min.css" />
    	<link rel="stylesheet" href="/wordpress/wp-content/themes/julienmontavit/style.css">
    	<?php wp_head(); ?>
  	</head>
  	<body>
		<div class="jm-layout-transparent mdl-layout mdl-js-layout">
			<header class="mdl-layout__header mdl-layout__header--transparent">
				<div class="mdl-layout__header-row">
				<!-- Title -->
				<span class="mdl-layout-title"><?php echo get_bloginfo('name'); ?></span>
				<!-- Add spacer, to align navigation to the right -->
				<div class="mdl-layout-spacer"></div>
				<!-- Navigation -->
					<?php wp_nav_menu(array('echo' => false,'container' => 'nav', 'container_class' => 'mdl-navigation', 'items_wrap' => '%3$s', 'theme_location' => 'primary')); ?>
				</div>
			</header>
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title"><?php echo get_bloginfo('name'); ?></span>
				<?php wp_nav_menu(array('echo' => false,'container' => 'nav', 'container_class' => 'mdl-navigation', 'items_wrap' => '%3$s', 'theme_location' => 'secondary')); ?>
			</div>
		</div>
		<div class="jm-blog mdl-layout mdl-js-layout has-drawer is-upgraded" data-upgraded=",MaterialLayout">
			<main class="mdl-layout__content">
				<div class="jm-blog jm-blog__posts mdl-grid">
					<?php
						if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) : the_post();
								get_template_part( 'content', get_post_format() );
							endwhile;
							// Previous/next post navigation.
							?>
								<nav class="jm-nav mdl-cell mdl-cell--12-col">
									<?php $npl = explode('"', get_next_posts_link()); $npl_url = $npl[1]; ?>
									<a href="<?php echo $npl_url; ?>" class="jm-nav__button" title="Older posts">
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
											<i class="material-icons" role="presentation">arrow_backward</i>
										</button>
									</a>

									<?php $ppl = explode('"', get_previous_posts_link()); $ppl_url = $ppl[1]; ?>
									<a href="<?php echo $ppl_url; ?>" class="jm-nav__button" title="Newer posts">
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
											<i class="material-icons" role="presentation">arrow_forward</i>
										</button>
									</a>
								</nav>
							<?php
						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );

						endif;
					?>
				</div>
			</main>
		</div>
		<footer class="mdl-mini-footer">
		<div class="mdl-mini-footer--left-section">
			<button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
				<span class="visuallyhidden">Twitter</span>
			</button>
			<button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
				<span class="visuallyhidden">Facebook</span>
			</button>
			<button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
				<span class="visuallyhidden">Google Plus</span>
			</button>
		</div>
		<div class="mdl-mini-footer--right-section">
			<button class="mdl-mini-footer--social-btn social-btn__share">
				<i class="material-icons" role="presentation">share</i>
				<span class="visuallyhidden">share</span>
			</button>
		</div>
		</footer>
    	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    	<?php wp_footer(); ?>
  	</body>
</html>