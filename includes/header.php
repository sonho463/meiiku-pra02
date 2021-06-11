

<div class="header-nav">
	<a href="<?php bloginfo('url') ?>">
		<div class="nav-logo">
			<div><?php bloginfo('name'); ?></div>
		</div><!-- /.nav-logo -->
	</a>

	<nav>
		<?php wp_nav_menu([
			'menu_class'      => 'nav-menu',
		]); ?>
		<button class="hamburger">
			<span></span><span></span><span></span>
		</button>
	</nav>
</div><!-- /.header-nav -->
