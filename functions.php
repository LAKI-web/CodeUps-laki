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
	add_theme_support('post-thumbnails'); //アイキャッチ
	add_theme_support('automatic-feed-links'); //RSSフィード
	add_theme_support('title-tag'); //タイトルタグ自動生成
	add_theme_support(
		'html5',
		array( //HTML5のタグで出力
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');


/* --------------------------------------------
* CSSとJavaScriptの読み込み
* 
*  @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
* -------------------------------------------- */

function my_script_init()
{
	wp_enqueue_style('my', get_theme_file_uri('/css/styles.css'));
	wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
	wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap');

	wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', ['jquery']);
	wp_enqueue_script('my', get_theme_file_uri('/js/script.js'), ['jquery'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/* --------------------------------------------
* WP-PageNaviのCSSを読み込ませない
* -------------------------------------------- */
function my_deregister_styles()
{
	wp_deregister_style('wp-pagenavi');
}
add_action('wp_print_styles', 'my_deregister_styles', 100);

/* --------------------------------------------
* カスタム投稿タイプ【ブログ】：メインクエリの変更（ブログのアーカイブページにて表示件数を9件にする）
* -------------------------------------------- */

function change_set_works($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_post_type_archive('works')) {
		$query->set('posts_per_page', '6');
		return;
	}
}
add_action('pre_get_posts', 'change_set_works');

/* --------------------------------------------
* カスタム投稿タイプ【ブログ】：メインクエリの変更（ブログのアーカイブページにて表示件数を9件にする）
* -------------------------------------------- */

function change_set_blog($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_post_type_archive('blog')) {
		$query->set('posts_per_page', '9');
		return;
	}
}
add_action('pre_get_posts', 'change_set_blog');

/* --------------------------------------------
* カスタムタクソノミー【ブログカテゴリー】：メインクエリの変更（ブログのカテゴリーアーカイブページにて表示件数を3件にする）
* -------------------------------------------- */
function change_set_blog_category($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_tax('blog_category')) {
		$query->set('posts_per_page', '3');
		return;
	}
}
add_action('pre_get_posts', 'change_set_blog_category');


/* --------------------------------------------
* カスタム投稿タイプ【ブログ】：アーカイブページ抜粋文の長さ変更
* -------------------------------------------- */
function change_excerpt_length()
{
	$length = 80;
	if (is_front_page() || is_post_type_archive('blog') || is_tax('blog_category')) {
		return 30; //リターンした時点で処理は終了する
	}
	return $length; //デフォルト110文字
}
add_filter('excerpt_length', 'change_excerpt_length', 999);


/* --------------------------------------------
* カスタム投稿タイプ【ブログ】：[…]を変更
* -------------------------------------------- */
function change_excerpt_more()
{
	if (is_front_page() || is_post_type_archive('blog') || is_tax('blog_category')) {
		return '...'; //リターンした時点で処理は終了する
	}
}
add_filter('excerpt_more', 'change_excerpt_more');

/* --------------------------------------------
* カスタム投稿タイプ【ブログ】：アーカイブページタイトルの長さ変更
* -------------------------------------------- */
// function title_char_change($title)
// {
// 	if (mb_strlen($title) > 20 && !(is_front_page())
// 	&& !(is_single()) && !(is_home()) ) {
// 		$title = mb_substr($title, 0, 20) . '...'; // 制限させる文字数と省略文字を指定
// 	}
// 	return $title;
// }
// add_filter('the_title', 'title_char_change');

/*-----------------------------------
* 文字数制限用
-----------------------------------*/
function text_restriction( $text, $count, $change ) {
	//取得したテキストのショートコードやhtmlを削除
  $get_txt = strip_tags(strip_shortcodes($text));
  //文字が指定数を超えているか判別
  if( mb_strlen( $get_txt, 'UTF-8' ) > $count ){
		$rtxt = mb_substr( $get_txt, 0, $count, 'UTF-8' ) . $change;
    return $rtxt;
  } else {
		return $get_txt;
  }
}

/* --------------------------------------------
* スラッグ名が日本語だったら自動的に投稿タイプ＋id付与へ変更（スラッグを設定した場合は適用しない）
* -------------------------------------------- */
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
	if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
		$slug = utf8_uri_encode($post_type) . '-' . $post_ID;
	}
	return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);