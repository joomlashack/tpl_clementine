jQuery(document).ready(function($) {
    jQuery('#trigger-lateral-menu').click(function() {
        var istMenuVisible = jQuery('#lateral-menu').is(':visible');
        lateralMenu(istMenuVisible);
    });

    function lateralMenu(istMenuVisible) {
        if (!istMenuVisible) {
            var lateralMenuWidth = jQuery('#lateral-menu').width() + 40;
            jQuery('.total').animate({
                right: lateralMenuWidth
            }, 500, animationFinishOpen);
            jQuery('#lateral-menu').show();
            jQuery('.navbar-fixed-top').addClass('relative');
        } else {
            animationClose();
        }

        function animationClose() {
            jQuery('.total').animate({
                right: '0px'
            }, 500, animationFinishClose);
            jQuery('#lateral-menu').removeClass('show-lateral-menu');
        }

        function animationFinishClose() {
            jQuery('#lateral-menu').hide();
            jQuery('.navbar-fixed-top').removeClass(
                'relative');
            jQuery('#lateral-menu').unbind('mouseleave');
        }

        function animationFinishOpen() {
            jQuery('#lateral-menu').addClass('show-lateral-menu');
        }

    }

    var featuredPosition      = jQuery('#featured'),
        bg          = jQuery("#bg-header"),
        aspectRatio = bg.width() / bg.height();

    function resizeBg() {
        if (bg.length) {
            if ( (featuredPosition.width() / featuredPosition.height()) < aspectRatio ) {
                bg
                    .removeClass()
                    .addClass('full-height');
            } else {
                bg
                    .removeClass()
                    .addClass('full-width');
            }
        }
    }

    function resizeTotal() {
        var wheight = jQuery(window).height();
        var footerheight = jQuery("#footer").height();

        jQuery(".total").css({
           'min-height' :  wheight - footerheight + 'px'})

    }

    jQuery('.toolbar-collapse-btn').click(function (b) {
        if (jQuery('.wrappToolbar').hasClass('collapsedToolbar')) {

            jQuery('.wrappToolbar .navbar-inner .collapsedToolbarInner').animate(
                { height: '40px' },'fast', function() {
                    jQuery('.wrappToolbar').removeClass('collapsedToolbar');
                    jQuery('.wrappToolbar .clementine-toolbar-container').removeClass('collapsedToolbarInner');
                }
            );
            jQuery(this).children('i').toggleClass('icon-angle-down', 'fast');
            jQuery(this).children('i').toggleClass('icon-angle-up', 'fast');

        }
        else {
            jQuery('.wrappToolbar').addClass('collapsedToolbar');
            jQuery('.wrappToolbar.collapsedToolbar .clementine-toolbar-container').addClass('collapsedToolbarInner');
            // jQuery(this).animate({ color: '#000'}, 'fast');
            jQuery(this).animate({top: '0'}, 'fast');
            jQuery('.wrappToolbar .navbar-inner .collapsedToolbarInner').animate(
                { height: '0px' },'fast'
            );
            jQuery(this).children('i').toggleClass('icon-angle-down', 'fast');
            jQuery(this).children('i').toggleClass('icon-angle-up', 'fast');
        }
        jQuery('.wrappToolbar .wrapper-toolbar').css({minHeight: '40px'});

    });

    resizeBg();
    resizeTotal()

    jQuery(window).resize(function() {
        resizeBg();
        resizeTotal()
    });
});


