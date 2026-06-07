var $ = jQuery.noConflict(),
    $win = $(window),
    $doc = $(document),
    $html = $('html').first(),
    $body = $('body').first(),
    $desktop = 800,
    $mobile = $desktop - 1,
    isMobile;
var TM = TweenMax;
function circleTextMenu() {
    $('.circle-text').circleType({
        radius: 188,
        dir: -1
    });
}
circleTextMenu();
function parallax(el) {
    el = $(el).length ? $(el) : $('.parallax-container');
    if (el.length) {
        /* el.parallaxBackground({
         'image': '.parallax-img'
         });*/
        // prlx(el.selector, '.parallax-img');
        // var rellax = new Rellax('.rellax');
        // var rellax = new Rellax('.rellax');
        // parallaxInit('.parallax-img');
    }
    $(function () {
        $.stellar({
            horizontalScrolling: false,
            // verticalOffset: 40,
            // scrollProperty: 'transform',
        });
    });
}
function parallaxDestroy() {
    if ($win.data().plugin_stellar) {
        $win.data('plugin_stellar').destroy();
    }
}
function parallaxReinit() {
    // $win.data('plugin_stellar').init();
}
/*Mobile Detect*/
var isMobile = false; //initiate as false
// device detection
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
    isMobile = true;
    $body.addClass('device-mobile');
    $('.circle-menu').removeClass('inactive').addClass('active');
    parallaxDestroy();
    /*$("img.mobile-img").each(function() {
        $(this).attr("src",$(this).attr("data-original"));
        $(this).removeAttr("data-original");
    });*/
} else {
    isMobile = false;
    $('.circle-menu').removeClass('inactive');
    $body.addClass('device-desktop');
    parallax();
}

/*Menu*/

function projectSearch() {
    if ($('[ng-app="shanta"]').length) {
        var openSearchMenu = $('.open-search-menu');
        var app = angular.module('shanta', []);
        app.controller('searchCtrl', ['$scope', '$http', function ($scope, $http) {
            $scope.results = [];
            $scope.ngFlag = true;
            if (window.location.hash == '#search') {
                if ($scope.ngFlag) {
                    $http.get( site_url_info.themeUrl + '/assets/json/aresult.json').then(function (a, b) {
                        $scope.results = a.data;
                        $scope.ngFlag = false;
                    });
                }
            }
            openSearchMenu.on('click', function (e) {
                if ($scope.ngFlag) {
                    $http.get( site_url_info.themeUrl + '/assets/json/aresult.json').then(function (a, b) {
                        $scope.results = a.data;
                        $scope.ngFlag = false;
                    });
                }
            });

            $scope.searchSize = function (obj) {


                if ($scope.size && obj.size) {
                    var range = $scope.size.split("-");
                    if (obj.size >= Number(range[0]) && obj.size <= Number(range[1])) {
                        console.log(obj.size);
                        return true;
                    }
                    return false;
                }
                return true;
            };
        }]);
        /*app.filter('makeUpper', function () {
         return function (item) {
         return item.toUpperCase();
         }
         });*/
        app.filter('makeUpper', function () {
            return function (input, all) {
                var reg = (!all) ? /([^\W_]+[^\s-]*) */g : /([^\W_]+[^\s-]*)/;
                return (!!input) ? input.replace(reg, function (txt) {
                    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                }) : '';
            }
        });
    }
}
projectSearch();
/**============================================
 * =============Layer Slider===================
 * ============================================
 **/

function hexToRgb(hex, alpha) {
    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, function (m, r, g, b) {
        return r + r + g + g + b + b;
    });
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    var rgba = {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16),
        a: alpha ? alpha : 1
    };
    var rgba_val = rgba.r + ', ' + rgba.g + ', ' + rgba.b + ', ' + rgba.a;
    return result ? rgba_val : null;
}
/*Custom Scrollbar*/
function initScroller(el) {
    el = $(el);
    if (el.length) {
        el.mCustomScrollbar({
            mouseWheelPixels: 200
        });
    }
}
function destroyScroller(el) {
    el = $(el);
    if (el.length) {
        el.mCustomScrollbar('destroy');
    }
}
function scrollToTopScroller(el, pos, duration) {
    pos = pos || 'top';
    duration = duration || 0;
    el.mCustomScrollbar('scrollTo', pos, {
        scrollInertia: duration
    });
}
function customScroller(el, duration, preventdefault) {
    el = $(el).length ? $(el) : $('.mcustom-scrollar');
    if (el.length) {
        el.mCustomScrollbar({
                mouseWheelPixels: 200,
                scrollInertia: duration || 100,
                callbacks: {
                    onScrollStart: function () {
                    },
                    onInit: function () {
                    },
                    onOverflowY: function () {
                    }
                },
                mouseWheel: {
                    preventDefault: preventdefault || false
                },
                advanced: {
                    // autoScrollOnFocus: false,
                    updateOnContentResize: true,
                    updateOnBrowserResize: true
                }
            }
        );
    }
}
customScroller();
// customScroller('.project-detail-info:not(.no-pad) .container-fluid');

