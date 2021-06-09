<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<main class="content-width">

	<h2>こちらはindex.phpテンプレートです</h2>


	<h2>投稿一覧を表示</h2>
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>

			<a href="<?php echo the_permalink(  ) ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<p><?php the_author(); ?></p>

		<?php
		}
	} else {
		?>
		<p>投稿がありません</p>
	<?php
	}
	?>


</main>

<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>

</body>

</html>
