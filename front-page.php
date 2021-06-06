<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<header class="content-width">
	<h1><?php the_title(); ?>
	</h1>
	<p>フロント</p>
	<p>テンプレートはfront-page.php</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-map.png" alt="">
</header>

<main class="content-width">
	<?php the_content(); ?>


</main>


<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>



</body>

</html>
