<?php
if (has_post_thumbnail()) {
	the_post_thumbnail('medium');
} else { ?>
	<img src="<?php echo get_template_directory_uri(); ?>/images/img_logo.png" alt="デフォルト画像">
<?php
}
?>
