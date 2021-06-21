<?php
$taxonomy = $args;



// 投稿に付けられたターム（カテゴリー）の ID を取得する。
$post_terms = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
// リンクの区切り文字
$separator = ', ';

if (!empty($post_terms) && !is_wp_error($post_terms)) {

	$term_ids = implode(',', $post_terms);
	$terms = wp_list_categories('title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids);
	$terms = rtrim(trim(str_replace('<br />',  $separator, $terms)), $separator);
	//渡された変数に'_tag'が含まれていればタグの先頭に＃をつける
	if (preg_match('/tag/', $args)) {
		//$subjectのなかにbcが含まれている場合
		$terms = str_replace('">', '">#', $terms);
	};

	// 投稿のカテゴリーを表示
	echo  $terms;
}