function overlayMenu() {
    var hamburger = $('.hamburger'),
        hamburgerLink = hamburger.find('a'),
        hamburgerOpen = $('.hamburger-open'),
        hamburgerClose = $('.hamburger-close'),
        openSearchMenu = $('.open-search-menu');
    var menuOverlay = $('.menu-overlay'),
        mainMenu = $('.main-menu'),
        searchResultMenu = $('.search-result-menu'),
        mainMenuLink = mainMenu.find('.content-layer .column-right a'),
        $layerSlider = $('#layerslider');
    hamburgerLink.on('click', function (e) {
        e.preventDefault();
    });
    hamburgerClose.data('search-menu-opened', false);
    hamburgerClose.data('search-menu-opened-from-url', false);
    function openMenu(el, time) {
        if (el.length) {
            time = time || 1;
            if (!$body.hasClass('menu-opended')) {
                $body.addClass('menu-opened');
            }
            el.addClass('active');
            if ($layerSlider.length) {
                $layerSlider.layerSlider('pause');
            }
            TM.to(el, time, {
                top: 0,
                ease: Power4.easeOut,
                delay: 0
            });
        }
    }

    // openMenu(searchResultMenu);
    function closeMenu(el) {
        if (el.length) {
            if (!$body.hasClass('menu-opended')) {
                $body.addClass('menu-opened');
            }
            el.removeClass('active');
        }
    }

    hamburgerOpen.on('click', function (e) {
        e.stopPropagation();
        var $this = $(this);
        /* $body.addClass('menu-opened');
         hamburgerOpen.addClass('active');
         mainMenu.addClass('active');*/
        hamburgerOpen.addClass('active');
        /*TM.to(mainMenuLink, 0.5, {
         opacity: 1
         });*/
        openMenu(mainMenu);
        TM.fromTo(mainMenu.find('.column-right>.container-fluid'), 0.30, {
            y: -200,
            autoAlpha: 0
        }, {
            delay: 0.07,
            y: 0,
            autoAlpha: 1
        });
        TM.staggerFromTo([mainMenu.find('.column-left .heading-primary'), mainMenu.find('.menu-project-list>li'), mainMenu.find('.open-search-menu')], 0.35, {
            y: -100,
            autoAlpha: 1,
        }, {
            delay: 0.08,
            y: 0,
            autoAlpha: 1,
            onComplete: function () {
            }
        }, -0.1);
    });
    hamburgerClose.on('click', function (e) {
        e.stopPropagation();
        var $this = $(this);
        if (hamburgerClose.data('search-menu-opened') == true) {
            TM.to(searchResultMenu, 1.3, {
                top: '-100%',
                ease: Power4.easeOut,
            });
            searchResultMenu.removeClass('active');
            hamburgerClose.data('search-menu-opened', false);
            if (window.history.pushState) {
                window.history.pushState('', '/', window.location.pathname)
            } else {
                window.location.hash = '';
            }
            if (hamburgerClose.data('search-menu-opened-from-url') == true) {
                TM.to(mainMenu, 1.3, {
                    top: '-100%',
                    ease: Power4.easeOut,
                    onComplete: function () {
                        if ($layerSlider.length) {
                            $layerSlider.layerSlider('resume');
                        }
                    }
                });
                $body.removeClass('menu-opened');
                /*hamburgerOpen.removeClass('active');
                 hamburgerClose.data('search-menu-opened-from-url', false);*/
            }
            hamburgerOpen.removeClass('active');
            hamburgerClose.data('search-menu-opened-from-url', false);
        } else {
            /* TM.to(mainMenuLink, 0.2, {
             opacity: 0
             });*/
            /* TM.to(mainMenu.find('.column-right>.container-fluid'), 0.2, {
             delay: 0,
             y: -300
             });*/
            TM.fromTo(mainMenu.find('.column-right>.container-fluid'), 0.6, {
                y: 0,
                autoAlpha: 1
            }, {
                y: -200,
                autoAlpha: 0,
                delay: 0,
                ease: Power1.easeOut,
            });
            // heading-primary
            TM.staggerFromTo([mainMenu.find('.column-left .heading-primary'), mainMenu.find('.menu-project-list>li'), mainMenu.find('.open-search-menu')], 1, {
                autoAlpha: 1
            }, {
                delay: 0,
                autoAlpha: 0,
                ease: Power4.easeOut,
            }, 0.1);
            TM.staggerFromTo([mainMenu.find('.column-left .heading-primary'), mainMenu.find('.menu-project-list>li'), mainMenu.find('.open-search-menu')], 1, {
                y: 0,
                // autoAlpha: 1
            }, {
                delay: 0.02,
                y: -100,
                // autoAlpha: 0,
                ease: Power4.easeOut
            }, 0.1);
            TM.to(mainMenu, 1.3, {
                top: '-100%',
                ease: Power4.easeOut,
                delay: 0.07,
                onComplete: function () {
                    if ($layerSlider.length) {
                        $layerSlider.layerSlider('resume');
                    }
                }
            });
            hamburgerOpen.removeClass('active');
            mainMenu.removeClass('active');
            $body.removeClass('menu-opened');
        }
    });
    if (window.location.hash == '#search') {
        hamburgerClose.data('search-menu-opened', true);
        hamburgerClose.data('search-menu-opened-from-url', true);
        openMenu(searchResultMenu);
        TM.staggerFromTo($('.search-result-menu .menu-column'), 1, {
            y: -200
        }, {
            y: 0
        }, 0.05);
    }
    openSearchMenu.on('click', function (e) {
        e.preventDefault();
        window.location.hash = 'search';
        hamburgerClose.data('search-menu-opened', true);
        openMenu(searchResultMenu);
        TM.staggerFromTo($('.search-result-menu .menu-column'), 1, {
            y: -200
        }, {
            y: 0
        }, 0.05);
    });
}
overlayMenu();/////////////////////////////noman

function FullWidthMenu(el) {
    el = $(el).length ? $(el) : $('#menu');

    /* Megamenu */
    /* ========================================================== */


    var menu = $(".menu");
    var mediaWidth = $('.check-media').width();
    var	isMobileDevice = (( navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone|IEMobile|Opera Mini|Mobi/i) || ($windowWidth < 767) ) ? true : false );

    var Megamenu = {

        desktopMenu: function() {

            menu.children("li").show(0);
            menu.children(".toggle-menu").hide(0);


            // touch event for tablets > 991px or laptops with touch screen
            if (isMobileDevice || isTouchDevice) {

                menu.on("click touchstart","a", function(e){

                    if ($(this).attr('href') === '#') {
                        e.preventDefault();
                        e.stopPropagation();
                    }

                    var $this = $(this),
                        $sub = $this.siblings(".submenu, .megamenu");

                    $this.parent("li").siblings("li").find(".submenu, .megamenu").stop(true, true).fadeOut(300);

                    if ($sub.css("display") === "none") {
                        $sub.stop(true, true).fadeIn(300);
                    } else {
                        $sub.stop(true, true).fadeOut(300);
                        $this.siblings(".submenu").find(".submenu").stop(true, true).fadeOut(300);
                    }
                });

                $(document).on("click.menu touchstart.menu", function(e){

                    if ($(e.target).closest(menu).length === 0) {
                        menu.find(".submenu, .megamenu").fadeOut(300);
                    }
                });

                // Desktop hover effect
            } else {
                menu.find('li').on({
                    "mouseenter": function() {
                        $(this).children(".submenu, .megamenu").stop(true, true).fadeIn(300);
                    },
                    "mouseleave": function() {
                        $(this).children(".submenu, .megamenu").stop(true, true).fadeOut(300);
                    }
                });
            }
        },
        mobileMenu: function() {

            // Toggle Menu
            var $children = menu.children("li"),
                $toggle = menu.children("li.toggle-menu"),
                $notToggle = $children.not("toggle-menu");


            $notToggle.hide(0);
            $toggle.show(0).on("click", function(){

                if ($children.is(":hidden")){
                    $children.slideDown(300);
                } else {
                    $notToggle.slideUp(300);
                    $toggle.show(0);
                }
            });

            // Click (touch) effect
            menu.find("li").not(".toggle-menu").each(function(){

                var $this = $(this);

                if ($this.children(".submenu, .megamenu").length) {

                    $this.children("a").on("click", function(e){

                        if ($(this).attr('href') === '#') {
                            e.preventDefault();
                            e.stopPropagation();
                        }

                        var $sub = $(this).siblings(".submenu, .megamenu");

                        if ($sub.hasClass("open")) {
                            $sub.slideUp(300).removeClass("open");
                        } else {
                            $sub.slideDown(300).addClass("open");
                        }
                    });
                }
            });
        },
        unbindEvents: function() {
            menu.find("li, a").off();
            $(document).off("click.menu touchstart.menu");
            menu.find(".submenu, .megamenu").hide(0);
        }
    }; // END Megamenu object


    if ( mediaWidth === 991 ) {
        Megamenu.mobileMenu();
    } else {
        Megamenu.desktopMenu();
    }




    /* Vertical Menu */
    /* ========================================================== */


    // Vertical Menu Trigger
    $("#vertical-menu-trigger").on("click",function() {
        $("body").toggleClass("vertical-menu-on");

        var $icon = $(this).find(".icon");

        if ($icon.hasClass("icon_menu")) {
            $icon.removeClass("icon_menu").addClass("icon_close");
        } else {
            $icon.removeClass("icon_close").addClass('icon_menu');
        }

        return false;
    });

    $("#vertical-menu-close").on("click",function() {
        $("body").toggleClass("vertical-menu-on");
        return false;
    });

    if ($(".vertical-menu-wrapper").length) {
        var scroll_height = $(".vertical-menu-wrapper")[0].scrollHeight;
        $(".vertical-menu-wrapper").find(".bg-overlay").css("height",scroll_height);
    }


    // Top Bar Wrapper
    function topBarHeight() {
        var barWrapper = $(".top-bar-wrapper"),
            barHeight = ((barWrapper.outerHeight()) * (-1));

        barWrapper.css("top", barHeight);
    }
    topBarHeight();

    $("#top-bar-trigger").on("click",function() {
        $(".top-bar-wrapper").toggleClass('on');
        return false;
    });




    /* Fixed Header */
    /* ========================================================== */

    function fixedHeader() {
        // $(".main-header").sticky({
        // 	topSpacing: 0,
        // 	className:"menu-fixed"
        // });
    }

    if ( (!$('.static-menu').length) ) {
        fixedHeader();
    }




    if (el.length) {
        el.mmenu({
            offCanvas: {
                position:"right",
            },
            extensions  : [ 'effect-slide-menu' ],
            // counters    : true,
            navbar      : {
                title       : 'Home'
            },
            navbars     : [
                {
                    position    : 'top',
                    content     : [
                        '<div id="logo" class="site-logo"><a href="http://bestinbd.com/projects/web/shantaholdings/"><img src="frontend/web/themes/personal/assets/images/dc-logo-h-black.svg"></a></div>',
                        'prev',
                        'title'
                    ]
                }
            ]
        });
    }



    /* Window Resize */
    /* ========================================================== */


    var globalResizeTimer = null;
    $(window).on("resize",function() {

        if(globalResizeTimer !== null) {
            window.clearTimeout(globalResizeTimer);
        }

        globalResizeTimer = window.setTimeout(function() {


            var $windowWidth = $win.width();
            var	newMediaWidth = $('.check-media').width();


            if ( mediaWidth === 991  && newMediaWidth === 0) {
                Megamenu.unbindEvents();
                Megamenu.desktopMenu();
            }

            if ( mediaWidth === 0 && newMediaWidth === 991) {
                Megamenu.unbindEvents();
                Megamenu.mobileMenu();
            }

            mediaWidth = newMediaWidth;



            // Top Bar Wrapper height
            topBarHeight();



        }, 400);
    });
}
// FullWidthMenu();

