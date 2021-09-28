<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>
<main>
  <div class="archive-news padding__top">
    <div class="container">
      <div class="page__tag">
        <div class="page__tag-sub-ttl">News</div>
        <h1 class="page__tag-ttl">ニュース一覧</h1>
      </div>
      <div class="archive-news__container padding__top">
        <div class="archive-news__ctg">コーポレート</div>
        <div class="news-pagination">
          <div class="news-list-box">
            <ul>
              <div class="archive-news__wrap">

                <ul class="archive-news__list">
                  <!-- カスタム投稿タイプの一覧を表示 -->
                  <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  // 取得する投稿の条件を指定
                  $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 6,
                    'taxonomy' => 'genre', //②タクソノミー名を指定 (通常の「投稿」はcategory)
                    'field' => 'slug',   //'term_id'、'slug'など、次の term を指定するフィールド名を指定
                    'term' => 'corporate',  //③タームを指定
                    //'terms' => array('test','test2'), &nbsp;//③タームを指定 (複数の場合)
                    'paged' => $paged,
                    'orderby'     => 'date',
                    'order' => 'DESC'
                  );
                  // WP_Query オブジェクト（クエリオブジェクト）の生成
                  $my_query = new WP_Query($args);
                  ?>
                  <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>" class="archive-news__list-link"><?php the_title(); ?></a></li>
                  <?php endwhile;
                  endif; ?>
                  <?php wp_reset_query(); ?>
                </ul>
              </div>
              <?php my_pagenavi(array('query' => $my_query)); ?>
          </div>
        </div>
        <div class="archive-news__ctg">サービス</div>
        <div class="news-pagination">
          <div class="news-list-box">
            <ul>
              <div class="archive-news__wrap">
                <ul class="archive-news__list">
                  <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  // 取得する投稿の条件を指定
                  $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 6,
                    'taxonomy' => 'genre', //②タクソノミー名を指定 (通常の「投稿」はcategory)
                    'field' => 'slug',   //'term_id'、'slug'など、次の term を指定するフィールド名を指定
                    'term' => 'service',  //③タームを指定
                    //'terms' => array('test','test2'), &nbsp;//③タームを指定 (複数の場合)
                    'paged' => $paged,
                    'orderby'     => 'date',
                    'order' => 'DESC'
                  );
                  // WP_Query オブジェクト（クエリオブジェクト）の生成
                  $my_query = new WP_Query($args);
                  ?>
                  <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>" class="archive-news__list-link"><?php the_title(); ?>
                        </a></li>

                  <?php endwhile;
                  endif;
                  wp_reset_query(); ?>
                </ul>
              </div>
              <?php my_pagenavi(array('query' => $my_query)); ?>
          </div>
        </div>
      </div>
</main>
<?php get_footer(); ?>