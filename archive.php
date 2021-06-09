<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>


<h1>コラムの投稿インデックスページ</h1>
<h2>archive.phpです</h2>

<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>

<?php
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?>
	<div>
		<?php the_date(); ?>
		<br />
		<?php the_title(); ?>
		<?php the_excerpt(); ?>
	</div>
<?php
endforeach;
wp_reset_postdata();
?>



<?php
	endwhile;
endif;
?>


<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>

</body>

</html>
