<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<div class="content-width">
	<h1>コラム〜ブログ投稿ページ</h1>

	<h2>single-post.php</h2>
</div><!-- /.content-width -->

<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('content-width'); ?>>

			<?php get_template_part('includes/get_post_thumbnail') ?>

			<h3><?php the_title(); ?></h3>
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
					if ($tags) :
						foreach ($tags as $tag) :
							$name = $tag->name;
							$slug = $tag->slug;
					?>
							<a href="<?php get_template_directory_uri(); ?>/tag/<?php echo $slug; ?>">#<?php echo $name; ?></a>,
						<?php endforeach; ?>
					<?php endif; ?>

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



			<hr>

			<p><?php wp_link_pages(); ?></p>
			<div class="content">
				<p><?php the_content(); ?></p>

			</div><!-- /.content -->


		</article>

		<ul class="content-width">
			<li>
				<?php previous_post_link(); ?>
			</li>
			<li>
				<?php next_post_link(); ?>
			</li>
		</ul>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

</body>

</html>
