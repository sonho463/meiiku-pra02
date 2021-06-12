<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<?php
if (have_posts()) :
?>

	<div class="content-width">
		<h1>
			<?php
			if (is_category()) {
				echo 'カテゴリ「' . single_cat_title('', false) .  '」の投稿一覧';
			} elseif (is_tag()) {
				echo 'タグ「' . single_tag_title('', false) .  '」の投稿一覧';
			} else {
				echo 'blog';
			}
			?>
		</h1>
		<h2>archive.phpです</h2>
	</div><!-- /.content-width -->

	<?php
	$category_slug = get_query_var('category_name');
	$args = array(
		'category_name' => $category_slug,

	);
	$postslist = get_posts($args);
	?>

	<?php
	while (have_posts()) :
		the_post();
	?>



		<div class="content-width">
			<?php the_date(); ?>
			<br />
			<?php the_title(); ?>
			<?php the_excerpt(); ?>
		</div>
		<hr>
		<?php
		// wp_reset_postdata();
		?>



<?php
	endwhile;
endif;
?>


<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>

</body>

</html>
