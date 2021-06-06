
<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

	<header class="content-width">
		<h1><?php the_title(); ?>
		</h1>
		<p>ABOUT専用</p>
		<p>テンプレートはpage-about.php</p>

	</header>

	<main class="content-width">
		<?php the_content(); ?>




	</main>

	<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>


</body>

</html>
