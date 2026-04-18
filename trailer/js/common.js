$(function () {
	$('a[href*=\\#]:not([href=\\#])').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
			if ($target.length) {
				if ($(this).parents('.menuBox').length) {
					setTimeout(function () {
						var targetOffset = $target.offset().top - $('#gHeader').height();
						$('html,body').animate({ scrollTop: targetOffset }, 1000);
					}, 100);
				} else {
					var targetOffset = $target.offset().top - $('#gHeader').height();
					$('html,body').animate({ scrollTop: targetOffset }, 1000);
				}
				return false;
			}
		}
	});

	$('#gNavi li:has(.subNavi)').hover(function () {
		$(this).children('.parent').addClass('on');
		$(this).find('.subNavi').stop().slideToggle(300);
	}, function () {
		$(this).children('.parent').removeClass('on');
		$(this).find('.subNavi').stop().slideToggle(300);
	});

	var state = false;
	var scrollpos;
	$('.menu').on('click', function () {
		if (state == false) {
			scrollpos = $(window).scrollTop();
			$('body').addClass('fixed').css({
				'top': -scrollpos
			});
			$('.menu').addClass('on');
			$('.menuBox').addClass('on').stop().slideDown(300);
			state = true;
		} else {
			$('body').removeClass('fixed').css({
				'top': 0
			});
			window.scrollTo(0, scrollpos);
			$('.menu').removeClass('on');
			$('.menuBox').removeClass('on').stop().slideUp(300);
			state = false;
		}
	});
	$('.menuBox .menuList li .dropBtn').click(function () {
		$(this).toggleClass('on').next().stop().slideToggle(300);
	});

	$(window).scroll(function () {
        var windowHeight = $(window).height(),
        topWindow = $(window).scrollTop();
        $('.fadeUp:visible').each(function(){
            var targetPosition = $(this).offset().top;
            if(topWindow > targetPosition - windowHeight + 100){
                $(this).addClass("is-fade");
            }
        });
		
		if ($(window).scrollTop() > 200) {
			$('.pageTop').fadeIn();
		} else {
			$('.pageTop').fadeOut();
		}
	}).trigger("scroll");
	
	if ($('.mailForm').length) {
		$('input[type="text"], input[type="tel"], input[type="email"], textarea').each(function () {
			if ($(this).val() != '') {
				$(this).css({
					'background-color': '#eed0d0',
					'box-shadow': 'inset 0 0 0 1000px #eed0d0'
				});
			} else {
				$(this).css('background-color', '#f5f5f5');
			}
		});
		$('input[type="text"], input[type="tel"], input[type="email"], textarea').focus(function () {
			$(this).css('background-color', '#f5f5f5');
		});
		$('input[type="text"], input[type="tel"], input[type="email"], textarea').blur(function () {
			if ($(this).val() != '') {
				$(this).css({
					'background-color': '#eed0d0',
					'box-shadow': 'inset 0 0 0 1000px #eed0d0'
				});
			} else {
				$(this).css('background-color', '#f5f5f5');
			}
		});
	}
});

$(window).on('load', function () {
	var localLink = window.location + '';
	if (localLink.indexOf("#") != -1) {
		localLink = localLink.slice(localLink.indexOf("#") + 1);
		$('html,body').animate({
			scrollTop: $('#' + localLink).offset().top
		}, 500);
	}
});
//___________８.headerロゴをスクロールすると大きさを変える	
$(function(){
  $(window).scroll(function(){
    var obj = $('.Header-Logo');
    scroll = $(window).scrollTop();
    if (scroll > 1) {
      obj.addClass('isSmall');
    } else{
      obj.removeClass('isSmall');
    }
  })
});