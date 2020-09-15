// Main JS Here

console.log('loaded main.js...');

// Toggle Menu - Toggle Menu Function
jQuery('#toggle').click(function() {
    jQuery(this).toggleClass('active');
    jQuery('#navbarNavDropdown').toggleClass('open');
});

// Hamburger Menu - Remove the Hamburger menu Overlay after click
jQuery('#main-menu li a').click(function() {
    jQuery('#navbarNavDropdown').removeClass('open');
    jQuery('#toggle').removeClass('active');
});

// Header - Add Sticky Header Function.
jQuery(document).on('scroll', function() {
    if (jQuery(document).scrollTop() > 120) {
        jQuery('.site-header').addClass('sticky-header');
    } else {
        jQuery('.site-header').removeClass('sticky-header');
    }
});

// Scroll to Section - Add Scroll to Section Function.
jQuery(".scroll-to-section a[href^='#']").click(function(e) {
    e.preventDefault();
    var position = jQuery(jQuery(this).attr("href")).offset().top;
    jQuery("body, html").animate({
        scrollTop: position
    } /* speed */ );
});
  

// Footer - Sticky Footer Function
jQuery(document).ready(function() {
    // calculate element sizes here is accurate because the entire page has been loaded
    jQuery(window).load(function() {
        function fixFooter() {
            var windowHeight = jQuery(window).height();
            var bodyHeight = jQuery('body').height();
            var footerBottom = jQuery('.footer-wrapper').position().top + jQuery('.footer-wrapper').outerHeight(true);

            if (footerBottom < windowHeight) {
                // slam the footer to the bottom
                jQuery('.footer-wrapper').addClass("sticky-footer")
            }
        }
        fixFooter();
        jQuery(window).resize(function() {
            fixFooter();
        });
    });
});