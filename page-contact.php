<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<main>
  <div class="contact padding__top">
    <div class="container">
      <div class="page__tag">
        <div class="page__tag-sub-ttl">Contact</div>
        <h1 class="page__tag-ttl">お問い合わせ</h1>
      </div>
    </div>
    <div class="contact__container">
      <div class="contact__wrap">
        <h1 class="contact__ttl">フォームからのお問い合わせ</h1>
        <p class="contact__txt">記入内容の確認後、2〜3営業日以内にご連絡させていただきます。</p>
      </div>

      <form action="" method="post" name="form">
        <!-- <div class="contact__form">
          <div class="contact__form-wrap">
            <div class="contact__form-item">
              <p class="contact__form-item-label">
                <span class="contact__form-item-label-required">必須</span>お名前
              </p>
              <input type="text" name="name" class="contact__form-item-input">
            </div>
            <p class="contact__form-item-example">例）佐藤　花子</p>

            <div class="contact__form-item">
              <p class="contact__form-item-label">
                <span class="contact__form-item-label-required">必須</span>フリガナ
              </p>
              <input type="text" name="kana" class="contact__form-item-input">
            </div>
            <p class="contact__form-item-example">例）サトウ　ハナコ</p>

            <div class="contact__form-item">
              <p class="contact__form-item-label">
                <span class="contact__form-item-label-required">必須</span>メールアドレス
              </p>
              <input type="text" name="email" class="contact__form-item-input">
            </div>
            <p class="contact__form-item-example">例）contact@xxxxx.com</p>

            <div class="contact__form-item">
              <p class="contact__form-item-label">
                郵便番号
              </p>
              <input type="text" name="postal-code" class="contact__form-item-input">
            </div>
            <p class="contact__form-item-example">例）123-4567</p>

            <div class="contact__form-item">
              <p class="contact__form-item-label">
                住所
              </p>
              <input type="text" name="address" class="contact__form-item-input">
            </div>
            <p class="contact__form-item-example">例）東京都千代田区神田123-45</p>

            <div class="contact__form-item">
              <p class="contact__form-item-label">
                <span class="contact__form-item-label-required">必須</span>お問い合わせ内容
              </p>
              <select name="item" class="choice">
                <option value="">- 選択してください</option>
                <option value="ご質問・お問い合わせ">- 中途採用に関して</option>
                <option value="ご質問・お問い合わせ">- 新卒採用に関して</option>
                <option value="ご質問・お問い合わせ">- その他のお問い合わせ</option>
              </select>
            </div>
            <textarea class="contact__form-item-textarea" name="content" rows="5"></textarea>
            <div>
              <button class="contact__submit" type="submit" value="送信">送信
              </button>
            </div>
          </div>
        </div> -->
        <?php echo do_shortcode('[contact-form-7 id="14" title="お問い合わせフォーム"]'); ?>
      </form>
    </div>
  </div>

</main>
<?php get_footer(); ?>