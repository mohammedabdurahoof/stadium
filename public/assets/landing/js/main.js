(function ($) {
  'use strict';

  /* 1. Proloder */
  $(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow');
    $('body').delay(450).css({
      overflow: 'visible'
    });
  });

  /* 2. slick Nav */
  // mobile_menu
  var menu = $('ul#navigation');
  if (menu.length) {
    menu.slicknav({
      prependTo: '.mobile_menu',
      closedSymbol: '+',
      openedSymbol: '-'
    });
  }

  /* 4. MainSlider-1 */
  // h1-hero-active
  function mainSlider() {
    var BasicSlider = $('.slider-active');
    BasicSlider.on('init', function (e, slick) {
      var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);
    });
    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);
    });
    BasicSlider.slick({
      autoplay: true,
      autoplaySpeed: 3500,
      dots: false,
      fade: true,
      arrows: false,
      prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        }
      ]
    });

    function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function () {
          $this.removeClass($animationType);
        });
      });
    }
  }
  mainSlider();

  // Weekly-2 Acticve
  $('.weekly2-news-active').slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: true,
    autoplay: true,
    loop: true,
    slidesToShow: 3,
    prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
    initialSlide: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 700,
        settings: {
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

  // Weekly-2 Acticve
  $('.weekly3-news-active').slick({
    dots: true,
    infinite: true,
    speed: 500,
    arrows: false,
    autoplay: true,
    loop: true,
    slidesToShow: 6,
    prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
    slidesToScroll: 1,
    initialSlide: 0,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 700,
        settings: {
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 1
        }
      }
    ]
  });

  // recent-active
  $('.recent-active').slick({
    dots: false,
    infinite: true,
    speed: 600,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick-prev"> <span class="flaticon-arrow"></span></button>',
    nextArrow: '<button type="button" class="slick-next"> <span class="flaticon-arrow"><span></button>',

    initialSlide: 1,
    loop: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

  /* 5. Video area Active */
  $('.video-items-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.testmonial-nav'
  });
  $('.testmonial-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.video-items-active',
    dots: false,
    arrows: false,
    prevArrow: '<button type="button" class="slick-prev"><span class="ti-arrow-left"></<span></button>',
    nextArrow: '<button type="button" class="slick-next"><span class="ti-arrow-right"></span></button>',
    centerMode: true,
    focusOnSelect: true,
    centerPadding: 0,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  /* 5. Gallery Active */
  var client_list = $('.completed-active');
  if (client_list.length) {
    client_list.owlCarousel({
      slidesToShow: 2,
      slidesToScroll: 1,
      loop: true,
      autoplay: true,
      speed: 3000,
      smartSpeed: 2000,
      nav: false,
      dots: false,
      margin: 15,

      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        992: {
          items: 2
        },
        1200: {
          items: 3
        }
      }
    });
  }

  /* 6. Nice Selectorp  */
  var nice_Select = $('select');
  if (nice_Select.length) {
    nice_Select.niceSelect();
  }

  currentRoute == 'home'
    ? $('.slicknav_icon-bar').attr('style', 'background-color: #fff !important')
    : $('.slicknav_icon-bar').attr('style', 'background-color: #051441 !important');
  /* 7.  Custom Sticky Menu  */
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();

    if (scroll < 245) {
      $('.header-sticky ').removeClass('sticky-bar');
      currentRoute == 'home' && $('#logo').css('color', '#fff');
      currentRoute == 'home' && $('.slicknav_icon-bar').attr('style', 'background-color: #fff !important');
      currentRoute == 'home' && $('#navigation > li > a').css('color', '#fff');
      currentRoute == 'home' && $('#navigation > li > a').removeClass('fixed-header');
    } else {
      $('.header-sticky').addClass('sticky-bar');
      currentRoute == 'home' && $('#logo').css('color', '#051441');
      currentRoute == 'home' && $('.slicknav_icon-bar').attr('style', 'background-color: #051441 !important');
      currentRoute == 'home' && $('#navigation > li > a').css('color', '#051441');
      currentRoute == 'home' && $('#navigation > li > a').addClass('fixed-header');
    }
  });

  /*   Show img flex  */
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
      $('.header-flex').removeClass('sticky-flex');
    } else {
      $('.header-flex').addClass('sticky-flex');
    }
  });

  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
      $('.header-sticky').removeClass('sticky');
    } else {
      $('.header-sticky').addClass('sticky');
    }
  });

  /* 8. sildeBar scroll */
  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="ti-arrow-up"></i>', // Text for element
    activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });

  /* 9. data-background */
  $('[data-background]').each(function () {
    $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
  });

  /* 10. WOW active */
  new WOW().init();

  /* 11. Datepicker */

  // 11. ---- Mailchimp js --------//
  function mailChimp() {
    $('#mc_embed_signup').find('form').ajaxChimp();
  }
  mailChimp();

  // 12 Pop Up Img
  var popUp = $('.single_gallery_part, .img-pop-up');
  if (popUp.length) {
    popUp.magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }

  // Add class

  $('.sticky-logo').addClass('info-open');

  // Remove clas
  $('.close-icon').click(function () {
    $('.extra-inofo-bar').removeClass('info-open');
  });

  // Modal Activation
  $('.search-switch').on('click', function () {
    $('.search-model-box').fadeIn(400);
  });

  $('.search-close-btn').on('click', function () {
    $('.search-model-box').fadeOut(400, function () {
      $('#search-input').val('');
    });
  });

  function fetchSeasonData(season) {
    $.ajax({
      url: `/clubs/by-season/${season}`,
      method: 'GET',
      dataType: 'json',
      success: function (response) {
        const { clubs, season } = response;

        // Update season-related inputs
        $('#no_matches').text(season.matches);
        $('#total_crowds').text(season.total);
        $('#average_crowds').text(season.avg);
        $('#highest_crowd').text(season.high);
        $('#lowest_crowd').text(season.low);

        let tableBody = '';

        $.each(clubs, function (index, club) {
          tableBody += `
                    <tr>
                        <td>${club.club_name}</td>
                        <td>${club.no_matches}</td>
                        <td>${club.total_crowds}</td>
                        <td>${club.average_crowds}</td>
                    </tr>
                `;
        });

        $('#clubs_table_body').html(tableBody);
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

  const seasonSelect = $('#season');
  const defaultSeasonId = seasonSelect.val();

  if (defaultSeasonId) {
    fetchSeasonData(defaultSeasonId);
  }

  seasonSelect.change(function () {
    const seasonId = $(this).val();
    fetchSeasonData(seasonId);
  });

  var properties = ['name', 'wins', 'draws', 'losses', 'total'];

  $.each(properties, function (i, val) {
    var orderClass = '';

    $('#' + val).click(function (e) {
      e.preventDefault();
      $('.filter__link.filter__link--active').not(this).removeClass('filter__link--active');
      $(this).toggleClass('filter__link--active');
      $('.filter__link').removeClass('asc desc');

      if (orderClass == 'desc' || orderClass == '') {
        $(this).addClass('asc');
        orderClass = 'asc';
      } else {
        $(this).addClass('desc');
        orderClass = 'desc';
      }

      var parent = $(this).closest('.header__item');
      var index = $('.header__item').index(parent);
      var $table = $('.table-content');
      var rows = $table.find('.table-row').get();
      var isSelected = $(this).hasClass('filter__link--active');
      var isNumber = $(this).hasClass('filter__link--number');

      rows.sort(function (a, b) {
        var x = $(a).find('.table-data').eq(index).text();
        var y = $(b).find('.table-data').eq(index).text();

        if (isNumber == true) {
          if (isSelected) {
            return x - y;
          } else {
            return y - x;
          }
        } else {
          if (isSelected) {
            if (x < y) return -1;
            if (x > y) return 1;
            return 0;
          } else {
            if (x > y) return -1;
            if (x < y) return 1;
            return 0;
          }
        }
      });

      $.each(rows, function (index, row) {
        $table.append(row);
      });

      return false;
    });
  });

  $(document).on('click', 'table thead tr th:not(.no-sort)', function () {
    let table = $(this).parents('table');
    let rows = $(this)
      .parents('table')
      .find('tbody tr')
      .toArray()
      .sort(TableComparer($(this).index()));
    let dir = $(this).hasClass('sort-asc') ? 'desc' : 'asc';
    if (dir == 'desc') {
      rows = rows.reverse();
    }
    for (let i = 0; i < rows.length; i++) {
      table.append(rows[i]);
    }
    table.find('thead tr th').removeClass('sort-asc').removeClass('sort-desc');
    $(this)
      .removeClass('sort-asc')
      .removeClass('sort-desc')
      .addClass('sort-' + dir);
  });

  function TableComparer(index) {
    return function (a, b) {
      let val_a = TableCellValue(a, index).replace(/\$\,/g, '');
      let val_b = TableCellValue(b, index).replace(/\$\,/g, '');
      let result = val_a.toString().localeCompare(val_b);
      if ($.isNumeric(val_a) && $.isNumeric(val_b)) {
        result = val_a - val_b;
      }
      if (isDate(val_a) && isDate(val_b)) {
        let date_a = new Date(val_a);
        let date_b = new Date(val_b);
        result = date_a - date_b;
      }
      return result;
    };
  }

  function TableCellValue(row, index) {
    return $(row).children('td').eq(index).text();
  }

  function isDate(val) {
    let d = new Date(val);
    return !isNaN(d.valueOf());
  }
})(jQuery);
