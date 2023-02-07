/* ハンバーガーメニューの処理 */
jQuery(function () {
    jQuery(".ham__icon").on("click", function () {
        $(this).toggleClass("is-active");
        $("nav").toggleClass("is-active");
        $(".slideIn__bk").toggleClass("is-active");
    });
});
/* pcの時、ハンバーガーメニューをクリックした後に黒い背景を押すと閉じる */
jQuery(".slideIn__bk").on("click", function () {
    $(".ham__icon").toggleClass("is-active");
    $("nav").toggleClass("is-active");
    $(".slideIn__bk").toggleClass("is-active");
});

/* spのヘッダーのアコーディオンの処理 */
jQuery(".slideIn__item span a").on("click", function () {
    $(this).toggleClass("is-active");
});
jQuery(".slideIn__item span").on("click", function () {
    // $(this).children("button").toggleClass("is-active");
    // $(this).nextAll(".downUp").slideToggle();
    if (!($(this).children("a").hasClass("is-active"))) {
        $(this).children("button").toggleClass("is-active");
        $(this).nextAll(".downUp").slideToggle();
    }
});

/* 画像フェードイン */
$(function () {
    $(window).scroll(function () {
        const windowHeight = $(window).height();
        const scroll = $(window).scrollTop();

        $('.element').each(function () {
            const targetPosition = $(this).offset().top;
            if (scroll > targetPosition - windowHeight + 100) {
                $(this).addClass("is-fadein");
            }
        });
    });
});

/* footerのアコーディオン */
jQuery(".footer__internalLink span a").on("click", function () {
    $(this).toggleClass("is-active");
});
jQuery(".footer__internalLink").on("click", function () {
    if (!($(this).children("span").children("a").hasClass("is-active"))) {
        $(this).children("span").children("button").toggleClass("is-active");
        $(this).children("ol").slideToggle();
    }
});