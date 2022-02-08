<?php

/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
	wp_enqueue_style('my', get_theme_file_uri('/css/styles.css'));
	wp_enqueue_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
	wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap');

	wp_enqueue_script('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', ['jquery']);
	wp_enqueue_script('my', get_theme_file_uri('/js/script.js'), ['jquery'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');



/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');


//制作実績ページ
function change_posts_per_page($query)
{
	/* 管理画面,メインクエリに干渉しないために必須 */
	if (is_admin() || !$query->is_main_query()) {
		return;
	}

	/* カテゴリーページの表示件数を20件にする */
	if ($query->is_post_type_archive('works')) {
		$query->set('posts_per_page', '6');
		return;
	}
}
add_action('pre_get_posts', 'change_posts_per_page');

//ブログページ
function change_posts_per_page($query)
{
	/* 管理画面,メインクエリに干渉しないために必須 */
	if (is_admin() || !$query->is_main_query()) {
		return;
	}

	/* カテゴリーページの表示件数を20件にする */
	if ($query->is_post_type_archive('blog')) {
		$query->set('posts_per_page', '9');
		return;
	}
}
add_action('pre_get_posts', 'change_posts_per_page');


//WP-PageNaviのCSSを読み込ませない

function my_deregister_styles()
{
	wp_deregister_style('wp-pagenavi');
}
add_action('wp_print_styles', 'my_deregister_styles', 100);
