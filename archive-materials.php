<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>


<?php
if (have_posts()) : ?>
	<div class="content-width">

		<h1>教材のインデックスページ</h1>
		<h2>archive-materials.phpです</h2>
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
					<li>
						<?php the_author(); ?>
					</li>
					<li><?php the_taxonomies(); ?> </li>
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
