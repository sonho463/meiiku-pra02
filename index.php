<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<main class="content-width">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-map.png" alt="">
	<h2>ここのループで何を表示するか</h2>
	<p>WordPressの投稿機能はトップページに適用される様子。</p>
	<p>もし、ブログのインデックスページにできるのなら、そうしたい。</p>
	<p>トップをfront-page.phpの固定ページ指定にすれば、index.phpのリンクをブログ一覧ページにできるのか？</p>

	<h2>投稿一覧を表示</h2>
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<p><?php the_author(); ?></p>

		<?php
		}
	} else {
		?>
		<p>投稿がありません</p>
	<?php
	}
	?>


</main>

<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>

</body>

</html>
