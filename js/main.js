(function($) {
    $(document).ready(function() {
	dataString = {'ival': $('#ival').val() ,'page': window.location.href };
    
			$.ajax({
			type: "POST",
			url: "process.php",   //url: "",
			data: dataString,
			dataType: "json",
				success: function(data) {
					
				}			
          
        	});  
// Transition Effects
        $(".in-effect-left").css("-webkit-transition", "3s");
        $(".in-effect-left").css("-moz-transition", "3s");
        $(".in-effect-left").css("-ms-transition", "3s");
        $(".in-effect-left").css("transition", "3s");
        $(".in-effect-left").css("left", "0");

        $(".in-effect-right").css("-webkit-transition", "3s");
        $(".in-effect-right").css("-moz-transition", "3s");
        $(".in-effect-right").css("-ms-transition", "3s");
        $(".in-effect-right").css("transition", "3s");
        $(".in-effect-right").css("right", "0");


        $.expr[":"].onScreen = function(elem) {
            var $window = $(window);
            var viewport_top = $window.scrollTop();
            var viewport_height = $window.height();
            var viewport_bottom = viewport_top + viewport_height;
            var $elem = $(elem);
            var top = $elem.offset().top;
            var height = $elem.height();
            var bottom = top + height;

            return (top >= viewport_top && top < viewport_bottom) ||
                    (bottom > viewport_top && bottom <= viewport_bottom) ||
                    (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom);
        }

        setInterval(function() {
            $(".sc_in")                             // 
                    .addClass('sc_in_active') // give them a red background
        }, 1000);

// Check Url

        var loc = window.location.href;
        var output = loc.split('/').pop().split('.').shift();

        if ((output === '') || (output === 'index')) {
            $('.navbar-inverse #topMenu li a').each(function() {
                $(this).removeClass('active');
            });
            $('#home a').addClass('active');

        } else {
            $('.navbar-inverse #topMenu li a').each(function() {
                $(this).removeClass('active');
            });

            $('#' + output + ' a').addClass('active');
        }
// End Transition Effects --

        $(document).on("scroll", onScroll);

        //smoothscroll
//        $('a[href^="#"]').on('click', function(e) {
//            e.preventDefault();
//            $(document).off("scroll");
//
//            $('a').each(function() {
//                $(this).removeClass('active');
//            });
//            $(this).addClass('active');
//
//            var target = this.hash,
//                    menu = target;
//            $target = $(target);
//            $('html, body').stop().animate({
//                'scrollTop': $target.offset().top + 2
//            }, 500, 'swing', function() {
//                window.location.hash = target;
//                $(document).on("scroll", onScroll);
//            });
//        });

        // Hover effects
        $('#liProjects ul > li').hover(
                function() {
                    // $(this).css('opacity', '.4');                    
                    $(this).append($('<div class="spanBg"><a href="#"><span class="glyphicon glyphicon-link last"><a></span></div>'));
                    //$('.spanBg').css('height', $('#liProjects ul > li img').height());
                    //$('.spanBg').css('width', $('#liProjects ul > li img').width());
                }, function() {
            //$(this).css('opacity', '1');
            $('#liProjects ul > li .last').remove();
            $('#liProjects ul > li .spanBg').remove();
        });
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('#topMenu a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#topMenu ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else {
                currLink.removeClass("active");
            }
        });
    }

}(jQuery));

// Data Show
function showData(toShow, toHide, tabActive, tabChange) {
    $(tabChange).css('background-color', 'rgba(66, 73, 84,.8)');
    $(tabActive).css('background-color', 'rgba(66, 73, 84,1)');

    $(toHide).css('display', 'none');
    $(toShow).css('display', 'inline');
}