function newMenu() {
    /*main.js start*/
    /* -----------------------------------------------------------------

     [Content Structure]

     01. Global variables and Helper Functions
     02. Megamenu
     03. Vertical Menu
     04. Fixed Header
     05. Slider config
     06. Carousel config
     07. Plugins config
     #
     Stellar, Flickr Feed, Zoom, Raty, Range Slider, Text Rotator,
     Bootstrap config, Twitter feed, CountTo, MagnificPopup, Sharrre
     #
     08. Miscellaneous
     09. Animations
     10. Portfolio configurations (isotope)
     11. Parallax Backgrounds
     12. Window resize

     ------------------------------------------------------------------- */

    jQuery(document).ready(function($) {
        "use strict";


        /* Global variables */
        /* ========================================================== */


        /* Validate function */
        function validate_data(data, def) {
            return (data !== undefined) ? data : def;
        }


        // Window width (without scrollbar)
        var $windowWidth = $win.width();

        // Detect Mobile Devices
        var isMobileDevice = (( navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone|IEMobile|Opera Mini|Mobi/i) || ($windowWidth < 768) ) ? true : false );

        var isTouchDevice = ((('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) ? true : false);

        // Check media query
        var mediaWidth = $('.check-media').width();

        // detect IE browsers
        var ie = (function(){
            var rv = 0,
                ua = window.navigator.userAgent,
                msie = ua.indexOf('MSIE '),
                trident = ua.indexOf('Trident/');

            if (msie > 0) {
                // IE 10 or older => return version number
                rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            } else if (trident > 0) {
                // IE 11 (or newer) => return version number
                var rvNum = ua.indexOf('rv:');
                rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
            }

            return ((rv > 0) ? rv : 0);
        }());



        /* Megamenu */
        /* ========================================================== */


        var menu = $(".menu");
        var Megamenu = {

            desktopMenu: function() {

                menu.children("li").show(0);
                menu.children(".toggle-menu").hide(0);


                // touch event for tablets > 991px or laptops with touch screen
                if (isMobileDevice || isTouchDevice) {

                    menu.on("click touchstart","a", function(e){

                        if ($(this).attr('href') === '#') {
                            e.preventDefault();
                            e.stopPropagation();
                        }

                        var $this = $(this),
                            $sub = $this.siblings(".submenu, .megamenu");

                        $this.parent("li").siblings("li").find(".submenu, .megamenu").stop(true, true).fadeOut(300);

                        if ($sub.css("display") === "none") {
                            $sub.stop(true, true).fadeIn(300);
                        } else {
                            $sub.stop(true, true).fadeOut(300);
                            $this.siblings(".submenu").find(".submenu").stop(true, true).fadeOut(300);
                        }
                    });

                    $(document).on("click.menu touchstart.menu", function(e){

                        if ($(e.target).closest(menu).length === 0) {
                            menu.find(".submenu, .megamenu").fadeOut(300);
                        }
                    });

                    // Desktop hover effect
                } else {
                    menu.find('li').on({
                        "mouseenter": function() {
                            $(this).children(".submenu, .megamenu").stop(true, true).fadeIn(300);
                        },
                        "mouseleave": function() {
                            $(this).children(".submenu, .megamenu").stop(true, true).fadeOut(300);
                        }
                    });
                }
            },
            mobileMenu: function() {

                // Toggle Menu
                var $children = menu.children("li"),
                    $toggle = menu.children("li.toggle-menu"),
                    $notToggle = $children.not("toggle-menu");


                $notToggle.hide(0);
                $toggle.show(0).on("click", function(){

                    if ($children.is(":hidden")){
                        $children.slideDown(300);
                    } else {
                        $notToggle.slideUp(300);
                        $toggle.show(0);
                    }
                });

                // Click (touch) effect
                menu.find("li").not(".toggle-menu").each(function(){

                    var $this = $(this);

                    if ($this.children(".submenu, .megamenu").length) {

                        $this.children("a").on("click", function(e){

                            if ($(this).attr('href') === '#') {
                                e.preventDefault();
                                e.stopPropagation();
                            }

                            var $sub = $(this).siblings(".submenu, .megamenu");

                            if ($sub.hasClass("open")) {
                                $sub.slideUp(300).removeClass("open");
                            } else {
                                $sub.slideDown(300).addClass("open");
                            }
                        });
                    }
                });
            },
            unbindEvents: function() {
                menu.find("li, a").off();
                $(document).off("click.menu touchstart.menu");
                menu.find(".submenu, .megamenu").hide(0);
            }
        }; // END Megamenu object


        if ( mediaWidth === 991 ) {
            Megamenu.mobileMenu();
        } else {
            Megamenu.desktopMenu();
        }


        $('.mobile-menu-bar').click(function(){
            $('.mmenu-mobile').show();
        });


        // Top Bar Wrapper
        function topBarHeight() {
            var barWrapper = $(".top-bar-wrapper"),
                barHeight = ((barWrapper.outerHeight()) * (-1));

            barWrapper.css("top", barHeight);
        }
        topBarHeight();

        $("#top-bar-trigger").on("click",function() {
            $(".top-bar-wrapper").toggleClass('on');
            return false;
        });

        /* Plugins Configurations */
        /* ========================================================== */

        // Timeout when there might be an error or
       /* setTimeout(function(){

        }, 2500);*/
        $(".animsition").css({
            "opacity":1,
            "transition":"all 0.7s ease-out"
        });


        /* Miscellaneous */
        /* ========================================================== */



        /* Window Resize */
        /* ========================================================== */


        var globalResizeTimer = null;
        $(window).on("resize",function() {

            if(globalResizeTimer !== null) {
                window.clearTimeout(globalResizeTimer);
            }

            globalResizeTimer = window.setTimeout(function() {


                var $windowWidth = $win.width();
                var	newMediaWidth = $('.check-media').width();
                var	isMobileDevice = (( navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone|IEMobile|Opera Mini|Mobi/i) || ($windowWidth < 767) ) ? true : false );


                if ( mediaWidth === 991  && newMediaWidth === 0) {
                    Megamenu.unbindEvents();
                    Megamenu.desktopMenu();
                }

                if ( mediaWidth === 0 && newMediaWidth === 991) {
                    Megamenu.unbindEvents();
                    Megamenu.mobileMenu();
                }

                mediaWidth = newMediaWidth;



                // Top Bar Wrapper height
                topBarHeight();

            }, 400);
        });

    });

    /*main.js end*/
    /*custom.js start*/


        var mmenu = $('#menu');
        mmenu.mmenu({
            offCanvas: {
                position:"right"
            },
            extensions  : [ 'effect-slide-menu' ],
            // counters    : true,
            navbar      : {
                title       : 'Home'
            },
            navbars     : [
                {
                    position    : 'top',
                    content     : [
                        '<div id="logo" class="site-logo"><a href="' + site_url_info.baseUrl + '"><img src="'+site_url_info.themeUrl+'"></a></div>',
                        'prev',
                        'title'
                    ]
                }
            ]
        });
        var mmenuApi = mmenu.data('mmenu');
        $win.on('resize', function () {
            if(mmenu.hasClass('mm-opened') && $win.width() > $mobile) {
                mmenuApi.close();
            }
        });
    /*custom.js end*/
}
newMenu();

function animateLink() {
    $('.explore-btn, .animate-scroll').click(function (e) {
        e.preventDefault();
        if ($($(this).attr('href')).length) {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
        }
        // return false;
    });
}
animateLink();

function secondaryMenuActive() {
    var sm = $('.secondary-menu'),
        li = sm.children('li'),
        dataClass,
        dataTarget;
    /*   li.on('click', function () {
     var $this = $(this);
     if($this.is('.active')) {
     return false;
     }
     dataClass = $this.data('class');
     dataTarget = $('[data-class="' + dataClass+ '"]');
     li.removeClass('active');
     dataTarget.addClass('active');
     console.log(dataClass);
     console.log(dataTarget);
     });*/
    sm.on("activate.bs.scrollspy", function () {
        var $this = $(this),
            activeLi = $this.children('li.active');
        dataClass = activeLi.data('class');
        dataTarget = $('[data-class="' + dataClass + '"]');
        li.removeClass('active');
        dataTarget.addClass('active');
    });
}
secondaryMenuActive();
function primaryCarousel(el, autoPlay) {
    el = $(el).length ? $(el) : $('.carousel-primary');
    if (el.length) {
        el.on('init', function () {
            if(isMobile) {
                el.parent().find('.carousel-nav>img').each(function () {
                    var $this = $(this);
                    if($this.attr('data-src')) {
                        $this.attr('src', $this.data('src'));
                    }
                    console.log($this.attr('data-src'));
                });
            }
        }).slick({
            slidesToShow: 3,
            autoplay: autoPlay || false,
            autoplaySpeed: 5000,
            infinite: false,
            prevArrow: el.parent().find('.carousel-nav>.prev'),
            nextArrow: el.parent().find('.carousel-nav>.next'),
            /*responsive: [
             /!* {
             breakpoint: 1024,
             settings: {
             slidesToShow: 3,
             infinite: true
             }
             },
             {
             breakpoint: 767,
             settings: {
             slidesToShow: 3,
             infinite: true
             }
             },
             {
             breakpoint: 480,
             settings: {
             slidesToShow: 2,
             infinite: true
             }
             }*!/
             ]*/
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }/*,
                 {
                 breakpoint: 480,
                 settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1
                 }
                 }*/]
        });
    }
}
primaryCarousel();

