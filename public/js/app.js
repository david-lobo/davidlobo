

(function($) {

    // Page variables
    var portfolioPage = {
        selectors: {
            main_menu: '.home-menu',
            nav_section: '.nav-section'
        },
        defaultTimeout: 250,
        inviews: [],
        waypoints: {}
    }

    $(document).ready(function() {
        
        // Trigger events during scrolling
        initWaypoints();

        // Scroll to section
        initContentNavScroll();

        // Scollspy functionality
        initContentNavScrollEvent();

        // Modal Gallery for Work Section
        initDynamicGallery();
    });

    var initWaypoints = function() {
        var time = 0;
        $('.chart').each(function() {
            var chartId = $(this).attr('id');
            createWaypointForChart(chartId, time);
            time += 500;
        });

        createWaypointForGallery();
    }

    var initContentNavScroll = function() {
        $(portfolioPage.selectors.main_menu + ' a').click(function(event) {
            event.preventDefault();
            $(portfolioPage.selectors.main_menu + ' ul li').removeClass('is-active');
            $(this).parent().addClass('is-active');
            
            // Top menu height px
            var menuHeight = $(portfolioPage.selectors.main_menu).outerHeight();
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.substr(1) + ']');
            
            // Top margin px of the the target section
            var targetTopMargin = parseInt(target.css('margin-top').replace(/\D/g,''));
            
            // Y position of the target section
            var targetTopOffset = target.offset().top;

            // Account for fixed top menu
            var newYPos = targetTopOffset - menuHeight;

            // Account for target section top margin
            if (!isNaN(targetTopMargin)) {
                newYPos -= targetTopMargin; 
            }

            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: newYPos
                    //scrollTop: target.offset().top - (menuHeight + 16)
                }, 1000);
                return false;
            }
        });
    };

    var initContentNavScrollEvent = function() {
        $(portfolioPage.selectors.nav_section).each(function() {
            var inview = new Waypoint.Inview({
                element: this,
                entered: function(direction) {
                    setActiveItem(this.element.id);
                    //console.log('Entered triggered with direction ' + direction, this.element.id)
                },
                exit: function(direction) {
                    //console.log('Exit triggered with direction ' + direction, this.element.id)
                }
            });
            portfolioPage.inviews.push(inview);
        });
    }

    var initDynamicGallery = function() {
        $('.details-link a').on('click', function(e) {
            e.preventDefault();

            var galleryId = $(this).attr('data-gallery-id');
            var gallery = js_vars.galleries[galleryId];

            $(this).lightGallery({
                dynamic: true,
                dynamicEl: gallery,
                thumbnail: false,
                share: false
            })
        });
    }
    function triggerGallery() {
        $('.work-content .gallery-item').each(function(i, v) {
            $(v).addClass('fade-in');
        });
    }

    function triggerBarGraph(wrapper) {
        var values = [];

        // Get Values and save to Array
        $(wrapper + ' .bar').each(function(index, el) {
            values.push($(this).data('value'));
        });

        // Get Max Value From Array
        var max_value = Math.max.apply(Math, values);
        max_value = 100;

        // Set width of bar to percent of max value
        $(wrapper + ' .bar').each(function(index, el) {
            var bar = $(this),
                value = bar.data('value'),
                percent = Math.ceil((value / max_value) * 100);

            // Set Width & Add Class
            bar.width(percent + '%');
            bar.addClass('in');
        });
    }

    var createWaypointForGallery = function() {
        var galleryId = 'work-content';
        var waypoint = $('.' + 'work-content-trigger').waypoint({
            handler: function(direction) {
                triggerGallery();
                var removeWaypoints = portfolioPage.waypoints[galleryId];

                if (removeWaypoints) {
                    removeWaypoints[0].destroy();
                }
            },
            offset: '80%'
        })

        portfolioPage.waypoints[galleryId] = waypoint;
    }

    var createWaypointForChart = function(chartId, time) {
        var waypoint = $('#' + chartId).waypoint({
            handler: function(direction) {
                var elemId = this.element.id;
                setTimeout(function() {
                    triggerBarGraph('#' + elemId);
                } , time)
                
                var removeWaypoints = portfolioPage.waypoints[chartId];

                if (removeWaypoints) {
                    removeWaypoints[0].destroy();
                }
            },
            offset: 'bottom-in-view'
        })

        portfolioPage.waypoints[chartId] = waypoint;
    }

    var enableContentNavScrollEvent = function() {
        $.each(portfolioPage.inviews, function(index, object) {
            object.enable()
        });
    }

    var disableContentNavScrollEvent = function() {
        $.each(portfolioPage.inviews, function(index, object) {
            object.disable()
        });
    }

    var setActiveItem = function(itemId) {
        $(portfolioPage.selectors.main_menu + ' .is-active').removeClass('is-active');
        $(portfolioPage.selectors.main_menu + ' .' + itemId).addClass('is-active');
    }

})(jQuery); // Fully reference jQuery after this point.