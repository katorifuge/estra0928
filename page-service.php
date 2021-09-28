<?php
/*
Template Name: service
*/
?>
<?php get_header(); ?>
<main>
  <div class="service padding__top">
    <div class="container">
      <div class="page__tag">
        <div class="page__tag-sub-ttl">Service</div>
        <h1 class="page__tag-ttl">サービス</h1>
      </div>
      <div class="service__coachtech">
        <h1 class="service__coachtech-ttl">フリーランス特化型プログラミングスクール</h1>
        <div class="service__coachtech-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/coachtech-logo.png" alt="coachtech-logo">
        </div>
        <div class="service__coachtech-txt">オンラインプログラミングスクールの中でも挫折率が3%と圧倒的に低い実績を残しています。生徒様に応じた学習カリキュラムは基礎学習と応用学習を用意しており、フリーランスへの道を歩むことができます。
        </div>
        <div class="service__coachtech-math">
          <h2 class="service__coachtech-math-ttl">数字で見る「COACHTECH」</h2>
          <ul class="service__coachtech-math-list">
            <li class="service__coachtech-math-list-txt">累計生徒様数200名突破</li>
            <li class="service__coachtech-math-list-txt">挫折率3%</li>
            <li class="service__coachtech-math-list-txt">話題のプログラミングスクール1位</li>
          </ul>
        </div>
        <div class="service__coachtech-feature">
          <h2 class="service__coachtech-feature-ttl">COACHTECH<span class="number__style">3</span>つの特徴</h2>
          <ul class="service__coachtech-feature-list">
            <li class="service__coachtech-feature-list-txt"><span class="number__style">1.</span>スキルレベルを最短で高めるオーダーメイドカリキュラム</li>
            <li class="service__coachtech-feature-list-txt"><span class="number__style">2.</span>現役エンジニアの専属コーチが学習サポート</li>
            <li class="service__coachtech-feature-list-txt"><span class="number__style">3.</span>エラーや疑問点をすぐに解決できる質問チャットサポート</li>
          </ul>
        </div>
      </div>
      <div id="stageee" class="service__stageee">
        <h2 class="service__stageee-ttl">教育機関向け業務効率化支援ツール</h2>
        <div class="service__stageee-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/stageee-logo.png" alt="stageee-logo">
        </div>
        <div class="service__stageee-txt">日本の教育課題は民間企業だからこそ解決できるものがあると信じています。Stageeeはestra創業前からずっと同じサービス名で開発を進め、何度もピボットを繰り返しています。弊社はCOACHTECHで理想の教育モデルを構築し、「Stageee」でそのモデルの普及をすることで日本の教育業界を変革します。<br>
          <br>Comming soon…
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>