function premierProjects(el, autoPlay) {
    el = $(el).length ? $(el) : $('.premierInit');
    if (el.length) {
        el.on('init', function () {
            if(isMobile) {
                el.parent().find('.carousel-nav>img').each(function () {
                    var $this = $(this);
                    if($this.attr('data-src')) {
                        $this.attr('src', $this.data('src'));
                    }
                    console.log($this.attr('data-src'));
                });
            }
        }).slick({
            slidesToShow: 1,
            autoplay: autoPlay || true,
            autoplaySpeed: 3000,
            infinite: false,
            arrows: true,
            fade: true,
            prevArrow: el.parent().find('.carousel-nav>.prev'),
            nextArrow: el.parent().find('.carousel-nav>.next'),
        });
    }
}
premierProjects();

//-------------------------------  T.A.1.0-Component-02
function floorPlans(el, autoPlay) {
    el = $(el).length ? $(el) : $('.floorPlanInit');
    if (el.length) {
        el.on('init', function () {
            if(isMobile) {
                el.parent().find('.carousel-nav>img').each(function () {
                    var $this = $(this);
                    if($this.attr('data-src')) {
                        $this.attr('src', $this.data('src'));
                    }
                    console.log($this.attr('data-src'));
                });
            }
        }).slick({
            slidesToShow: 6,
            slidesToScroll: 6,
            autoplay: autoPlay || false,
            autoplaySpeed: 5000,
            infinite: false,
            prevArrow: el.parent().find('.carousel-nav>.prev'),
            nextArrow: el.parent().find('.carousel-nav>.next'),
            /*responsive: [
             /!* {
             breakpoint: 1024,
             settings: {
             slidesToShow: 3,
             infinite: true
             }
             },
             {
             breakpoint: 767,
             settings: {
             slidesToShow: 3,
             infinite: true
             }
             },
             {
             breakpoint: 480,
             settings: {
             slidesToShow: 2,
             infinite: true
             }
             }*!/
             ]*/
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }/*,
                 {
                 breakpoint: 480,
                 settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1
                 }
                 }*/]
        });
    }
}
floorPlans();

//-------------------------------  T.A.1.0-Component-02 end


// Video, 360, VR Section

// Video, 360, VR Section



