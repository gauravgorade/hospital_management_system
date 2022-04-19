(function ($) {

  "use strict";

  

  /*--------------------------------------------------------------
    Scripts initialization
  --------------------------------------------------------------*/
  $.exists = function (selector) {
    return $(selector).length > 0;
  };

  $(window).on("load", function () {
    $(window).trigger("scroll");
    $(window).trigger("resize");
    preloaderSetup();
    isotopInit();
  });

  $(document).on("ready", function () {
    $(window).trigger("resize");
    dynamicBackground();
    isotopInit();
    backToTop();
    stickyFooter();
    formValidation();
    appointmentForm();
    slickInit();
    progressBarInit();
    pricingTableInit();
    stickyHeader();
    onePageNavigation();
    mobileMenu();
    mailchimpInit();
    modalVideo();
    lightGallery();
    counterInit();
    rippleInit();
    new WOW().init();
    tabs();
    accordianSetup();
    beforeAfterSlider();
    if ($.exists('.player')) {
      $('.player').YTPlayer();
    }
    if ($.exists('#udate')) {
      $('#udate').datepicker();
    }
    if ($.exists('.st_select1')) {
      $(".st_select1").select2({
        placeholder: function () {
          $(this).data('placeholder');
        },
      });
    }

  });

  $(window).on("resize", function () {
    isotopInit();
    stickyFooter();
    beforeAfterSlider();
  });

  $(window).on("scroll", function () {
    stickyHeader();
  });

  /*--------------------------------------------------------------
    1. Placeholder
  --------------------------------------------------------------*/
  function preloaderSetup() {
    $(".st-perloader").fadeOut();
    $("st-perloader-in").delay(150).fadeOut("slow");
  }

  /*--------------------------------------------------------------
    2. Dynamic Background
  --------------------------------------------------------------*/
  function dynamicBackground() {
    // Background images
    $('.st-dynamic-bg').each(function () {
      var src = $(this).attr('data-src');
      $(this).css({
        'background-image': 'url(' + src + ')'
      });
    });
  }

  /*--------------------------------------------------------------
    3. Mobile Menu
  --------------------------------------------------------------*/
  function mobileMenu() {
    $('.st-nav').append('<span class="st-munu-toggle"><span></span></span>');
    $('.menu-item-has-children').append('<span class="st-munu-dropdown-toggle"></span>');
    $('.st-munu-toggle').on('click', function () {
      $(this).toggleClass("st-toggle-active").siblings('.st-nav-list').slideToggle();;
    });
    $('.st-munu-dropdown-toggle').on('click', function () {
      $(this).toggleClass('active').siblings('ul').slideToggle();
    });
    // $('.st-smooth-move').on('click', function() {
    //   $('.st-onepage-nav').slideUp();
    //   $('.st-munu-toggle').removeClass('st-toggle-active');
    // })
    // Sidebar Header
    $('.st-site-header.st-style2').parents('body').addClass('st-get-sidebar');
  }

  /*--------------------------------------------------------------
    4. Sticky Header
  --------------------------------------------------------------*/
  function stickyHeader() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $('.st-sticky-header').addClass('st-sticky-active');
    } else {
      $('.st-sticky-header').removeClass('st-sticky-active');
    }
  }

  /*--------------------------------------------------------------
    5. One Page Navigation
  --------------------------------------------------------------*/
  function onePageNavigation() {
    // Click To Go Top
    $('.st-smooth-move').on('click', function () {
      var thisAttr = $(this).attr('href');
      if ($(thisAttr).length) {
        var scrollPoint = $(thisAttr).offset().top - 10;
        $('body,html').animate({
          scrollTop: scrollPoint
        }, 800);
      }
      return false;
    });

    // One Page Active Class
    var topLimit = 300,
      ultimateOffset = 200;

    $('.st-onepage-nav').each(function () {
      var $this = $(this),
        $parent = $this.parent(),
        current = null,
        $findLinks = $this.find("a");

      function getHeader(top) {
        var last = $findLinks.first();
        if (top < topLimit) {
          return last;
        }
        for (var i = 0; i < $findLinks.length; i++) {
          var $link = $findLinks.eq(i),
            href = $link.attr("href");

          if (href.charAt(0) === "#" && href.length > 1) {
            var $anchor = $(href).first();
            if ($anchor.length > 0) {
              var offset = $anchor.offset();
              if (top < offset.top - ultimateOffset) {
                return last;
              }
              last = $link;
            }
          }
        }
        return last;
      }

      $(window).on("scroll", function () {
        var top = window.scrollY,
          height = $this.outerHeight(),
          max_bottom = $parent.offset().top + $parent.outerHeight(),
          bottom = top + height + ultimateOffset;

        var $current = getHeader(top);

        if (current !== $current) {
          $this.find(".active").removeClass("active");
          $current.addClass("active");
          current = $current;
        }
      });
    });
  }

  /*--------------------------------------------------------------
    6. Isotop Initialize
  --------------------------------------------------------------*/
  function isotopInit() {
    if ($.exists('.st-isotop')) {
      $('.st-isotop').isotope({
        itemSelector: '.st-isotop-item',
        transitionDuration: '0.60s',
        percentPosition: true,
        masonry: {
          columnWidth: '.st-grid-sizer'
        }
      });
      /* Active Class of Portfolio*/
      $('.st-isotop-filter ul li').on('click', function (event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
      });
      /*=== Portfolio filtering ===*/
      $('.st-isotop-filter ul').on('click', 'a', function () {
        var filterElement = $(this).attr('data-filter');
        $(this).parents('.st-isotop-filter').next().isotope({
          filter: filterElement
        });
      });
    }
  }

  /*--------------------------------------------------------------
    7. Back To Top
  --------------------------------------------------------------*/
  function backToTop() {
    $('#st-backtotop').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 1000);
    });
  }

  /*--------------------------------------------------------------
    8. Footer Sticky
  --------------------------------------------------------------*/
  function stickyFooter() {
    // Sticky Footer
    var footerHeight = ($('.st-sticky-footer').height());
    var windowHeight = $(window).height();
    var footerHeightPx = footerHeight + 'px';
    $('.st-content').css("margin-bottom", footerHeightPx);
  }

  /*--------------------------------------------------------------
    9. Slick Slider
  --------------------------------------------------------------*/
  function slickInit() {
    $('.st-slider').each(function () {
      // Slick Variable
      var $ts = $(this).find('.slick-container');
      var $slickActive = $(this).find('.slick-wrapper');
      var $sliderNumber = $(this).siblings('.slider-number');

      // Auto Play
      var autoPlayVar = parseInt($ts.attr('data-autoplay'), 10);
      // Auto Play Time Out
      var autoplaySpdVar = 3000;
      if (autoPlayVar > 1) {
        autoplaySpdVar = autoPlayVar;
        autoPlayVar = 1;
      }
      // Slide Change Speed
      var speedVar = parseInt($ts.attr('data-speed'), 10);
      // Slider Loop
      var loopVar = Boolean(parseInt($ts.attr('data-loop'), 10));
      // Slider Center
      var centerVar = Boolean(parseInt($ts.attr('data-center'), 10));
      // Pagination
      var paginaiton = $(this).children().hasClass('pagination');
      // Slide Per View
      var slidesPerView = $ts.attr('data-slides-per-view');
      if (slidesPerView == 1) {
        slidesPerView = 1;
      }
      if (slidesPerView == 'responsive') {
        var slidesPerView = parseInt($ts.attr('data-add-slides'), 10);
        var lgPoint = parseInt($ts.attr('data-lg-slides'), 10);
        var mdPoint = parseInt($ts.attr('data-md-slides'), 10);
        var smPoint = parseInt($ts.attr('data-sm-slides'), 10);
        var xsPoing = parseInt($ts.attr('data-xs-slides'), 10);
      }
      // Fade Slider
      var fadeVar = parseInt($($ts).attr('data-fade-slide'));
      (fadeVar === 1) ? (fadeVar = true) : (fadeVar = false);

      // Slick Active Code
      $slickActive.slick({
        infinite: true,
        autoplay: autoPlayVar,
        dots: paginaiton,
        centerPadding: '0',
        speed: speedVar,
        infinite: loopVar,
        autoplaySpeed: autoplaySpdVar,
        centerMode: centerVar,
        fade: fadeVar,
        prevArrow: $(this).find('.slick-arrow-left'),
        nextArrow: $(this).find('.slick-arrow-right'),
        appendDots: $(this).find('.pagination'),
        slidesToShow: slidesPerView,
        responsive: [{
          breakpoint: 1600,
          settings: {
            slidesToShow: lgPoint
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: mdPoint
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: smPoint
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: xsPoing
          }
        }
        ]
      });
    })
  }

  /*--------------------------------------------------------------
    10. Progress Bar
  --------------------------------------------------------------*/
  function progressBarInit() {
    $('.st-progressbar').each(function () {
      var progressPercentage = $(this).data('progress') + "%";
      $(this).find('.st-progressbar-in').css('width', progressPercentage);
    });
  }

  /*--------------------------------------------------------------
    11. Pricing Table
  --------------------------------------------------------------*/
  function pricingTableInit() {
    $('.st-pricing-table.st-style1').hover(
      function () {
        $('.st-pricing-table.st-style1').addClass('st-active');
        $(this).removeClass('st-active');
      },
      function () { $('.st-pricing-table.st-style1').removeClass('st-active') }
    )
  }

  /*--------------------------------------------------------------
    12. Ajax Contact Form And Appointment
  --------------------------------------------------------------*/
  // Contact Form
  function formValidation() {
    if ($.exists('#contact-form #submit')) {
      $('#st-alert').hide();
      $('#contact-form #submit').on('click', function () {
        var name = $('#name').val();
        var subject = $('#subject').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var msg = $('#msg').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(email)) {
          $('#st-alert').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please Enter Valid Email.</div>');
          return false;
        }

        name = $.trim(name);
        subject = $.trim(subject);
        phone = $.trim(phone);
        email = $.trim(email);
        msg = $.trim(msg);

        if (name != '' && email != '' && msg != '') {
          var values = "name=" + name +
            "&subject=" + subject +
            "&phone=" + phone +
            "&email=" + email +
            "&msg=" + msg;
          $.ajax({
            type: "POST",
            url: "assets/php/mail.php",
            data: values,
            success: function () {
              $('#name').val('');
              $('#subject').val('');
              $('#phone').val('');
              $('#email').val('');
              $('#msg').val('');

              $('#st-alert').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
              setTimeout(function () {
                $('#st-alert').fadeOut('slow');
              }, 4000);
            }
          });
        } else {
          $('#st-alert').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> All fields are required.</div>');
        }
        return false;
      });
    }
  }

  // Appointment Form
  function appointmentForm() {
    if ($.exists('#appointment-form #appointment-submit')) {
      $('#st-alert1').hide();
      $('#appointment-form #appointment-submit').on('click', function () {
        var uname = $('#uname').val();
        var uemail = $('#uemail').val();
        var unumber = $('#unumber').val();
        var udate = $('#udate').val();
        var udepartment = $('#udepartment').val();
        var udoctor = $('#udoctor').val();
        var umsg = $('#umsg').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(uemail)) {
          $('#st-alert1').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please Enter Valid Email.</div>');
          return false;
        }

        uname = $.trim(uname);
        uemail = $.trim(uemail);
        unumber = $.trim(unumber);
        udate = $.trim(udate);
        udepartment = $.trim(udepartment);
        udoctor = $.trim(udoctor);
        umsg = $.trim(umsg);

        if (uname != '' && uemail != '' && umsg != '') {
          var values = "uname=" + uname +
            "&uemail=" + uemail +
            "&unumber=" + unumber +
            "&udate=" + udate +
            "&udepartment=" + udepartment +
            "&udoctor=" + udoctor +
            "&umsg=" + umsg;
          $.ajax({
            type: "POST",
            url: "assets/php/appointment.php",
            data: values,
            success: function () {
              $('#uname').val('');
              $('#uemail').val('');
              $('#unumber').val('');
              $('#udepartment').val('');
              $('#udoctor').val('');
              $('#umsg').val('');

              $('#st-alert1').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Appointment has been sent successfully.</div>');
              setTimeout(function () {
                $('#st-alert1').fadeOut('slow');
              }, 4000);
            }
          });
        } else {
          $('#st-alert1').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> All fields are required.</div>');
        }
        return false;
      });
    }
  }

  /*--------------------------------------------------------------
    13. Mailchimp start
  --------------------------------------------------------------*/
  function mailchimpInit() {
    if ($.exists('.mailchimp')) {
      if ($('.mailchimp').length > 0) {
        $('.mailchimp').ajaxChimp({
          language: 'es',
          callback: mailchimpCallback
        });
      }

      function mailchimpCallback(resp) {
        if (resp.result === 'success') {
          $('.subscription-success').html('<i class="fa fa-check"></i><br/>' + resp.msg).fadeIn(1000);
          $('.subscription-error').fadeOut(500);

        } else if (resp.result === 'error') {
          $('.subscription-error').html('<i class="fa fa-times"></i><br/>' + resp.msg).fadeIn(1000);
        }
      }
      $.ajaxChimp.translations.es = {
        'submit': 'Submitting...',
        0: 'We have sent you a confirmation email',
        1: 'Please enter a value',
        2: 'An email address must contain a single @',
        3: 'The domain portion of the email address is invalid (the portion after the @: )',
        4: 'The username portion of the email address is invalid (the portion before the @: )',
        5: 'This email address looks fake or invalid. Please enter a real email address'
      };
    }
  }

  /*--------------------------------------------------------------
    14. Modal Video
  --------------------------------------------------------------*/
  function modalVideo() {
    $(document).on('click', '.st-video-open', function (e) {
      e.preventDefault();
      var video = $(this).attr('href');
      $('.st-video-popup-container iframe').attr('src', video);
      $('.st-video-popup').addClass('active');

    });
    $('.st-video-popup-close, .st-video-popup-layer').on('click', function (e) {
      $('.st-video-popup').removeClass('active');
      $('html').removeClass('overflow-hidden');
      $('.st-video-popup-container iframe').attr('src', 'about:blank')
      e.preventDefault();
    });
  }

  /*--------------------------------------------------------------
    15. Light Gallery
  --------------------------------------------------------------*/
  function lightGallery() {
    $('.st-lightgallery').each(function () {
      $(this).lightGallery({
        selector: '.st-lightbox-item',
        subHtmlSelectorRelative: false,
        thumbnail: false,
        mousewheel: true
      });
    });
  }

  /*--------------------------------------------------------------
    16. Tamjid Counter
  --------------------------------------------------------------*/
  function counterInit() {
    $('.st-counter').tamjidCounter({
      duration: 700
    });
  }

  /*--------------------------------------------------------------
    17. Ripple
  --------------------------------------------------------------*/
  function rippleInit() {
    if ($.exists('.st-ripple-version')) {
      $('.st-ripple-version').each(function () {
        $('.st-ripple-version').ripples({
          resolution: 512,
          dropRadius: 20,
          perturbance: 0.04,
        });
      });
    }
  }

  /*--------------------------------------------------------------
    18. Tabs
  --------------------------------------------------------------*/
  function tabs() {
    $('.st-tabs.st-fade-tabs .st-tab-links a').on('click', function (e) {
      var currentAttrValue = $(this).attr('href');
      $('.st-tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
      $(this).parents('li').addClass('active').siblings().removeClass('active');
      e.preventDefault();
    });
  }


  /*--------------------------------------------------------------
    19. Accordian
  --------------------------------------------------------------*/
  function accordianSetup() {
    var $this = $(this);
    $('.st-accordian').children('.st-accordian-body').hide();
    $('.st-accordian.active').children('.st-accordian-body').show();
    $('.st-accordian-title').on('click', function () {
      $(this).parent('.st-accordian').siblings().children('.st-accordian-body').slideUp(250);
      $(this).siblings().slideDown(250);
      /* Accordian Active Class */
      $(this).parents('.st-accordian').addClass('active');
      $(this).parent('.st-accordian').siblings().removeClass('active');
    });
  }

  /*--------------------------------------------------------------
    20. Before After Slider
  --------------------------------------------------------------*/
  function beforeAfterSlider() {
    if ($.exists('.st-before-after')) {
      var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
      $('.st-before-after').each(function () {
        var $container = $(this),
          $before = $container.find('.st-before'),
          $after = $container.find('.st-after'),
          $handle = $container.find('.st-handle-before-after');

        var maxX = $container.outerWidth(),
          offsetX = $container.offset().left,
          startX = 0;

        var touchstart, touchmove, touchend;
        var mousemove = function (e) {
          e.preventDefault();
          var curX = e.clientX - offsetX,
            diff = startX - curX,
            curPos = (curX / maxX) * 100;
          if (curPos > 100) {
            curPos = 100;
          }
          if (curPos < 0) {
            curPos = 0;
          }
          $before.css({ right: (100 - curPos) + "%" });
          $handle.css({ left: curPos + "%" });
        };
        var mouseup = function (e) {
          e.preventDefault();
          if (supportsTouch) {
            $(document).off('touchmove', touchmove);
            $(document).off('touchend', touchend);
          } else {
            $(document).off('mousemove', mousemove);
            $(document).off('mouseup', mouseup);
          }
        };
        var mousedown = function (e) {
          e.preventDefault();
          startX = e.clientX - offsetX;
          if (supportsTouch) {
            $(document).on('touchmove', touchmove);
            $(document).on('touchend', touchend);
          } else {
            $(document).on('mousemove', mousemove);
            $(document).on('mouseup', mouseup);
          }
        };

        touchstart = function (e) {
          console.log(e);
          mousedown({ preventDefault: e.preventDefault, clientX: e.originalEvent.changedTouches[0].pageX });
        };
        touchmove = function (e) {
          mousemove({ preventDefault: e.preventDefault, clientX: e.originalEvent.changedTouches[0].pageX });
        };
        touchend = function (e) {
          mouseup({ preventDefault: e.preventDefault, clientX: e.originalEvent.changedTouches[0].pageX });
        };
        if (supportsTouch) {
          $handle.on('touchstart', touchstart);
        } else {
          $handle.on('mousedown', mousedown);
        }
      });
    }
  }


})(jQuery); // End of use strict