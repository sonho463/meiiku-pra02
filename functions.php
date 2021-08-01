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


// 投稿アーカイブページ設定
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'columns'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


//カスタム投稿タイプの設定
function meiiku_create_post_type()
{
	register_post_type(
		'materials',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
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
			'exclude_from_search' => false, // false 検索対象に含める
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
	register_taxonomy(
		'material_tag', // タクソノミー名
		'materials', // 関連付けるカスタム投稿タイプ
		array(
			'label' => '教材タグ', // 管理画面のメニューに表示されるテキスト
			'singular_label' => '教材タグ', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => '教材タグ一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => '教材タグを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical' => false, // 階層関係を持たせるかどうか
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

	register_taxonomy(
		'performance_tag', // タクソノミー名
		'performance', // 関連付けるカスタム投稿タイプ
		array(
			'label' => '教材タグ', // 管理画面のメニューに表示されるテキスト
			'singular_label' => '教材タグ', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => '教材タグ一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => '教材タグを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical' => false, // 階層関係を持たせるかどうか
			'show_in_quick_edit' => true,

		)
	);
}
add_action('init', 'create_performance_taxonomy');


function get_breadcrumb() {
	echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
	if (is_category() || is_single()) {
			echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
			the_category(' &bull; ');
					if (is_single()) {
							echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
							the_title();
					}
	} elseif (is_page()) {
			echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
			echo the_title();
	} elseif (is_search()) {
			echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
			echo '"<em>';
			echo the_search_query();
			echo '</em>"';
	}
}

// wp_head()からtitleタグを削除する
remove_action( 'wp_head', '_wp_render_title_tag', 1 );

//　カスタム投稿タイプを検索結果に含める
/*【出力カスタマイズ】検索対象をカスタム投稿タイプで絞り込む */
function my_pre_get_posts($query) {
  if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', array('post','page','materials','performance') );
  }
}
add_action( 'pre_get_posts','my_pre_get_posts' );
