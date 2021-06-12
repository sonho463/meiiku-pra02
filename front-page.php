<?php get_header(); ?>

<header>
	<?php get_template_part('includes/header'); ?>
</header>

<div class="content-width">
	<h1><?php the_title(); ?>
	</h1>
	<p>フロント</p>
	<p>テンプレートはfront-page.php</p>
	<img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/images/site-map.png" alt="">
</div>


<main class="content-width">
	<?php the_content(); ?>
	<?php wp_nav_menu( array('theme_location' => 'global-menu'))?>
	<?php wp_nav_menu( array('theme_location' => 'footer-menu'))?>


</main>


<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>



</body>

</html>
