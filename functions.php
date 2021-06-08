<?php
add_action('init', function () {
	// メニューサポート
	register_nav_menus([
		'global-menu' => 'グローバルメニュー',
		'footer-menu' => 'フッターメニュー'
	]);
});
