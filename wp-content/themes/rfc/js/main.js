// Freelancer Theme JavaScript
(function($) {
    "use strict"; // Start of use strict
    
    
    $('.partner-item').click (function () {
        location.href = $(this).attr('data-href');
    });
    
    

    // Client odd image
    $('.client-figure').hover(function () {
       $(this).find('.elem01').removeClass('show').addClass('hidden'); 
       $(this).find('.elem02').removeClass('hidden').addClass('show'); 
    }, function () {
       $(this).find('.elem01').removeClass('hidden').addClass('show'); 
       $(this).find('.elem02').removeClass('show').addClass('hidden'); 
    });


    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    });
    
    
    $('.image').hover(function () {
       $(this).find('.caption > .caption-text').css('width', $(this).find('.img-hover').width());
       $(this).find('.caption > .caption-text').css('height', $(this).find('.img-hover').height());
       $(this).find('.caption > .blur').css('width', $(this).find('.img-hover').width());
       $(this).find('.caption > .blur').css('height', $(this).find('.img-hover').height());
    });

    $('.image').click(function (){
       location.href = $(this).attr('data-href');
    });
    

})(jQuery); // End of use strict

