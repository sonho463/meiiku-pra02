<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>
<div class="content-width">

	<h1>教材のインデックスページ</h1>
	<h2>archive-materials.phpです</h2>
</div>

<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>

		<div class="content-width">
			<div>
				<p>
					<a href="<?php the_permalink()?>">
							<?php the_title(); ?>
					</a>
				</p>

				<p><?php the_date(); ?></p>
				<p><?php the_author(); ?></p>
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