function homeSlider(el, changeColor, fade) {
    el = $(el).length ? $(el) : $('.banner-slider:not(.project-slider-full)');
    changeColor = changeColor || false;
    if (el.length) {
        if (changeColor) {
            var circleBg = $('.circle-bg').first(),
                circleInner = $('.circle-inner').first();
            var bannerSliderItem = el.children('.banner-slider-item'),
                bannerSliderItemColor = [];
            bannerSliderItem.each(function () {
                var $this = $(this),
                    rgbaVal = hexToRgb($this.data('color'));
                bannerSliderItemColor.push(rgbaVal);
            });
            function changeCircleColor(c) {
                circleBg.css({
                    borderColor: 'rgba(' + c + ')'
                }).attr('data-color', c);
                circleInner.css({
                    backgroundColor: 'rgba(' + c + ')'
                });
            }

            // changeCircleColor();
            var fd;
        }
        el.on({
            init: function (event, slick) {
                el.css({
                    opacity: 1
                });
                $('.circle-menu').removeClass('inactive');
                fd = $(this).data('fade') && (typeof ( JSON.parse($(this).data('fade')) == "boolean")) ? JSON.parse($(this).data('fade')) : false;
            },
            beforeChange: function (event, slick, current, nextSlide) {
                var currentSlide = $(slick.$slides[current]),
                    allSlides = $(slick.$slides).not(currentSlide);
                changeCircleColor(bannerSliderItemColor[nextSlide]);
            },
            afterChange: function (event, slick, current) {
                var currentSlide = $(slick.$slides[current]),
                    heading = currentSlide.find('h2'),
                    headingSpan = heading.find('span'),
                    tagline = currentSlide.find('.e_text '),
                    taglineSpan = tagline.children('span');
            }
        }).slick({
            // slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            arrows: false,
            fade: fd,
            /*responsive: [
             {
             breakpoint: 1024,
             settings: {
             slidesToShow: 3,
             infinite: true,
             dots: true
             }
             },
             {
             breakpoint: 600,
             settings: {
             slidesToShow: 2,
             slidesToScroll: 2
             }
             },
             {
             breakpoint: 480,
             settings: {
             slidesToShow: 1,
             slidesToScroll: 1
             }
             }
             ]*/
        });
    }
}
// homeSlider('.banner-slider:not(.project-slider-full)', true);
function layerSlider(el, changeColor) {
    el = $(el).length ? $(el) : $('#layerslider');
    if (el.length) {
        changeColor = changeColor || false;
        if (changeColor) {
            var circleBg = $('.circle-bg').first(),
                circleInner = $('.circle-inner').first();
            var bannerSliderItem = el.find('.banner-slider-item'),
                bannerSliderItemColor = [];
            bannerSliderItem.each(function () {
                var $this = $(this),
                    rgbaVal = hexToRgb($this.data('color'));
                bannerSliderItemColor.push(rgbaVal);
            });
            function changeCircleColor(c) {
                circleBg.css({
                    // borderColor: 'rgba(' + c + ')',
                    backgroundColor: 'rgba(' + c + ')'
                }).attr('data-color', c);
                // circleInner.css({
                //     backgroundColor: 'rgba(' + c + ', 0.5)'
                // });
            }

            // changeCircleColor();
        }
        el.on('sliderDidLoad', function (e) {
            // $('.circle-menu').removeClass('inactive');
            el.addClass('layerslider-loaded');
        }).on('slideChangeWillStart', function (e, slider) {
            changeCircleColor(bannerSliderItemColor[slider.slides.next.index - 1]);
        }).layerSlider({
            maxRatio: 1,
            skinsPath: site_url_info.themeUrl + '/assets/css/skins/',
            showCircleTimer: false,
            autoPlayVideos: false,
            pauseOnHover: false,
            navPrevNext: false,
            navStartStop: false,
            navButtons: false,
            allowFullscreen: false,
            // fillmode: 'cover'
            // fullSizeMode: 'fitheight',
            // type: 'fullsize',
        });
    }
}
layerSlider('#layerslider', true);
function specialityLightbox(el, targetClass, closeBtn) {
    el = $(el).length ? $(el) : $('.our-specility-lightbox-wrapper');
    var triggerItem = el.find('.lbox-btn'),
        target,
        targetWidth,
        targetHeight,
        parent = el.children('.parent'),
        winW = window.innerWidth,
        triggerHeight,
        triggerWidth;
    targetClass = $(targetClass).length ? $(targetClass) : $('.specility-lightbox-item');
    closeBtn = $(closeBtn).length ? $(closeBtn) : $('.close-lightbox');
    triggerItem.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        if ($this.hasClass('active')) {
            return
        }
        $doc.on('click', function (evt) {
            //	console.log($(evt.target).parents('.lbox-btn.active'));
            /*if ((!($(evt.target).parents('.lbox-btn.active').length)) || (($(evt.target).parents('.specility-lightbox-item.active').length))) {
             console.log('hello');
             }*/
            if ($('.lbox-btn.active').length) {
                //	  console.log($(evt.target).parents('.specility-lightbox-item.active') );
                if ((!($(evt.target).parents('.lbox-btn.active').length)) && (!($(evt.target).parents('.specility-lightbox-item.active').length))) {
                    $('.lbox-btn.active').removeClass('active');
                    $('.specility-lightbox-item.active').fadeOut('fast').removeClass('active');
                }
            }
            //	console.log($(evt.target).parents('.lbox-btn.active'));
        });
        var $this_height = $this.outerHeight();
        triggerItem.removeClass('active');
        $this.addClass('active');
        triggerWidth = $this.outerWidth();
        triggerHeight = $this.outerHeight();
        target = $($this.prop('hash'));
        targetWidth = parseInt(target.outerWidth());
        targetClass.fadeOut('fast').removeClass('active');
        if (winW > 992) {
            target.css({
                left: '',
                right: parseInt((parent.width() - $this.parent().position().left) - 15) + 'px',
                top: ''
            });
        } else {
            target.css({
                left: 0,
                right: '',
                top: parseInt($this_height + $this.parent().position().top + 15) + 'px'
            });
        }
        $win.on('resize', function () {
            winW = window.innerWidth;
            triggerWidth = $this.outerWidth();
            triggerHeight = $this.outerHeight();
            $this_height = $this.outerHeight();
            if (winW > 992) {
                target.css({
                    // left: triggerWidth + $this.parent().position().left + 30 + 'px',
                    left: '',
                    right: parseInt(parent.width() - $this.parent().position().left) - 15 + 'px',
                    top: ''
                });
            } else {
                target.css({
                    left: 0,
                    right: '',
                    top: parseInt($this_height + $this.parent().position().top + 15) + 'px',
                    // top: $this_height + $this.parent().position().top + 'px'
                });
            }
        });
        target.fadeIn('fast').addClass('active');
        closeBtn.on('click', function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.parent().fadeOut('fast').removeClass('active');
            triggerItem.removeClass('active');
        });
        /*   var activeCls = targetClass.selector + '.active';
         setTimeout(function () {
         $doc.on('click', function (e) {

         // var container = $("YOUR CONTAINER SELECTOR");
         if ((!target.is(e.target) && target.has(e.target).length === 0) ) {
         if($(activeCls).length) {
         $(activeCls).removeClass('active');
         triggerItem.removeClass('active');
         console.log('sdf34');
         }
         }
         console.log('hello');
         });
         console.log('tesy');
         }, 5000)*/
    });
    customScroller('.specility-lightbox-item .inner', 100, true);
}
specialityLightbox();
function l_gallery(el) {
    el = $(el).length ? $(el) : $('.light-gallery');
    if (el.length) {
        el.lightGallery({
            selector: 'a',
            zoom: true,
            download: false,
            hideBarsDelay: 99999999
        });
    }
}
l_gallery();

function yl_gallery(el) {
    el = $(el).length ? $(el) : $('.youtube-light-gallery');
    if (el.length) {
        el.lightGallery({
            selector: 'a',
            zoom: false,
            download: false,
            hideBarsDelay: 99999999
        });
    }
}
yl_gallery();

