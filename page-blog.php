<?php
global $post;
$args = array('posts_per_page' => 8);
$myposts = get_posts($args);
foreach ($myposts as $post) {
	setup_postdata($post);
?>
	<div class="item">
		<div class="img">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>
		<div class="time">
			<?php the_time('Y.m.d') ?>
		</div>
		<div class="category">
			<?php the_category(',') ?>
		</div>
	</div>
<?php
}
wp_reset_postdata();
?>
