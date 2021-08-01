<?php get_header(); ?>

<header>
	<?php get_template_part('includes/header'); ?>
</header>

<div class="title-wrapper content-width">
	<h1><?php the_title(); ?>
	</h1>
	<a href="https://meiiku.com/" target="_blank" rel="noopener noreferrer">
		命育サイトはこちら
	</a>
	<p>フロント</p>
	<p>テンプレートはfront-page.php</p>
	<div class="search">
		<?php get_search_form(); ?>

	</div><!-- /.search -->

</div>


<main class="content-width">
	<div class="new-posts__wrapper">
		<div class="article">
			<h2>コラムの最新投稿！</h2>
			<div class="new-posts">
				<?php
				$args = array(
					'posts_per_page' => 3 // 表示件数の指定
				);
				$posts = get_posts($args);
				foreach ($posts as $post) : // ループの開始
					setup_postdata($post); // 記事データの取得
				?>
					<div class="article-wrapper">
						<div><?php get_template_part('includes/get_post_thumbnail') ?></div>
						<ul>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
							<li>
								<?php the_author(); ?>
							</li>
							<li>
								カテゴリ：<?php the_category('／', '<span>'); ?>
							</li>
							<?php get_template_part('includes/get_the_tags_with_sharp') ?>
						</ul>
					</div><!-- /.article -->
				<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
				?>
			</div><!-- /.new-posts -->
		</div><!-- /.article -->

		<div class="article">
			<h2>教材の最新投稿</h2>
			<div class="new-posts">
				<?php
				$args = array(
					'posts_per_page' => 3, // 表示件数の指定
					'post_type' => 'materials',
				);
				$posts = get_posts($args);
				foreach ($posts as $post) : // ループの開始
					setup_postdata($post); // 記事データの取得
				?>
					<div class="article-wrapper">
						<div><?php get_template_part('includes/get_post_thumbnail') ?></div>
						<ul>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
							<li>
								<?php the_author(); ?>
							</li>
							<li>
								カテゴリ：<?php get_template_part('includes/get_the_terms_of_custom_posts', null, 'material_genre') ?>
							</li>
							<li>
								タグ：<?php get_template_part('includes/get_the_terms_of_custom_posts', null, 'material_tag') ?>
							</li>
							<hr>
						</ul>
					</div><!-- /.article-wraper -->
				<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
				?>
			</div><!-- /.new-posts -->
		</div><!-- /.article -->


		<div class="article">
			<h2>実績の最新投稿</h2>
			<div class="new-posts">
				<?php
				$args = array(
					'posts_per_page' => 3, // 表示件数の指定
					'post_type' => 'performance',
				);
				$posts = get_posts($args);
				foreach ($posts as $post) : // ループの開始
					setup_postdata($post); // 記事データの取得
				?>
					<div class="article-wrapper">
					<div><?php get_template_part('includes/get_post_thumbnail') ?></div>

						<ul>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
							<li>
								<?php the_author(); ?>
							</li>
							<li>
								カテゴリ：<?php get_template_part('includes/get_the_terms_of_custom_posts', null, 'performance_genre') ?>
							</li>
							<li>
								タグ：<?php get_template_part('includes/get_the_terms_of_custom_posts', null, 'performance_tag') ?>
							</li>
							<hr>
						</ul>
					</div><!-- /.article-wrapper -->
				<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
				?>
			</div><!-- /.new-posts -->
		</div><!-- /.article -->

	</div><!-- /.new-posts__wrapper -->

</main>
<!-- <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/images/site-map.png" alt=""> -->



<?php get_footer(); ?>



</body>

</html>