function mixItUpGallery() {
    var containerEl = $('.mixitup-container');
    if (containerEl.length) {
        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });
    }
}
mixItUpGallery();
function stickyHeader() {
    var logoWrapper = $('.logo-wrapper'),
        projectMMenu = $('.project-menu-mobile');
    logoWrapper.headroom({
        // tolerance : 100,
        // offset: 10,
        offset: $('.banner-slider-wrapper').length ? ($('.banner-slider-wrapper').outerHeight() - 150) : 300,
        classes: {
            pinned: "sticky-menu",
            unpinned: "sticky-menu--unpinned",
        },
        onTop: function () {
            logoWrapper.removeClass('sticky-menu');
        },
        onUnpin: function () {
            projectMMenu.removeClass('active');
        }
    });
}
// stickyHeader();
function scrolledBanner(el) {
    var bannerSliderWrapper = $('.banner-slider-wrapper ').first(),
        fullContent = bannerSliderWrapper.find('.fullscreen-content:not(.general-page)'),
        containerFluid = fullContent.find('.container-fluid'),
        row = containerFluid.children('.row'),
        rightContent = containerFluid.find('.mcustom-scrollar');
    var topDivVisible = true,
        inView = false,
        hasClassUp = false;
    var enableScroll = false;
    var contentHeight = fullContent.outerHeight(),
        scrolledTop = $win.scrollTop();
    if (fullContent.length) {
        var featureDetailsBoxWrapper = $('.feature-details-box-wrapper');
        bannerSliderWrapper.onScreen({
            doIn: function () {
                if (featureDetailsBoxWrapper.length) {
                    featureDetailsBoxWrapper.removeClass('active');
                }
            }
        });
        /*(function () {
         function t(t) {
         (t = t || window.event), t.preventDefault, (t.returnValue = !1);
         }

         function e(e) {
         for (var i = g.length; i--;) {
         if (e.keyCode === g[i]) {
         return void t(e);
         }
         }
         }

         function i() {
         document.body.addEventListener(
         "touchstart",
         n
         ), document.body.addEventListener("touchmove", o);
         }

         function n(t) {
         if (1 == t.touches.length || 2 == t.touches.length) {
         var e = t.touches[0];
         b = {
         x: e.pageX,
         y: e.pageY
         };
         }
         }

         function o(e) {
         if (b) {
         var i = e.touches[0];
         Math.abs(b.y - i.pageY) > Math.abs(b.x - i.pageX) &&
         (t(e), window.scrollTo(0, 1)), (b = null);
         }
         }

         function r(e) {
         t(e);
         var i = e.detail < 0 || e.wheelDelta > 0 ? 1 : -1;
         i == -1 && window.scrollTo(0, 1);
         }

         function s() {
         (window.onmousewheel = (document.onmousewheel = r)), (document.onkeydown = e), (document.body.ontouchmove = i());
         }

         function a() {
         (window.onmousewheel = (document.onmousewheel = (document.onkeydown = (document.body.ontouchstart = (document.body.ontouchmove = null))))), document.body.removeEventListener(
         "touchmove",
         o
         ), document.body.removeEventListener("touchstart", n);
         }

         function l() {
         return window.pageYOffset || w.scrollTop;
         }

         function c() {
         if (((p = l()), m && !v)) {
         if (p < 0) {
         return !1;
         }
         window.scrollTo(0, 0);
         }
         return $(E).hasClass("notrans")
         ? $(E).removeClass("notrans")
         : !y && void (p <= 0 && f ? u(0) : p > 0 && !f && u(1));
         }

         function pushUp() {
         TM.to(row, 0.1, {
         autoAlpha: 0,
         delay: 0,
         ease: Power0.easeNone
         })
         }

         function pullDown() {
         TM.to(row, 0.1, {
         autoAlpha: 1,
         delay: 0.3,
         ease: Power0.easeNone
         })
         }

         var dControll = $('.banner-dot-control'),
         ctrl = dControll.children(),
         topCtrl = dControll.children('.top-control'),
         bottomCtrl = dControll.children('.bottom-control');

         function controlClick() {
         if (dControll.length) {
         topCtrl.on('click', function (e) {
         e.preventDefault();
         var $this = $(this);
         if ($this.hasClass('active')) {
         return false;
         }
         ctrl.removeClass('active');
         fullContent.removeClass('up');
         pullDown();
         $this.addClass('active');
         });
         bottomCtrl.on('click', function (e) {
         e.preventDefault();
         var $this = $(this);
         if ($this.hasClass('active')) {
         return false;
         }
         ctrl.removeClass('active');
         fullContent.addClass('up');
         pushUp();
         $this.addClass('active');
         });
         }
         }

         controlClick();
         function u(t) {
         /!*   (y = !0), t
         ? $(E).addClass('up')
         : ((m = !0), s(), $(E).removeClass('up')), setTimeout(
         function() {
         (f = !f), (y = !1), t && ((m = !1), a(), window.scrollBy(0, 1));
         },
         1200
         );*!/
         (y = !0), t
         ? ($(E).addClass('up'), topCtrl.removeClass('active'), bottomCtrl.addClass('active'), pushUp())
         : ((m = !0), s(), $(E).removeClass('up'), rightContent.mCustomScrollbar('scrollTo', 'top'), topCtrl.addClass('active'), bottomCtrl.removeClass('active'), pullDown()), setTimeout(
         function () {
         (f = !f), (y = !1), t && ((m = !1), a(), window.scrollBy(0, 1));
         },
         1000
         /!*100*!/
         );
         }

         var p,
         f,
         m,
         y,
         v = (function () {
         var t,
         e = -1,
         i = window.navigator.userAgent,
         n = i.indexOf("MSIE "),
         o = i.indexOf("Trident/");
         if (n > 0) {
         e = parseInt(i.substring(n + 5, i.indexOf(".", n)), 10);
         } else if (o > 0) {
         var r = i.indexOf("rv:");
         e = parseInt(i.substring(r + 3, i.indexOf(".", r)), 10);
         }
         return e > -1 ? e : t;
         })(),
         g = [32, 37, 38, 39, 40],
         b = null,
         w = window.document.documentElement,
         E = document.querySelector(fullContent.selector),
         S = l();
         (m = 0 === S), s(), S &&
         ((f = !0), a(), document.removeEventListener(
         "touchmove",
         o
         ), document.removeEventListener("touchstart", n), $(E).addClass(
         "up"
         )), window.addEventListener("scroll", c);
         })();*/
    }
}
scrolledBanner();
function projectMenuMobile() {
    var pmenuMobile = $('.project-menu-mobile');
    pmenuMobile.on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
    })
}
projectMenuMobile();
function customDropdown(el) {
    el = $(el).length ? $(el) : $('.custom-select select');
    if (el.length) {
        el.niceSelect();
    }
}
customDropdown();
function customDropdownEvent() {
    var nc = $('.nice-select');
    var primaryForm = $('.search-result-menu .form-primary').eq(0);
    $(document).on('click.nice_select', function (event) {
        if ($(event.target).closest('.nice-select').length === 0) {
            // console.log('fake');
            primaryForm.css({
                height: ''
            })
        }
    });
}
customDropdownEvent();
/*function img_lazy_load(el) {
 var $win = $(window),
 el = $(el);
 el.Lazy({
 threshold: 100,
 attribute: "data-original",
 removeAttribute: false,
 });
 function mobileLazyFalse() {
 if ($win.width() < 768) {
 el.each(function () {
 var $this = $(this);
 if ($this.is('img')) {
 $this.attr('src', $this.attr("data-original"));
 } else {
 $this.css({
 'background-image': 'url("' + $this.attr("data-original") + '")'
 });
 }
 });
 }
 }

 mobileLazyFalse();
 $win.resize(function () {
 mobileLazyFalse();
 });
 }
 img_lazy_load(".lazy-load");
 */
