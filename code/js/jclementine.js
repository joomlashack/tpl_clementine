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
});


