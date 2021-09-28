<?php get_header(); ?>
<main>
  <div class="single-news padding__top">
    <div class="container">
      <div class="page__tag">
        <div class="page__tag-sub-ttl">News</div>
        <h1 class="page__tag-ttl">ニュース</h1>
      </div>
      <div class="single-news__container">
        <div class="single-news__pagenation-archive-news"><a href="<?php echo home_url("news"); ?>">ニュース一覧へ</a></div>
        <div class="single-news__item">
          <?php if (have_posts()) : the_post(); ?>
            <h1 class="single-news__ttl">
              <?php the_title(); ?>
            </h1>
            <div class="single-news__txt">
              <?php the_content(); ?>
            </div>
        </div>
      </div>
    <?php endif; ?>
    <!-- ページネーション -->
    

    <!-- ページネーションSPバージョン -->
    <!-- <div class="single-news__pagenation-sp flex__item">
      <a class="page-numbers" href="">»</a>
    </div> -->
    </div>
  </div>
</main>
<?php get_footer(); ?>