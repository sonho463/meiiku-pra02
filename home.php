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
			<p><?php the_author(); ?></p>
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
