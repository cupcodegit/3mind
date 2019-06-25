$(document).ready(function () {
     /*var cookie = localStorage.getItem('aceito');
    if (cookie === null) {
        $('#modal_cookie').addClass('active');
        }
        
    $("#btn_modalCookie").click( function(){
        localStorage.setItem('cookie', 'aceito');
    })*/


    fnMontaBlocos("_menu.html", "header");


    fnMontaBlocos("_footer.html", "#footer");



    var txtOn = "Estamos Online! Envie uma mensagem";
    var txtOff = "Em breve um especialista estará lhe respondendo.";
    var horaIni = "8:00";
    var horaFim = "18:00";
    var nomeImg = "logo-wpp.jpg";
    var numeroWhatsapp = "5545999684217";
    var nomeEscritorio = "Bogo Advocacia";

    fnContatoWhatsapp(txtOn, txtOff, horaIni, horaFim, nomeImg, numeroWhatsapp, nomeEscritorio);

    function gt3_sticky_header () {
		if (jQuery(window).width() > 1200) {
			var stickyNumber = jQuery('header.main_header').height();
			var stickyHeader = jQuery('header.main_header > .sticky_header');
			var docScroll = jQuery(document).scrollTop();
			var docScrollNext = jQuery(document).scrollTop();
			if (stickyHeader.length) {
				var stickyType = stickyHeader.attr('data-sticky-type');
				if (stickyHeader[0].hasAttribute('data-sticky-number')) {
					stickyNumber = stickyHeader.attr('data-sticky-number');
				}
				var stickyOn = function(){
					docScroll = jQuery(document).scrollTop();
					if (stickyType === 'classic') {
						if (docScroll < stickyNumber) {
							stickyHeader.removeClass('sticky_on')
						}else{
							stickyHeader.addClass('sticky_on')
						}
					}else{
						if (( docScrollNext < docScroll) || (docScroll < stickyNumber) ) {
							stickyHeader.removeClass('sticky_on')
						}else{
							stickyHeader.addClass('sticky_on')
						}				
					}	
					docScrollNext = jQuery(document).scrollTop();		
				}
				stickyOn();
				jQuery(window).scroll(function() {
					stickyOn();
				});
			}
		}
	}

    function gt3_mobile_menu(){
		var windowW = jQuery(window)
		var loaded = false;
		var main_menu = jQuery('.mobile_menu_container .main-menu > ul');
		var sub_menu = jQuery('.mobile_menu_container .main-menu > ul ul');
		var mobile_toggle = jQuery('.mobile-navigation-toggle');
		if (windowW.width() <= 1200) {
			sub_menu.hide().removeClass('showsub')
			main_menu.hide().addClass('mobile_view_on');
			loaded = true;
			gt3_mobile_menu_switcher(main_menu)		
		}else{
			sub_menu.show();
			main_menu.show();
		}

		jQuery(window).resize(function() {
			if (windowW.width() <= 1200) {
				if (!mobile_toggle.hasClass('is-active')) {
					sub_menu.hide().removeClass('showsub')
					main_menu.hide().removeClass('showsub').addClass('mobile_view_on');
					mobile_toggle.removeClass('is-active')
				}
				if (loaded === false) {
					loaded = true;
					gt3_mobile_menu_switcher(main_menu)
				}		
			}else{
				sub_menu.show().removeClass('showsub');
				main_menu.show().removeClass('showsub').removeClass('mobile_view_on');
				mobile_toggle.removeClass('is-active')
			}
		});
	}
	function gt3_mobile_menu_switcher(main_menu){
		if (jQuery(main_menu).find('.menu-item-has-children > .mobile_sitcher').length === 0) {
			jQuery(main_menu).find('.menu-item-has-children').append('<div class="mobile_sitcher"></div>')
		}
		jQuery('.mobile-navigation-toggle').on("tap click", function() {
			var element = jQuery(this);
			if (element.hasClass('is-active')) {
				main_menu.removeClass('showsub').slideUp(200)
				element.removeClass('is-active')
			}else{
				main_menu.addClass('showsub').slideDown(200)
				element.addClass('is-active')
			}
		});
		jQuery('.mobile_sitcher').on("click", function(e) {
			e.preventDefault();
			var element = jQuery(this);
			if (element.hasClass('is-active')) {
				element.prev('ul.sub-menu').removeClass('showsub').slideUp(200)
				element.next('ul.sub-menu').removeClass('showsub').slideUp(200)
				element.removeClass('is-active')
			} else{
				element.prev('ul.sub-menu').addClass('showsub').slideDown(200)
				element.next('ul.sub-menu').addClass('showsub').slideDown(200)
				element.addClass('is-active')
			}
		});
	}



    function gt3_menu_line() {
        var menu = jQuery('.main-menu.main_menu_container.menu_line_enable > ul');
        if (menu.length) {
            menu.each(function () {
                var menu = jQuery(this);
                var current = '';
                menu.append('<span class="menu_item_line"></span>');
                var menu_item = menu.find('> .menu-item');
                var currentItem = menu.find('> .current-menu-item');
                var currentItemParent = menu.find('> .current-menu-ancestor');
                var line = menu.find('.menu_item_line');
                if (currentItem.length || currentItemParent.length) {
                    current = currentItem.length ? currentItem : (currentItemParent.length ? currentItemParent : '');
                    line.css({
                        width: current.find('>a').outerWidth()
                    });
                    line.css({
                        left: current.find('>a').offset().left - menu.offset().left
                    });
                }
                menu_item.mouseenter(function () {
                    line.css({
                        width: jQuery(this).find('> a').outerWidth()
                    });
                    line.css({
                        left: jQuery(this).find('> a').offset().left - jQuery(this).parent().offset().left
                    });
                });
                menu.mouseleave(function () {
                    if (current.length) {
                        line.css({
                            width: current.find('> a').outerWidth()
                        });
                        line.css({
                            left: current.find('> a').offset().left - menu.offset().left
                        });
                    } else {
                        line.css({
                            width: '0'
                        });
                        line.css({
                            left: '100%'
                        });
                    }
                });
            })
        }
    }

    setTimeout(function () {
        gt3_menu_line();
        gt3_mobile_menu();
        gt3_mobile_menu_switcher();
        gt3_sticky_header ()
    }, 2000)

})