<?php get_header(); ?>
<main>
  <div class="front padding__top">
    <div class="front__firstview front__firstview-sp fixed-background">
      <div class="front-firstview__wrap uneCircle">
        <h1 class="front__firstview-content-eyecatch">Commit to the growth<br>
          for everyone
        </h1>
        <p class="front__firstview-content-sub-copy">　全ての人の成長にコミットする</p>
      </div>
    </div>
    <section class="front-about__container container">
      <div class="common__ttl">About</div>
      <div class="front-about__item">
        <h2 class="front-about__item-ttl">Technology × Coaching
        </h2>
        <p class="front-about__item-txt">株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーを導入することによって教育のDXを実現します。独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。</p>
        <div class="common__btn about__btn"><a href="<?php echo home_url("about"); ?>">もっと見る</a></div>
      </div>
    </section>
    <section class="front-news__container ">
      <div class="common__ttl">News</div>
      <div class="front-news__item">
        <?php
        $news_query = new WP_Query(
          array(
            'post_type'      => 'news',
            'posts_per_page' => 1
          )
        );
        ?>
        <?php if ($news_query->have_posts()) : ?>
          <?php while ($news_query->have_posts()) : ?>
            <?php $news_query->the_post(); ?>
            <div class="front-news__txt"><a href="<?php the_permalink(); ?>">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
              </a></div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
        <div class="common__btn news__btn">
          <a href="<?php echo home_url("news"); ?>">一覧へ</a>
        </div>
      </div>
    </section>
    <section class="front-service">
      <div class="common__ttl">Service</div>
      <div class="front-service__wrap slide__bottom show">
        <div class="front-service__item-coachtech">
          <div class="front-service__item-coachtech-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/front-service-coachtech.jpg" />
          </div>
          <div class="front-service__item-wrap">
            <h3 class="front-service__item-ttl">フリーランス特化型プログラミングスクール</h3>
            <div class="front-service__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/coachtech-logo.png" alt="coachtech-logo" />
            </div>
            <p class="front-service__item-txt">COACHTECH(コーチテック)はフリーランス特化型のオンラインコーチングプログラミングスクールです。プログラミング未経験の方でも、「独自の学習ノウハウ」でフリーランスエンジニアを目指すことができます。</p>
            <div class="common__btn service__btn"><a href="<?php echo home_url("service"); ?>">もっと見る</a></div>
          </div>
        </div>
        <div class="front-service__item-stageee">
          <div class="front-service__item-stageee-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/front-service-stageee.jpg" />
          </div>
          <div class="front-service__item-wrap">
            <h3 class="front-service__item-ttl">教育機関向け業務効率化支援ツール</h3>
            <div class="front-service__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/stageee-logo.png" alt="stageee-logo" />
            </div>
            <p class="front-service__item-txt">Stageee(ステージー)はコーチングに特化した業務効率化支援ツールです。Web会議、面談予約、チャット、学習計画作成、学習状況の把握、教材管理、指導報告書作成といったコーチングにおいて必要な機能が1つにまとまった業務効率化を支えるSaaS</p>
            <div class="common__btn service__btn"><a href="<?php echo home_url("service#stageee"); ?>">もっと見る</a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="front-recruit">
      <div class="common__ttl">Recruit</div>
      <div class="front-recruit__wrap left-to-right">
        <h2 class="front-recruit__ttl">日本の教育を変革する最前線で活躍する人材に</h2>
        <p class="front-recruit__txt">全員がリスクを恐れずにチャレンジし、<br>社員一人一人が活躍できる環境をみんなで作り上げる</p>
        <div class="common__btn"><a href="<?php echo home_url("recruit"); ?>">もっと見る</a></div>
      </div>
    </section>
  </div>

</main>
<a href="#top" class="page_top"><i class="fa fa-angle-double-up"></i></a>
<?php get_footer(); ?>