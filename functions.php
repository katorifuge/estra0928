<?php
// js,cssの設定

function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');


function load_js()
{
  //管理画面を除外
  if (!is_admin()) {
    //事前に読み込まれるjQueryを解除
    wp_deregister_script('jquery');

    //Google CDNのjQueryを出力
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), NULL, true);
  }
}
add_action('init', 'load_js');




// アイキャッチ画像
add_theme_support('post-thumbnails');


// カスタム投稿追加〜News
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('news', [
    'labels' => [
      'name'          => 'ニュース',
      'singular_name' => 'news',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);
  register_taxonomy('genre', 'news', [
    'label' => 'ニュースカテゴリー',
    'hierarchical' => true,
    'show_in_rest'  => true,
  ]);
}
function custom_template_include($template)
{
  if (is_single() && in_category('news')) {
    $new_template = locate_template(array('single-news.php'));
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include', 99);


// カスタム投稿のパーマリンクを記事IDに設定
add_filter('post_type_link', 'news_custom_post_type_link', 1, 2);
function news_custom_post_type_link($link, $post)
{
  if ('news' === $post->post_type) {
    return home_url('/news/' . $post->ID);
  } else {
    return $link;
  }
}

add_filter('rewrite_rules_array', 'news_custom_post_rewrite_rules_array');
function news_custom_post_rewrite_rules_array($rules)
{
  $new_rules = array(
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );
  return $new_rules + $rules;
}

// PageNaviカスタム
function my_pagenavi($args = array())
{
  if (!function_exists('wp_pagenavi')) return;

  $defaults = array(
    'before' => '<nav id="pager">',
    'after' => '</nav>',
    'wrapper_tag' => 'ul',
  );
  $args = is_array($args) ? array_merge($defaults, $args) : $args;
  wp_pagenavi($args);
}
