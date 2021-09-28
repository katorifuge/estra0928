<?php
/*
Template Name: interview
*/
?>
<?php get_header(); ?>
<main>
  <div class="archive-interview padding__top">
    <div class="container">
      <div class="page__tag">
        <div class="page__tag-sub-ttl">Recruit</div>
        <h1 class="page__tag-ttl">インタビュー</h1>
      </div>
    </div>
    <div class="pagination">
      <div class="list-box">
        <ul>
          <div class="archive-interview__container">

            <?php if (have_posts()) : ?>

              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $the_query = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
                'paged' => $paged,
                'posts_per_page' => 6, // 表示件数
                'orderby'     => 'date',
                'order' => 'DESC'
              ));
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
              ?>

                  <!-- メインループ開始 -->
                  <div class="archive-interview__item">
                    <a href="<?php the_permalink(); ?>">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'archive-interview__item-img']); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" class="archive-interview__item-img" alt="no-img">
                      <?php endif; ?>
                      <div class="archive-interview__item-profile">
                        <div class="archive-iterview__item-txt">
                          <?php
                          if (mb_strlen($post->post_title, 'UTF-8') > 50) {
                            $title = mb_substr($post->post_title, 0, 50, 'UTF-8');
                            echo $title . '…';
                          } else {
                            echo $post->post_title;
                          }
                          ?>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
              <?php else : ?>
                <p>投稿がありません。</p>
              <?php endif; ?>
        </ul>
      </div>
      <div class="pnavi">
        <?php //ページリスト表示処理
              global $wp_rewrite;
              $paginate_base = get_pagenum_link(1);
              if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
                $paginate_format = '';
                $paginate_base = add_query_arg('paged', '%#%');
              } else {
                $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
                  user_trailingslashit('page/%#%/', 'paged');
                $paginate_base .= '%_%';
              }
              echo paginate_links(array(
                'base' => $paginate_base,
                'format' => $paginate_format,
                'total' => $the_query->max_num_pages,
                'mid_size' => 1,
                'current' => ($paged ? $paged : 1),
                'prev_text' => '< 前へ',
                'next_text' => '次へ >',
              ));
        ?>
      </div>
    </div>
  <?php else : ?>
  <?php endif; ?>
  </div>
  </div>
</main>
<?php get_footer(); ?>