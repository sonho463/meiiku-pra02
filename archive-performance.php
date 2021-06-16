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
				<ul>
					<li>
					<?php the_date(); ?>
					
					</li>
					<li>
						<?php the_author(); ?>
					</li>
					<li>
						<?php
						$taxonomy = 'performance_genre';

						// 投稿に付けられたターム（カテゴリー）の ID を取得する。
						$post_terms = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
						// リンクの区切り文字
						$separator = ', ';

						if (!empty($post_terms) && !is_wp_error($post_terms)) {

							$term_ids = implode(',', $post_terms);
							$terms = wp_list_categories('title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids);
							$terms = rtrim(trim(str_replace('<br />',  $separator, $terms)), $separator);

							// 投稿のカテゴリーを表示
							echo  $terms;
						}
						?>
					</li>
					<li>
						<?php
						$taxonomy = 'performance_tag';

						// 投稿に付けられたターム（カテゴリー）の ID を取得する。
						$post_terms = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
						// リンクの区切り文字
						$separator = ', ';

						if (!empty($post_terms) && !is_wp_error($post_terms)) {

							$term_ids = implode(',', $post_terms);
							$terms = wp_list_categories('title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids);
							$terms = rtrim(trim(str_replace('<br />',  $separator, $terms)), $separator);
							//タグの先頭に＃をつける
							$terms = str_replace('">', '">#', $terms);

							// 投稿のカテゴリーを表示
							echo  $terms;
						}
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