function exploreFeatureDetails() {
    var wrapper = $('.feature-details-box-wrapper');
    if (wrapper.length) {
        var box = wrapper.find('.feature-details'),
            exploreBtn = wrapper.find('.explore-btn');
        exploreBtn.on('click', function (e) {
            e.preventDefault();
            $(this).parents(wrapper.selector).toggleClass('active');
        });
        box.each(function () {
            var $this = $(this);
            if (this.scrollHeight <= 350) {
                $this.parent().find('.explore-btn').css({
                    display: 'none'
                });
            }
        });
    }
}
exploreFeatureDetails();
function scrollSpy() {
    var secondaryMenuWrapper = $('#secondary-menu-wrapper');
    if (secondaryMenuWrapper.length) {
        $body.scrollspy({
            target: '#secondary-menu-wrapper',
            offset: 180
        });
    }
}
scrollSpy();
function scrollerResizeAction() {
    var mc = $('.mcustom-scrollar');
    var menuOverlay = $('.menu-overlay'),
        projectDetailsContainer = $('.project-detail-info .container-fluid');
    customScroller(menuOverlay.selector);
    if ($win.width() < $desktop) {
        if (mc.data('mCS')) {
            destroyScroller(mc.selector);
        }
        // customScroller('.project-detail-info .container-fluid');
        console.log('tet');
    } else {
        if (projectDetailsContainer.data('mCS')) {
            // destroyScroller('.project-detail-info .container-fluid');
        }
    }
    $win.on('resize', function () {
        if ($win.width() < $desktop) {
            if (mc.data('mCS')) {
                destroyScroller(mc.selector);
            }
            if (!menuOverlay.data('mCS')) {
                // customScroller(menuOverlay.selector);
            }
            // customScroller('.project-detail-info .container-fluid');
            parallaxDestroy();
        } else {
            if (!mc.data('mCS')) {
                customScroller();
            }
            if (!menuOverlay.data('mCS')) {
                // destroyScroller(menuOverlay.selector);
            }
            if (projectDetailsContainer.data('mCS')) {
                destroyScroller(projectDetailsContainer.selector);
            }
            parallaxReinit();
        }
    });
}
scrollerResizeAction();
function CustomFileUploadBtn() {
    var inputFIle = $('input[type="file"]');
    if (inputFIle.length) {
        inputFIle.each(function () {
            var $input = $(this),
                $label = $input.next('label'),
                labelVal = $label.html();
            $input.on('change', function (e) {
                var fileName = '';
                if (this.files && this.files.length > 1) {
                    fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
                }
                else if (e.target.value) {
                    fileName = e.target.value.split('\\').pop();
                }
                if (fileName) {
                    $label.html(fileName);
                }
                else {
                    $label.html(labelVal);
                }
            });
            // Firefox bug fix
            $input
                .on('focus', function () {
                    $input.addClass('has-focus');
                })
                .on('blur', function () {
                    $input.removeClass('has-focus');
                });
        });
    }
}
CustomFileUploadBtn();
function closeFormMsg() {
    var formMsgContainer = $('.form-message-container'),
        successWrapper = $('.form-message-container.success_wrapper'),
        errorWrapper = $('.form-message-container.error_wrapper'),
        msgBody = $('.form-message-body'),
        closeBtn = formMsgContainer.find('[data-msg-close]');
    if (formMsgContainer.length) {
        $doc.on('click', function (evt) {
            if (!successWrapper.hasClass('hide') && !($(evt.target).hasClass('form-message-body')) && (!($(evt.target).parents('.form-message-body').length))) {
                successWrapper.addClass('hide');
            }
            if (!errorWrapper.hasClass('hide') && !($(evt.target).hasClass('form-message-body')) && (!($(evt.target).parents('.form-message-body').length))) {
                errorWrapper.addClass('hide');
            }
        });
        closeBtn.on('click', function (e) {
            $(this).parents(formMsgContainer.selector).addClass('hide');
        });
    }
}
closeFormMsg();
function instagramFeed() {
    var el = $('#instagram-gallery');
    if (el.length) {
        var feed = new Instafeed({
            get: 'user',
            userId: 4241787606,
            accessToken: '4241787606.1677ed0.ceeee7843efe4ecb9fe33bdbb59d4a58',
            target: 'instagram-gallery',
            resolution: 'thumbnail',
            limit: 8,
            after: function () {
                el.addClass('show');
            },
            template: '<div class="col-xs-6 custom-col-xs-4 col-sm-3 no-pad"><a href="{{link}}" target="_blank" class=""><img src="{{image}}" /></a></div>'
        });
        feed.run();
    }
}
instagramFeed();
function facebookFeed() {
    var el = $('#facebook-gallery');
    if (el.length) {
        el.FacebookAlbumBrowser({
            account: "shantaholdings",
            accessToken: "1366463183401951|GX0HgLXnHCrAxSCu85TyPYgfXCU",
            includeAlbums: ["Akash Prodip"],
            onlyAlbum: '327145904117433',
            showComments: false,
            commentsLimit: 3,
            showAccountInfo: false,
            showImageCount: false,
            showImageText: false,
            albumsPageSize: 0,
            photosPageSize: 0,
            lightbox: false,
            photosCheckbox: false,
            pluginImagesPath: "./themes/real_estate/assets/img/icons/",
            likeButton: false,
            shareButton: false,
            addThis: "ra-52638e915dd79612",
            photoItemClass: 'col-xs-6 custom-col-xs-4 col-sm-3 no-pad',
            photoLimit: 4,
            photoChecked: function (photo) {
                console.log("PHOTO CHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
            },
            photoUnchecked: function (photo) {
                console.log("PHOTO UNCHECKED: " + photo.id + " - " + photo.url + " - " + photo.thumb);
                console.log("CHECKED PHOTOS COUNT: " + this.checkedPhotos.length);
            },
            albumSelected: function (photo) {
                console.log("ALBUM CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
            },
            photoSelected: function (photo) {
                console.log("PHOTO CLICK: " + photo.id + " - " + photo.url + " - " + photo.thumb);
            }
        });
    }
}
facebookFeed();
function openNav(e) {
    e.preventDefault();
    document.getElementById("mySidenav").style.width = "400px";
}
function closeNav(e) {
    e.preventDefault();
    document.getElementById("mySidenav").style.width = "0";
}
$(document).delegate('.msg_cont', 'click', function () {
    open_msg();
});
$(document).delegate('.msg_icon', 'click', function () {
    open_msg();
});
function open_msg() {
    $('.msg_cont_wrap').css({'width': '330px', 'height': '400px'});
    TM.to('.msg_cont', 0.2, {
        height: 580,
        width: 580,
        right: -86,
        bottom: -86,
        borderRadius: 290,
        background: 'rgba(255, 255, 255, 1)',
        onComplete: function () {
            // TM.set(siteOverlayMenuWrapper, {
            //     top: '-100%'
            // });
        }
    });
    TM.to('.msg_form', 0.5, {
        right: 0,
        delay: 0.2,
        onComplete: function () {
            $('.msg_cont_wrap').addClass('bx_shadow');
        }
    });
    $('.msg_cont_wrap').addClass('msg_opened');
    $('.msg_cont_wrap').removeClass('msg_closed');
}
(function() {
    var msgContent = $('.msg_cont');
    function close_msg() {
        $('.msg_cont_wrap').removeClass('bx_shadow');
        var right = '35px',
            width = height = '65px',
            bottom = '36px';

        if($win.width() < $mobile) {
            right = '14px';
            width = height = '50px',
                bottom = '19px';
        }

        var cf = $('.container-fluid').eq(0);

        TM.to(msgContent, 0.2, {
            right: right,
            width: width,
            height: height,
            bottom: bottom,
            borderRadius: '100%',
            background: '#aaa000',
            onComplete: function () {
                setTimeout(function () {
                    $('.msg_cont_wrap').css({'width': '140px', 'height': '140px'});
                    msgContent.css({
                        right: '',
                        width: '',
                        height: '',
                        bottom: '',
                    });
                }, 500);
            }
        });
        TM.to('.msg_form', 0.5, {
            right: -500
        });
        setTimeout(function () {
            $('.msg_cont_wrap').removeClass('msg_opened');
            $('.msg_cont_wrap').addClass('msg_closed');
        }, 500);
    }

    $(document).delegate('.close_btn', 'click', function () {
        close_msg();
    });
}());
function jobDetailsModal() {
    var listItem = $('.opening-jobs-list-item'),
        link = listItem.find('.job-title-link'),
        modal = $('.jobs-details-modal');
    if (link.length) {
        link.on('click', function (e) {
            e.preventDefault();
            var $this = $(this),
                targetEl = $($(this).attr('href'));
            if (targetEl.length) {
                targetEl.modal();
            }
        });
    }
    if (modal.length) {
        modal.each(function () {
            $(this).on({
                'show.bs.modal': function (e) {
                    console.log('show');
                    console.log(e.target);
                    customScroller($(e.target).find('.modal-content'));
                },
                'shown.bs.modal': function (e) {
                    console.log('shown');
                    console.log(e.target);
                },
                'hide.bs.modal': function (e) {
                    console.log('hide');
                    console.log(e.target);
                },
                'hidden.bs.modal': function (e) {
                    console.log('hidden');
                    console.log(e.target);
                    destroyScroller($(e.target).find('.modal-content'));
                }
            });
        });
    }
}
jobDetailsModal();

function memberDetailsExpand() {
    var listItem = $('.member-list-item'),
        selector = listItem.selector,
        dfH = listItem.find('.details-info').first().outerHeight(),
        expandBtn = listItem.find('.member-details-expand');
    if(expandBtn.length) {
        expandBtn.on('click', function (e) {
            e.preventDefault();
            var $this = $(this),
                detailInfo = $this.prev('.details-info').first(),
                scrollHeight = detailInfo[0].scrollHeight;
            // $this.prev('.details-info').slideDown();
            $this.parents(selector).toggleClass('active');
            detailInfo.animate({
                height: ((detailInfo.outerHeight() == dfH)? scrollHeight  : dfH)
            }, 500);
            console.log( $this.parents(selector).first());
        });
    }
}
memberDetailsExpand();

function inputFocus() {
  $('.form-control').on('focus', function () {
    $(this).parent().addClass('focused');
  });
  $('.form-control').on('focusout', function () {
    $(this).parent().removeClass('focused');
  });
}
inputFocus();


// nice select
if ($('.Select').length > 0) {
    $('.Select select').niceSelect();
}


// tab change in mobile using nice select
$('.TabSelect').on('change', function (e) {
    $('.TabMenus li a').eq($(this).val()).tab('show');
});


// cercile menu open for 10 second
$(function() {
  setTimeout(function() {
    $(".circle-menu").removeClass("active");
  }, 10000);

  setTimeout(function() {
    $(".loader-line-mask").css({"width": "203px", "height": "40px", "margin-left": "-203px", "margin-top": "-203px", "transform-origin": "203px 203px"});
    $(".loader-line-mask .loader-line").css({"width": "406px", "height": "406px"});
  }, 10000);
});

// Circle menu animation
$(function() {
  $win.load(function() {
    $(".init-animation").removeClass("loader-line-mask");
  });
});
(function(){
    /*
     * IDEAS FOR THE FUTURE:
     * - Add data-title attribute to add overlay with title [optional]
     * -
     */

    /********************************************************************
     ************************** MAIN VARIABLES ***************************
     *********************************************************************/
    var youtube = document.querySelectorAll('.yt-lazyload'),

        youtube_observer,                                               //Intersection Observer API

        template_wrap,
        template_content,
        template_playbtn,
        template_logo,
        template_iframe,

        settings_observer_rootMargin    = '200px 0px',                  //Intersection Observer API option - rootMargin (Y, X)
        settings_thumb_base_url         = '',     //Base URL where thumbnails are stored
        settings_thumb_extension        = 'webp';                       //Thumbnail extension



    /********************************************************************
     ************************ IF ELEMENTS EXIST **************************
     *********************************************************************/
    if(youtube.length > 0){

        //create elements
        template_wrap       = document.createElement('div');
        template_content    = document.createElement('div');
        template_playbtn    = document.createElement('div');
        template_logo       = document.createElement('a');
        template_iframe     = document.createElement('iframe');

        //set attributes
        template_wrap.classList.add('yt-lazyload-wrap');
        template_content.classList.add('yt-lazyload-content');

        template_playbtn.classList.add('yt-lazyload-playbtn');

        template_logo.classList.add('yt-lazyload-logo');
        template_logo.target = '_blank';
        template_logo.rel    = 'noreferrer';

        template_iframe.setAttribute('allow','accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture');
        template_iframe.setAttribute('allowfullscreen','');


        /********************************************************************
         ********************* INTERSECTION OBSERVER API *********************
         *********************************************************************/
        youtube_observer = new IntersectionObserver(function(elements){

            elements.forEach(function(e){

                //VARIABLES
                var this_element    = e.target,

                    this_wrap,
                    this_content,
                    this_playbtn,
                    this_logo,
                    this_iframe,

                    this_data_id    = e.target.dataset.id,
                    this_data_thumb = e.target.dataset.thumb,
                    this_data_logo  = e.target.dataset.logo;


                //if element appears in viewport
                if(e.isIntersecting === true){

                    //wrap
                    this_wrap = template_wrap.cloneNode();
                    this_element.append(this_wrap);

                    //content
                    this_content = template_content.cloneNode();
                    this_wrap.append(this_content);

                    //background-image
                    this_content.style.setProperty('background-image','url("' + this_data_thumb + '")');

                    //play btn
                    this_playbtn = template_playbtn.cloneNode();
                    this_content.append(this_playbtn);

                    //logo link
                    if(this_data_logo !== '0'){
                        this_logo       = template_logo.cloneNode();
                        this_logo.href  = 'https://youtu.be/' + this_data_id;
                        this_content.append(this_logo);
                    }

                    //onclick create iframe
                    this_playbtn.addEventListener('click',function(){
                        this_iframe     = template_iframe.cloneNode();
                        this_iframe.src = 'https://www.youtube.com/embed/' + this_data_id + '?autoplay=1';
                        this_content.append(this_iframe);
                    });

                    //Unobserve after image lazyloaded
                    youtube_observer.unobserve(this_element);

                    //LOG
                    //console.log('DONE - ' + this_data_id);
                }

            });

        },{
            rootMargin: settings_observer_rootMargin,
        });


        /********************************************************************
         ********************* ITERATE THROUGH ELEMENTS **********************
         *********************************************************************/
        youtube.forEach(function(e){

            //Intersection Observer API - observe elements
            youtube_observer.observe(e);

        });
    }

})();