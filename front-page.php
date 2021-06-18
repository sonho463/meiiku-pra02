<?php get_header(); ?>

<header>
	<?php get_template_part('includes/header'); ?>
</header>

<div class="content-width">
	<h1><?php the_title(); ?>
	</h1>
	<p>フロント</p>
	<p>テンプレートはfront-page.php</p>

</div>


<main class="new-posts__wrapper content-width">
	<div class="new-posts">
		<h2>最新の投稿！</h2>
		<ul>
			<?php
			$args = array(
				'posts_per_page' => 3 // 表示件数の指定
			);
			$posts = get_posts($args);
			foreach ($posts as $post) : // ループの開始
				setup_postdata($post); // 記事データの取得
			?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
				<li>
					<?php the_author(); ?>
				</li>
				<hr>
				<?php
			endforeach; // ループの終了
			wp_reset_postdata(); // 直前のクエリを復元する
			?>
		</ul>
	</div><!-- /.new-posts -->

	<div class="new-posts">
		<h2>教材の最新投稿</h2>
		<ul>
			<?php
			$args = array(
				'posts_per_page' => 3, // 表示件数の指定
				'post_type' => 'materials',
			);
			$posts = get_posts($args);
			foreach ($posts as $post) : // ループの開始
				setup_postdata($post); // 記事データの取得
			?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
				<li>
					<?php the_author(); ?>
				</li>
				<hr>
				<?php
			endforeach; // ループの終了
			wp_reset_postdata(); // 直前のクエリを復元する
			?>
		</ul>
	</div><!-- /.new-posts -->


	<div class="new-posts">
		<h2>実績の最新投稿</h2>
		<ul>
			<?php
			$args = array(
				'posts_per_page' => 3, // 表示件数の指定
				'post_type' => 'performance',
			);
			$posts = get_posts($args);
			foreach ($posts as $post) : // ループの開始
				setup_postdata($post); // 記事データの取得
			?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
				<li>
					<?php the_author(); ?>
				</li>
				<hr>
				<?php
			endforeach; // ループの終了
			wp_reset_postdata(); // 直前のクエリを復元する
			?>
		</ul>
	</div><!-- /.new-posts -->


</main>
<img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/images/site-map.png" alt="">



<?php get_footer(); ?>



</body>

</html>
