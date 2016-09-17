(function($) {
    'use strict';
    
    $.fn.suodPageFlip = function(options) {
        
        var elem = this;
        
        // Runtime variables.
        var scrollTop        = 0,
            slidesScroll     = true,
            openSlide        = null,
            openSlideOffset  = 0,
            subPageOpen      = false,
            slidesHeight     = 0;
        
        var opts = $.extend({
                slideSelector: '.slide',
                keyboard: true,
                outOfViewOffset: 20,
                wrapperHeight: elem.height(),
                toSubBtn: '.to-sub',
                toNextSubBtn: '.next',
                toPrevSubBtn: '.prev',
                closeAllSubs: '.close-subs',
                controlsContainer: '.controls',
                controlsElement: 'a',
                horizontalPageFlipSpeed: 500,
                verticalPageFlipSpeed: 500,
                onSubPageOpen: function() {},
                onSubPageClose: function() {}
            }, options );
        
        var slides = $(opts.slideSelector);
        
        // Store each slide's important properties.
        var slidePositions = (function() {
            var pxCount   = 0,
                positions = [];
                 
            $(opts.slideSelector, this).each(function() {
                var slideHeight = $(this).height();
                var position = {}
                
                pxCount += slideHeight;
                
                position = {
                    el: $(this),
                    start: pxCount - slideHeight,
                    end: pxCount,
                    open: false
                }
                
                position.scrollOffset = ($(this).attr('data-scroll-offset')) ? parseInt($(this).attr('data-scroll-offset')) : 0;
                positions.push(position);
            });
            
            slidesHeight = pxCount;

            return positions;
        })();
        
        // Move from slide to slide using arrow keys.            
        var moveOnKey = function(dest) {
            var destinations = slidePositions;
            
            var currentSlide = null,
                nextSlide    = null;
            
            for (var i = 0; i < slidePositions.length; i++) {
                currentSlide = slidePositions[i];
                nextSlide = (slidePositions[i+1]) ? slidePositions[i+1] : false;                
                
                if (!subPageNavigation.slide) {
                    if (dest === 'down' && 
                        scrollTop >= currentSlide.start && 
                        scrollTop < currentSlide.end &&
                        nextSlide) {
                            
                        $('html, body')
                            .animate({
                                scrollTop: (nextSlide.start + nextSlide.scrollOffset) + 'px'
                            }, opts.verticalPageFlipSpeed);
                            
                        break;
                    }
                    
                    if (dest === 'up' &&
                        scrollTop <= currentSlide.start &&
                        slidePositions[i-1]) {
                       
                        $('html, body')
                            .animate({
                                scrollTop: slidePositions[i-1].start + 'px'
                            }, opts.verticalPageFlipSpeed);
                            
                        break;
                    }
                }
       
                if (currentSlide.hasOwnProperty('isMain') && currentSlide.isMain === true) {
                    // Sideways movement.
                    if (dest === 'right' && currentSlide.el.hasClass('has-sub')) {
                        if (!subPageNavigation.slide) {
                            $('html')
                                .animate({
                                    scrollTop: currentSlide.start + 'px'
                                }, opts.verticalPageFlipSpeed)
                                .promise()
                                .then(function(){
                                   subPageNavigation.start(currentSlide.el, i);
                                });
                        } else {
                            subPageNavigation.toNext();
                        }
                        break;
                    }
                    
                    else if (dest === 'left' && currentSlide.el.hasClass('has-sub')) {
                        if (subPageNavigation.slide) subPageNavigation.toPrev();
                        break;
                    }  
                    
                    // ESC sub pages.
                    else if (dest === 'esc' && currentSlide.el.hasClass('has-sub')) {
                        subPageNavigation.esc();
                        break;
                    }
                    
                    else {
                        break;
                    }
                }
            }  
        }
        
        // Navigate sub pages.
        var subPageNavigation = {
            slide: null,
            slideIdx: null,
            subPages: null,
            parentSlideOffset: 0,
            currentSubPage: 0,
            scrollTop: 0,
            
            start: function(el, slideIdx) {
                var self = this;
                
                self.slide = el;
                self.slideIdx = slideIdx
                self.parentSlideOffset = slidePositions[slideIdx].start;
                slidePositions[slideIdx].open = true;
                self.subPages = $('.sub-page', self.slide);
                
                opts.onSubPageOpen.call();
                
                $('body').height(opts.wrapperHeight);
                $(window).scrollTop(0);
                
                // Call the first slide.
                self.toNext();
            },
            
            end: function() {
                var self = this;
                slidePositions[self.slideIdx].open = false;
                
                // Reset for next time.
                self.slide = null;
                self.slideIdx = null;
                self.subPages = null;
                self.currentSubPage = 0;
                scrollTop = self.parentSlideOffset;
                
                opts.onSubPageClose.call();
                
                setBodyHeight();
                
                $('body, html')  
                    .animate({
                        scrollTop: self.parentSlideOffset + 'px'
                    }, 1)
                    .promise()
                    .then(function() {
                         $(window).scrollTop(self.parentSlideOffset);
                         self.parentSlideOffset = 0;
                    });
            },
            
            toNext: function(callback) {
                var self = this;
                
                if (!self.subPages) return;
                if (callback) callback();
                if (self.currentSubPage + 1 <= self.subPages.length) {
                    self.currentSubPage++;
                    
                    $('html, body')
                        .animate({
                            scrollTop: 0
                        }, opts.verticalPageFlipSpeed / 3)
                        .promise()
                        .then(function() {
                            self.subPages
                                .eq(self.currentSubPage - 1)
                                .animate({
                                    left: 0
                                }, opts.horizontalPageFlipSpeed);
                        });
                }  
            },
            
            toPrev: function() {
                var self = this;
                
                if (!self.subPages.length) return;
                
                self.currentSubPage--; 

                if (self.currentSubPage >= 0) {
                    $('html, body')
                        .animate({
                            scrollTop: 0
                        }, opts.verticalPageFlipSpeed / 3)
                        .promise()
                        .then(function() {
                            self.subPages
                                .eq(self.currentSubPage)
                                .animate({
                                    left: '100%'
                                }, opts.horizontalPageFlipSpeed);
                                
                                // If we are out again, end the sub page navigation.
                                if (self.currentSubPage === 0) self.end();
                        });
                }
            },
            
            esc: function() {
                var self = this;
                
                var animateOut = function() {                    
                    self.subPages
                        .eq(self.currentSubPage)
                        .animate({
                            left: '100%'
                        }, 300)
                        .promise()
                        .then(function() {
                            self.currentSubPage--;
                            if (self.currentSubPage < 0) {
                                self.end();
                                return;
                            }
                            animateOut();
                        });
                }
                
                if (!self.subPages.length) return;
                
                if (self.currentSubPage < 0) {
                    self.end();
                    return;
                } else {
                    animateOut();
                }
            }
        }
        
        // Calculate and set the body height.
        var setBodyHeight = function() {
            var leftOver = ($(window).height() - opts.wrapperHeight > 0) ? $(window).height() - opts.wrapperHeight : 0;
            $('body').height(slidesHeight + leftOver);
        }
    
        var render = function() {
            var top          = 0,
                nextSlideIdx = false,
                currentSlide = null,
                addClass     = '',
                removeClass  = '',
                nextSlide    = null;
            
            // Check if sub page navigation is active
            // and return if so.
            if (subPageNavigation.slide && subPageNavigation.currentSubPage >= 0) {
                subPageNavigation.slide.css({top: -subPageNavigation.scrollTop + 'px'});
                return;
            }
            
            for (var i = 0; i < slidePositions.length; i++) {
                currentSlide = slidePositions[i];
                addClass     = '';
                removeClass  = '';
                nextSlide    = (slidePositions[i+1]) ? slidePositions[i+1] : null;
                                    
                // Current slide should be scrolled.
                if (currentSlide.start <= scrollTop && currentSlide.end >= scrollTop) {
                    top = currentSlide.start - scrollTop;
                    currentSlide.visible = true;
                    currentSlide.isMain = true;
                    nextSlideIdx = i+1;
                    removeClass = 'above below';
                    
                    // Make underlying slide visible.
                    if (nextSlide) nextSlide.visible = true;
                    
                    if ((currentSlide.end - 300) < scrollTop) {
                        currentSlide.isMain = false;
                        nextSlide.isMain = true;
                    }
                } 
                
                // Current slide is above the viewport.
                else if (currentSlide.end <= scrollTop) {
                    top = -(currentSlide.end - currentSlide.start) - opts.outOfViewOffset;
                    currentSlide.visible = false;
                    currentSlide.isMain = false;
                    addClass = 'above';
                    removeClass = 'below';
                } 
                
                // Current slide should be in its original position.
                else if (currentSlide.start >= scrollTop) {
                    top = 0;
                    if (i !== nextSlideIdx) {
                        currentSlide.visible = false;
                        addClass = 'below';
                        removeClass = 'above';
                    }              
                }
                
                currentSlide.el
                    .css({'margin-top': top + 'px'})
                    .addClass(addClass)
                    .removeClass(removeClass);
                
                if (currentSlide.visible === true)  {
                    currentSlide.el.addClass('visible');
                } else {
                    currentSlide.el.removeClass('visible');
                }
            }
        }
        
        $(opts.toSubBtn, elem).on('click', function(e) {
            var slide = $(this).closest(opts.slideSelector);
            var idx = slides.index(slide);
            
            $('html, body')
                .animate({
                    scrollTop: slidePositions[idx].start + 'px'
                }, opts.verticalPageFlipSpeed)
                .promise()
                .then(function() {
                    subPageNavigation.start(slide, idx);
                });
            e.preventDefault();
        });
        
        $(opts.toNextSubBtn, elem).on('click', function(e) {
            subPageNavigation.toNext();
            e.preventDefault();
        });
        
        $(opts.toPrevSubBtn, elem).on('click', function(e) {
            subPageNavigation.toPrev();
            e.preventDefault();
        });
        
        $(opts.closeAllSubs, elem).on('click', function(e) {
            subPageNavigation.esc();
            e.preventDefault();
        });
        
        $(opts.controlsContainer, elem).find(opts.controlsElement).on('click', function(e) {
            var idx = $(opts.controlsContainer, elem)
                        .find(opts.controlsElement)
                        .index($(this));
        
            if (slidePositions[idx]) {
                $('html, body')
                    .animate({
                        scrollTop: (slidePositions[idx].start + slidePositions[idx].scrollOffset) + 'px'
                    }, opts.verticalPageFlipSpeed);
            }
            e.preventDefault();
        });
                
        $(window).on('keyup', function(e) {
            var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
            
            switch(key) {
                case 38: // Up
                    moveOnKey('up');
                    break;
                    
                case 40: // Down
                    moveOnKey('down');
                    break;
                    
                case 39: // Right
                    moveOnKey('right');
                    break;
                    
                case 37: // Left
                    moveOnKey('left');
                    break;
                    
                case 27: // ESC
                    moveOnKey('esc');
                    break;
                    
                default:
                    // Do nothing.
            }
        });
        
        $(window).on('scroll', function() {
            scrollTop = $(this).scrollTop();
            scrollTop = (scrollTop > 0) ? scrollTop : 0;
            if (subPageNavigation.slide) subPageNavigation.scrollTop = scrollTop;
        });
        
        $(window).on('resize', setBodyHeight);
        
        // Shim for request animations frame.
        window.requestAnimFrame = (function() {
            return  window.requestAnimationFrame || 
            window.webkitRequestAnimationFrame || 
            window.mozRequestAnimationFrame ||
            
            function(callback) {
                window.setTimeout(callback, 1000 / 60);
            };
        })();
        
        // Initialize our setup.
        var init = (function() {
            setBodyHeight();
            $('html, body').scrollTop(0);
        })();
        
        // Start animation loop.
        (function animloop(){
            requestAnimFrame(animloop);
            render();
        })();
        
        return this;
    };
})(jQuery);