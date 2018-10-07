
		$(document).ready(function(){
			$('.icon').click(function () {
				$('.icon').toggleClass('active');
			})
		})

		$(function(){
			$('.toggle').click(function(){
			$('.layout').toggleClass('ativo');
			$('.menu-responsivo').toggleClass('ativo');
			$(this).toggleClass('ativo');
			});
			new WOW().init();
		});

		jQuery(window).scroll(function () {
        var top = jQuery(document).scrollTop();
        var height = 500;
        //alert(batas);

        if (top > height) {
            jQuery('.menuFixo').addClass('menuMudaCor');
        } else {
            jQuery('.menuFixo').removeClass('menuMudaCor');
        }
    });

		$(document).ready(function(){
    	$('.slider').slider();
    });

	$(".btn-menu").click(function(){
		$(".menu").show();
	});

	$(".btn-close").click(function(){
		$(".menu").hide();
	});

    //código usando jQuery
    $(document).ready(function() {
    $('.load').hide();
    });
