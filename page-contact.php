<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>

<div class="content-width">
	<h2>こちらはコンタクトページ</h2>
	<p>
		プラグインで、フォームを導入する予定<br>
		使用テンプレートは　page-contact.php
	</p>
	<article id="post-<?php the_ID(); ?>"<?php post_class();?>>
			<header class="entry-header">
				<h2 class="entry-title">
					<?php the_ID(); ?>
					<?php the_title(); ?>
				</h2><!-- /.entry-title -->
			</header><!-- /.entry-header -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- /.entry-content -->

	</article>
</div><!-- /.content-width -->



		</main>

<?php
	endwhile;
endif;
?>

<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>


</body>

</html>
