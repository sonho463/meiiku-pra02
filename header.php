<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<?php
if (is_home()) :
	$pageTitle = 'コラム〜授業をする前に';
elseif (is_archive()) :
	$pageTitle =  wp_strip_all_tags( get_the_archive_title() );
else :
	$pageTitle = get_the_title();
endif;
?>

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/style.css">
	<title><?php echo $pageTitle; ?> | <?php bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
