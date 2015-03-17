jQuery(document).ready(function($) {
    jQuery('#trigger-lateral-menu').on('click', function() {
        var slideMenuWidth = jQuery('#lateral-menu-container').width();
        if (jQuery(this).hasClass('menu-open')) {
            jQuery(this).removeClass('menu-open');
            slideMenuWidth = 0;
        } else {
			jQuery(this).addClass('menu-open');
        }
        jQuery('.main-content-wrapper').css({
            transform: 'translateX(-' + slideMenuWidth + 'px)',
            MozTransform: 'translateX(-' + slideMenuWidth + 'px)',
            WebkitTransform: 'translateX(-' + slideMenuWidth + 'px)',
            msTransform: 'translateX(-' + slideMenuWidth + 'px)'
        });

    });
});
