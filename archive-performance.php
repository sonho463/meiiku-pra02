<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<?php if (have_posts()) : ?>
	<div class="content-width">

		<h1>実績のインデックスページ</h1>
		<h2>archive-performance.phpです</h2>
	</div>

	<?php
	while (have_posts()) :
		the_post();
	?>
		<div class="content-width">
			<div>
				<p>
					<a href="<?php the_permalink() ?>">
						<?php the_title(); ?>
					</a>
				</p>
				<?php get_template_part('includes/get_post_thumbnail') ?>
				<ul>
					<li>
						<?php the_date(); ?>

					</li>
					<li>
						<?php the_author(); ?>
					</li>
					<li>
					<?php
						$postName = "performance_genre";
						get_template_part('includes/get_the_terms_of_custom_posts', null, $postName);
						?>
					</li>
					<li>
						<?php
						$postName = "performance_tag";
						get_template_part('includes/get_the_terms_of_custom_posts', null, $postName);
						?>
					</li>
				</ul>
				<hr>
			</div>

		</div><!-- /.content-width -->

<?php
	endwhile;

endif;
?>

<?php get_footer(); ?>

</body>

</html>
