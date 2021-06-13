<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<main class="content-width">
	<h2>home.php</h2>
	<h2>コラム〜授業をする前に<br>ここのループではWordPress標準の投稿機能の記事を表示します。</h2>

	<h2>カテゴリリスト</h2>
	<p>
		<?php
		$args = [
			'title_li' => ''
		];
		wp_list_categories($args);
		?>
	</p>

	<?php ?>


	<h2>投稿一覧を表示</h2>
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>

			<a href="<?php echo the_permalink() ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<ul>
				<li>
					<p><?php the_author(); ?></p>
				</li>
				<li>
					カテゴリ：<?php the_category('<span>'); ?>
				</li>
				<li>
					タグ：
					<?php
					$tags = get_the_tags();
					foreach ($tags as $tag) :
						$name = $tag->name;
						$slug = $tag->slug;
					?>
						<a href="<?php get_template_directory_uri(); ?>/tag/<?php echo $slug; ?>">#<?php echo $name; ?></a>,
					<? endforeach; ?>
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

			</ul>



			<hr>

		<?php
		}
	} else {
		?>
		<p>投稿がありません</p>
	<?php
	}
	?>


</main>


<?php get_footer(); ?>

</body>

</html>
