<?php
add_action('init', function () {
	add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails' );
	// メニューサポート
	register_nav_menus([
		'global-menu' => 'グローバルメニュー',
		'footer-menu' => 'フッターメニュー',
	]);
});


function meiiku_create_post_type(){
	register_post_type( 'materials',
	array(
		'labels' => array(
			'name' => '教材名',
			'singular_name' => '教材名',
		),
		'public' => true,
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'author',
			'excerpt',
			'thumbnail',
		),
	)
	);
	register_post_type( 'performance',
	array(
		'labels' => array(
			'name' => '導入実績',
			'singular_name' => '導入実績',
		),
		'public' => true,
		'menu_position' => 6,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'author',
			'excerpt',
			'thumbnail',
		),
	)
	);
}

add_action('init', 'meiiku_create_post_type',1);
