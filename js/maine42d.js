(function($) {
    
    // Preload images. 
    $('body').queryLoader2({
        backgroundColor: 'transparent',
        percentage: true,
        fadeOutTime: 0,
        onComplete: function() {
            $('body').addClass('loaded');
        },
        minimumTime: 0
    });
    
    // Initiate magazine plugin on click enter.
    $('.enter-magazine').on('click', function(e) {
        $('#wrapper').suodPageFlip({
            controlsContainer: '#toc nav',
            slideSelector: '.page',
            onSubPageOpen: function() {
                $('body').addClass('subpage-open');
            },
            onSubPageClose: function() {
                $('body').removeClass('subpage-open');
            }
        });
        
        $('#preface').fadeTo(300, 0, function() {
            $(this).remove();
        });
        
        e.preventDefault();
    });

    // Navigation menu fold out.
    $("#flerp, #toc nav a").on('click', function(e) {
        $('body').toggleClass('nav-open');
        e.preventDefault();
    });
    
    $('.toggle-video').on('click', function(e) {
        $('body').toggleClass('video-open');
        e.preventDefault();
    });
})(jQuery);
