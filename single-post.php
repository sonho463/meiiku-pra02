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

			<?php the_post_thumbnail('thumbnail'); ?>

			<h3><?php the_title(); ?></h3>
			<span><?php echo get_the_date(); ?></span>
			<span><?php the_category(); ?></span>
			<span><?php the_author(); ?></span>
			<p><?php the_tags(); ?></p>
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




<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>

</body>

</html>
