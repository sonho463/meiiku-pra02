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
				echo 'カテゴリ「' . single_term_title('', false) .  '」の投稿一覧';
			} elseif (is_tag()) {
				echo 'タグ「' . single_term_title('', false) .  '」の投稿一覧';
			} elseif (is_day()) {
				echo '「' . get_the_date('Y年n月j日') .  '」の投稿一覧';
			} elseif (is_month()) {
				echo '「' . get_the_date('Y年n月') .  '」の投稿一覧';
			} elseif (is_year()) {
				echo '「' . get_the_date('Y年') .  '」の投稿一覧';
			} else {
				echo 'blog';
			}
			?>
		</h1>
		<h2>archive.phpです</h2>
	</div><!-- /.content-width -->


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



<?php get_footer(); ?>

</body>

</html>
