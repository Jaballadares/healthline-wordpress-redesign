$(function() {

  /*jshint devel:true */
  /*global Modernizr:true */



  // --------------------
  // SVG Fallback
  // --------------------

  if (!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }

  if (window.location.hash && $(window.location.hash).length) {
    setTimeout(function() {
      var $element = $(window.location.hash);
      var offset = $element.css("padding-top").replace('px', '');
      var position = $element.offset().top;
      window.scrollTo(0, (position - (100 - offset)));
    }, 300);
  }


  // --------------------
  // Form Validation
  // --------------------

  $('.form-get-started').validate({
    rules: {
      first_name: {
        required: true
      },
      last_name: {
        required: true
      },
      company: {
        required: true
      },
      title: {
        required: true
      },
      city: {
        required: true
      },
      state: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      postal_code: {
        required: true
      }
    }
  });


  $('.form-login').validate({
    rules: {
      email: {
        required: true,
        email: true
      }
    }
  });

  $('.form-newsletter').validate({
    rules: {
      first_name: {
        required: true
      },
      last_name: {
        required: true
      },
      email: {
        required: true,
        email: true
      }
    }
  });


  $('.landing-page-form form').validate({
    rules: {
      first_name: {
        required: true
      },
      last_name: {
        required: true
      },
      company: {
        required: true
      },
      title: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      }
    }
  });


  // --------------------
  // Mobile Nav Hide/Show
  // --------------------

  var mobileNav = $('a.mobile-nav');

  mobileNav.on('click', function(e) {
    e.preventDefault();
    $('ul.nav').toggleClass('show');
  });


  // --------------------
  // Header Squeeze
  // --------------------

  var squeeze = function() {
    var $mainHeader = $('.header-main');
    var position = $(window).scrollTop();
    var scrollOffset = 50;

    if (position >= $mainHeader.outerHeight() + scrollOffset && !$mainHeader.hasClass('sqeeze') && $('body').css('margin-bottom') !== '1px') {
      $mainHeader.addClass('squeeze');
    } else {
      $mainHeader.removeClass('squeeze');
    }

    // if nav-spy exists use scrollspy -- doesn't work well outside of SQUEEZE function

    if ($('nav').hasClass('nav-spy')) {
      $('body').scrollspy({
        target: '.nav-spy',
        offset: 200
      });
    }

  };

  $(window).scroll($.throttle(50, squeeze));


  // --------------------
  // Check if element is onscreen
  // --------------------

  var $onScreen = $('.visible-check');

  var isVisible = function() {
    $onScreen.each(function() {

      if ($(this).isOnScreen()) {
        $(this).addClass('visible');
      }

    });
  };

  if ($onScreen.length) {
    isVisible();

    $(window).scroll($.throttle(50, isVisible));
  }


  // --------------------
  // Carousel Setup
  // --------------------

  var slider = $('.slider'),
    sliderPrev = $('.prev'),
    sliderNext = $('.next');

  if ($('body').css('padding-bottom') !== '1px') {
    $(slider).jcarousel();
  }

  $(sliderPrev)
    .on('jcarouselcontrol:active', function() {
      $(this).removeClass('inactive');
    })
    .on('jcarouselcontrol:inactive', function() {
      $(this).addClass('inactive');
    })
    .jcarouselControl({
      target: '-=1'
    });

  $(sliderNext)
    .on('jcarouselcontrol:active', function() {
      $(this).removeClass('inactive');
    })
    .on('jcarouselcontrol:inactive', function() {
      $(this).addClass('inactive');
    })
    .jcarouselControl({
      target: '+=1'
    });


  // --------------------
  // Carousel Pagination
  // --------------------

  var carouselPag = $('.carousel-pagination');

  if ($('body').css('padding-bottom') !== '1px') {

    $(carouselPag)
      .on('jcarouselpagination:active', 'li', function() {
        $(this).addClass('active');
      })
      .on('jcarouselpagination:inactive', 'li', function() {
        $(this).removeClass('active');
      })
      .on('click', function(e) {
        e.preventDefault();
      })
      .jcarouselPagination({
        perPage: 1,
        item: function(page) {
          return '<li><a href="#' + page + '"><i class="fa fa-circle"></i></a></li>';
        }
      });

  }


  var checkPagination = function() {
    var slide = $('.slider-wrap').find('.slide');
    var slideCount = $(slide).length;

    if (slideCount <= 1) {
      $(carouselPag).remove();
    }

  };

  checkPagination();


  // --------------------
  // Content Swapper
  // --------------------

  var swapperSelector = $('.swapper-selector').find('li'),
    swapperWrap = $('.swapper-wrap'),
    swapperContent = swapperWrap.find('.swapper-content');

  // Auto Tab Through Tabs

  var sliderToggle = function() {
  $(".swapper-selector li.current").removeClass("current")
    .next().add('swapper-selector li:first').last().addClass("current");

  $(".swapper-content.show").removeClass("show")
    .next().addClass("show");
}
setInterval(sliderToggle, 500);
//

  swapperSelector.on('click', function() {

    var target = $(this).attr('data-target');
    target = swapperWrap.find('div.swapper-content[data-title=' + target + ']');
    var preVideo = swapperWrap.find('div.swapper-content.show iframe');

    swapperSelector.removeClass('current');
    $(this).addClass('current');

    swapperContent.removeClass('show');
    $(target).addClass('show');

    if (preVideo.length) {
      preVideo.each(function() {
        var src = $(this).attr('src');
        $(this).attr('src', '');
        $(this).attr('src', src);
      });
    }

  });



  // --------------------
  // Scroll To Sections
  // --------------------

  var scrollNav = $('nav.nav-scroll').find('a').not('.download'),
    el;

  var scrollPage = function() {

    var target = $('section' + el);
    var position = target.offset().top - 70;

    if ($('body').css('margin-bottom') === '1px') {
      position = target.offset().top - 20;
    }

    $('html, body').animate({
      scrollTop: position
    }, 500);

  };


  scrollNav.on('click', function(e) {
    e.preventDefault();
    el = $(this).attr('href');
    scrollPage(el);
  });



  // --------------------
  // Call Socialite.js on Blog
  // --------------------

  if ($('body.single').length) {
    Socialite.load();
  }



  // --------------------
  // Call Equal Height Plugin (not on mobile)
  // --------------------

  if ($('body').css('padding-bottom') !== '1px') {
    $('.row').eqHeight('.equal-height');
  }



  // --------------------
  // Run Skrollr on Data Page (not on mobile)
  // --------------------

  var skrollrTest = function() {

    if ($('body').css('margin-bottom') !== '1px' && $('body').hasClass('page-template-page-solutions-data-solutions-php')) {
      skrollr.init();
    }

  };

  skrollrTest();

  $(window).resize(function() {
    skrollrTest();
  });


});