<?php get_header(); ?>
<header>
	<?php get_template_part('includes/header'); ?>
</header>

<div class="content-width">
	<h1><?php the_title(); ?>
	</h1>
	<p>テンプレートはpage.php</p>

</div>

<main class="content-width">
	<?php the_content(); ?>




</main>



<?php get_footer(); ?>



</body>

</html>
