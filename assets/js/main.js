$(document).ready(function() {
    $('.menu-item ').hover(function(){
        $(this).children('.dropdown-menu').addClass('is-open');
    },
    function() {
        $(this).children('.dropdown-menu').removeClass('is-open');
    });

    $('#owl-carousel').owlCarousel({
        items:1,
    margin:10,
    autoHeight:true,
    rtl:true,
    loop:true,
    });

    $('#owl-carousel1').owlCarousel({
    items:2,
    margin:10,
    rtl:true,
    loop:true,
    nav: true,
    dots: false,
    navText: ["<img src='/wp-content/themes/mytheme/assets/images/arr_right.png'>","<img src='/wp-content/themes/mytheme/assets/images/arr_left.png'>"],
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
        900 : {
            items: 2,
        },
        767 : {
            items: 1,
            nav: false,
            dots: false,
        },
        480 : {
            items: 1,
            nav: false,
            dots: false,
        },
        350 : {
            items: 1,
            nav: false,
            dots: false,
        }
    }
    });

    $('.see-more').click(function () {
        $('.note-content').addClass('open-content');
        $(this).css('display', 'none');
    });
    $('.see-less').click(function () {
        $('.note-content').removeClass('open-content');
        $('.see-more').css('display', 'block');
    });

        $(".vedio").fitVids();
        $(".vedio").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});

        AOS.init();

    $('.nav-icon-small').click(function() {
        $('.nav-small').addClass('open-menu');
    });
    $('.close-menu').click(function () {
        $('.nav-small').removeClass('open-menu');
    });
})