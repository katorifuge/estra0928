

// ハンバーガーメニュー

function toggleNav() {
  const body = document.body;
  const hamburger = document.getElementById("js-hamburger");
  const overlay = document.getElementById("js-overlay");
  hamburger.addEventListener("click", function () {
    body.classList.toggle("nav-open");
  });
  overlay.addEventListener("click", function () {
    body.classList.remove("nav-open");
  });
}
toggleNav();

// ハンバーガーメニューオープン時の背景固定
jQuery(function () {
  let state = false;
  let scrollpos;
  jQuery("#js-hamburger,#js-overlay").on("click", function () {
    if (state == false) {
      scrollpos = jQuery(window).scrollTop();
      jQuery("body").addClass("fixed").css({ top: -scrollpos });
      state = true;
    } else {
      jQuery("body").removeClass("fixed").css({ top: 0 });
      window.scrollTo(0, scrollpos);
      state = false;
    }
  });
});

// ページTOP
jQuery(function() {
    var pageTop = jQuery('.page_top');
    pageTop.hide();
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            pageTop.fadeIn();
        } else {
            pageTop.fadeOut();
        }
    });
    pageTop.click(function () {
        jQuery('body, html').animate({scrollTop:0}, 500);
        return false;
    });
});

// front-recruit__フェードイン
jQuery(function($){
    $(window).scroll(function (){
        $('.left-to-right, .down-to-top').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150){
                $(this).addClass('scrollin');
            }
        });
    });
});

// about__threepoint-container フェードイン
jQuery(function(){
   jQuery(window).on('load scroll', function() {
      var winScroll = jQuery(window).scrollTop();
      var winHeight = jQuery(window).height();
      var scrollPos = winScroll + (winHeight * 0.8);

      jQuery(".show").each(function() {
         if(jQuery(this).offset().top < scrollPos) {
            jQuery(this).css({opacity: 1, transform: 'translate(0, 0)'});
         }
      });
   });
});

// envilonment__ボーダー
jQuery(function() {
    winW = jQuery(window).width();
    spped = 3000;
    jQuery('.border-top__anim').css({
        left: winW / 2
    }).animate({
        left: 0,
        width: winW
    }, spped);
});

jQuery(function() {
    winW = jQuery(window).width();
    spped = 3000;
    jQuery('.border-bottom__anim').css({
        left: winW / 2
    }).animate({
        left: 0,
        width: winW
    }, spped);
});

// Recruit__アコーディオンメニュー
jQuery(function () {
  // タイトルをクリックすると
  jQuery(".js-accordion-title").on("click", function () {
    // クリックした次の要素を開閉
    jQuery(this).next().slideToggle(300);
    // タイトルにopenクラスを付け外しして矢印の向きを変更
    jQuery(this).toggleClass("open", 300);
  });
});


