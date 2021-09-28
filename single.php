<?php get_header(); ?>
<main>
  <div class="single-interview padding__top">
    <div class="container">
      <div class="page__tag">
        <div class="page__tag-sub-ttl">Rcruit</div>
        <h1 class="page__tag-ttl">インタビュー</h1>
      </div>
      <div class="single-interview__container">
        <div class="single-interview__pagenation-archive-interview"><a href="<?php echo home_url("interview"); ?>">インタビュー一覧へ</a></div>
        <?php if (have_posts()) : the_post(); ?>
          <div class="single-interview__item">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
            <?php endif; ?>
            <div class="single-interview__item-profile">
              <p class="single-interview__item-profile-txt">
                <?php the_title(); ?>
              </p>
            </div>
          </div>
          <div class="single-interview__item-txt">
            <?php the_content(); ?>
          </div>
      </div>
    <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>