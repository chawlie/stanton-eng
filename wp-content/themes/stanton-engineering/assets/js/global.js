$(function() {

$('.mobile-menu-button').on('click', function(){
$(this).toggleClass('active');
});

    /**
     * Mobile Menu Toggle
     * This script controls the toggling of mobile menu
     * which is set off canvas when inactive.
     */
    $('[data-toggle="mobile-nav"]').on('click', function() {
        $(this).toggleClass('active');
        $('.mobile-nav').toggleClass('open');
        $('.mobile-nav').scrollTop(0);
        $('body').toggleClass('mobile-menu-open');
        $('html').toggleClass('mobile-menu-open');
        return false;
    });

    /**
     * Mobile Menu - Child/Grandchild Items Toggle
     * This script controls the toggling of child and
     * grandchild menu items in the mobile menu.
     */
    $('.mobile-nav .caret').on('click', function() {
        if (!$(this).siblings('.sub-menu').hasClass('open')) {
            $(this).siblings('.sub-menu').addClass('open');
            $(this).removeClass('caret-down');
            $(this).addClass('caret-up');
        } else {
            $(this).siblings('.sub-menu').removeClass('open');
            $(this).removeClass('caret-up');
            $(this).addClass('caret-down');
        }
        return false;
    });
});

// Init Slick
$('.carousel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
  ],
});
