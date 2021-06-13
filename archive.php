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
			<a href="<?php echo the_permalink() ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<ul>
				<li>
					<p><?php the_author(); ?></p>
				</li>
				<li>
					カテゴリ：<?php the_category('／', '<span>'); ?>
				</li>
				<li>
					タグ：
					<?php
					$tags = get_the_tags();
					if ($tags) :
						foreach ($tags as $tag) :
							$name = $tag->name;
							$slug = $tag->slug;
					?>
							<a href="<?php get_template_directory_uri(); ?>/tag/<?php echo $slug; ?>">#<?php echo $name; ?></a>,
						<? endforeach; ?>
					<? endif; ?>
				</li>
				<li>
					<?php
					$year = get_the_date('Y');
					$month = get_the_date('m');
					$day = get_the_date('d');
					?>
					<a href="<?php echo get_year_link($year); ?>;">
						<span><?php echo get_the_date('Y'); ?></span>
					</a>年
					<a href="<?php echo get_month_link($year, $month); ?>;">
						<span><?php echo get_the_date('m'); ?></span>
					</a>月
					<a href="<?php echo get_day_link($year, $month, $day); ?>;">
						<span><?php echo get_the_date('d'); ?></span>
					</a>日
				</li>

			</ul>
		</div>


		<hr>
		<?php
		wp_reset_postdata();
		?>



<?php
	endwhile;
endif;
?>



<?php get_footer(); ?>

</body>

</html>
