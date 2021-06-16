<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<?php if (have_posts()) : ?>
	<div class="content-width">
		<h1>日付別のページ</h1>
		<h2>date.php</h2>
		<h2><?php the_archive_title( '■■■','■■■' );?></P></h2>
	</div><!-- /.content-width -->

	<?php while (have_posts()) : the_post(); ?>

		<div class="content-width">
			<p>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</p>
			<ul>
				<li><?php the_date(); ?></li>
				<li><?php the_author(); ?></li>
				<li><?php the_category(); ?></li>
				<li><?php the_tags(); ?></li>
			</ul>


		</div><!-- /.content-wodth -->





	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

</body>

</html>
