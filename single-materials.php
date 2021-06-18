<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>
<div class="content-width">
	<h1>教材の個別投稿ページです</h1>

	<h2>single-materials.php</h2>

	<?php
	if (have_posts()) :
		while (have_posts()) :
			the_post();
	?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part('includes/get_post_thumbnail' )?>

				<h3><?php the_title(); ?></h3>
				<p><?php echo get_the_date(); ?></p>
				<p><?php the_category(); ?></p>
				<p><?php the_tags(); ?></p>
				<p><?php the_author(); ?></p>
				<p><?php wp_link_pages(); ?></p>
				<p><?php the_content(); ?></p>


			</article>

			<ul>
				<li>
					<?php previous_post_link(); ?>
				</li>
				<li>
					<?php next_post_link(); ?>
				</li>
			</ul>

		<?php endwhile; ?>
	<?php endif; ?>


</div><!-- /.content-width -->



<?php get_footer(); ?>

</body>

</html>
