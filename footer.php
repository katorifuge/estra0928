<footer class="footer">
  <div class="footer__wrap flex__item container">
    <div class="footer__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/estra_logo.png" alt="estralogo"></a>
    </div>

    <nav class="footer__nav">
      <ul class="footer__nav-list flex__item">
        <li><a href="<?php echo home_url("about"); ?>" class="footer__nav-list-link">About</a>
          <ul>
            <li><a href="<?php echo home_url("member"); ?>" class="footer__nav-list-link-child">メンバー</a></li>
            <li><a href="<?php echo home_url("philosophy"); ?>" class="footer__nav-list-link-child">経営理念</a></li>
            <li><a href="<?php echo home_url("company"); ?>" class="footer__nav-list-link-child">会社概要</a></li>
            <li><a href="<?php echo home_url("greeting"); ?>" class="footer__nav-list-link-child">代表挨拶</a></li>
          </ul>
        </li>
        <li><a href="<?php echo home_url("news"); ?>" class="footer__nav-list-link">News</a></li>
        <li><a href="<?php echo home_url("service"); ?>" class="footer__nav-list-link">Service</a></li>
        <li><a href="<?php echo home_url("recruit"); ?>" class="footer__nav-list-link">Recruit</a>
          <ul>
            <li><a href="<?php echo home_url("interview"); ?>" class="footer__nav-list-link-child">インタビュー</a></li>
            <li><a href="<?php echo home_url("environment"); ?>" class="footer__nav-list-link-child">働く環境</a></li>
          </ul>
        </li>
        <li><a href="<?php echo home_url("contact"); ?>" class="footer__nav-list-link">Contact</a></li>
        <li><a href="<?php echo home_url("privacy"); ?>" class="footer__nav-list-link line-none">個人情報保護方針</a></li>
      </ul>
    </nav>
  </div>
  <div class="footer__contact">
    <div class="contact__inv"><i class="far fa-envelope size"></i><a href="<?php echo home_url("contact"); ?>">お問い合わせは<span>こちら</span>まで</a></div>
    <div class="twitter__icon"><a href="https://twitter.com/coachtech_jp"><i class=" fab fa-twitter size"></i></a></div>

    <a class="twitter-timeline" data-width="350" data-height="250" href="https://twitter.com/coachtech_jp?ref_src=twsrc%5Etfw">Tweets by coachtech_jp</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  
  <p class="copyright">&copy;estra</p>
 
</footer>
<?php wp_footer(); ?>

</body>

</html>