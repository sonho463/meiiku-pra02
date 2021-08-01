<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>


<main class="content-width">
	<h2>archive.php</h2>
	<h2>コラム〜授業をする前に<br>ここのループではWordPress標準の投稿機能の記事を表示します。</h2>

	<h2>カテゴリリスト</h2>
	<ul class="cat-list">
		<?php
		$args = [
			'title_li' => ''
		];
		wp_list_categories($args);
		?>
	</ul>

	<?php ?>


	<h2>投稿一覧を表示</h2>
	<div class="wrapper">
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post(); ?>

				<div class="article-wrapper">
					<div class="post-heading">
						<a href="<?php echo the_permalink() ?>">
							<h3><?php the_title(); ?></h3>
						</a>
						<?php get_template_part('includes/get_post_thumbnail') ?>
					</div><!-- /.post-heading -->
					<div class="article-description">
						<?php the_author(); ?>
						カテゴリ：<?php the_category('／', '<span>'); ?>
						<?php get_template_part('includes/get_the_tags_with_sharp') ?>

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
					</div>
					<div class="home-content-wrapper">
						<p  class="home-content">
							<?php
							$content  = get_the_content();
							$text     = strip_tags(strip_shortcodes($content));
							echo $text;
							?>
						</p>
					</div><!-- /.content -->
					<span class="more-read"><a href="<?php echo the_permalink() ?>">記事を読む</a></span>
				</div><!-- /.article-wrapper -->

			<?php
			}
		} else {
			?>
			<p>投稿がありません</p>
		<?php
		}
		?>
	</div><!-- /.wrapper -->


</main>


<?php get_footer(); ?>
</body>

</html>
