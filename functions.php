<?php
add_action('init', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	// メニューサポート
	register_nav_menus([
		'global-menu' => 'グローバルメニュー',
		'footer-menu' => 'フッターメニュー',
	]);
});


//カスタム投稿タイプの設定
function meiiku_create_post_type()
{
	register_post_type(
		'materials',
		array(
			'labels' => array(
				'name' => '教材名',
				'singular_name' => '教材名',
			),
			'public' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'show_in_rest' => true,
			'taxonomies' => ['custom_taxonomy'],
			'supports' => array(
				'title',
				'custom-fields',
				'author',
				'editor',
				'excerpt',
				'thumbnail',
			),
		)
	);
	register_post_type(
		'performance',
		array(
			'labels' => array(
				'name' => '導入実績',
				'singular_name' => '導入実績',
			),
			'public' => true,
			'show_in_rest' => true,
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
}
add_action('init', 'meiiku_create_post_type', 1);

// 教材検索投稿タイプのカスタムタクソノミーの設定
function create_material_taxonomy()
{
	register_taxonomy(
		'material_genre', // タクソノミー名
		'materials', // 関連付けるカスタム投稿タイプ
		array(
			'label' => '教材ジャンル', // 管理画面のメニューに表示されるテキスト
			'singular_label' => '教材ジャンル', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => '教材ジャンルー一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => '教材ジャンルを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical' => true, // 階層関係を持たせるかどうか
			'show_in_quick_edit' => true,

		)
	);
}
add_action('init', 'create_material_taxonomy');

// 実績投稿タイプのカスタムタクソノミーの設定
function create_performance_taxonomy()
{
	register_taxonomy(
		'performance_genre', // タクソノミー名
		'performance', // 関連付けるカスタム投稿タイプ
		array(
			'label' => '実績ジャンル', // 管理画面のメニューに表示されるテキスト
			'singular_label' => '実績ジャンル', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => '実績ジャンルー一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => '実績ジャンルを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,

			'hierarchical' => true, // 階層関係を持たせるかどうか
			'show_in_quick_edit' => true,

		)
	);
}
add_action('init', 'create_performance_taxonomy');
