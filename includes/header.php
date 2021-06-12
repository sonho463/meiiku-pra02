<div class="header-nav">
	<div class="header-nav__logo">
		<a href="<?php bloginfo('url') ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/images/img_logo.png" alt="">
		</a>
		<div class="header-nav__text">
			<h3>医師専門家×ママクリエイターによる</h3>
			<h2>
				家庭でできる性教育サイト
			</h2>
		</div><!-- /.header-nav__text -->

	</div><!-- /.header-nav__logo -->

	<nav>
	<?php wp_nav_menu( array(
		'theme_location' => 'global-menu',
		'menu_class' => 'nav-menu',
		))
	?>


		<button class="hamburger">
			<span></span><span></span><span></span>
		</button>
	</nav>

</div><!-- /.header-nav -->
