
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
<?php else : ?>
	<span>タグ設定無し</span>
<?php endif; ?>
