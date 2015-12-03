jQuery(function($){
    var stmenu_down_timer;
    function megaHoverOver(){
        $(this).addClass('current');
        if($(this).find('.stmenu_sub').children().size())
        {
		    var stmenu_sub_dom = $(this).find(".stmenu_sub");
            stmenu_sub_dom.stop();
            stmenu_down_timer = setTimeout(function(){
                if(typeof(st_submemus_animation) !== 'undefined' && st_submemus_animation)
                    stmenu_sub_dom.slideDown('fast',function(){
        		      stmenu_sub_dom.css('overflow','visible');
        		    });
                else
                    stmenu_sub_dom.fadeIn('fast',function(){
                      stmenu_sub_dom.css('overflow','visible');
                    });
            },100);
        }
	}
    function megaHoverOut(){ 
        clearTimeout(stmenu_down_timer);
        $(this).removeClass('current');
        $(this).find(".stmenu_sub").stop().hide(); 
    }
    $(".sttlevel0").hoverIntent({    
		 sensitivity: 7, 
		 interval: 0, 
		 over: megaHoverOver,
		 timeout: 0,
		 out: megaHoverOut
	});
    $('.style_classic .sttlevel1 li').hover(function(){
        $(this).addClass('show');
    },
    function(){
        $(this).removeClass('show');
    });
    
    $('#stmobilemenu').staccordion();

    if(('ontouchstart' in document.documentElement))
    {
        $(".ma_level_0").click(function(e){
            var sttlevel0 = $(this).parent();
            if(sttlevel0.find('.stmenu_sub').children().size())
            {
                if(!sttlevel0.hasClass('menu_touched'))
                {
                    $(".sttlevel0").removeClass('menu_touched');
                    sttlevel0.addClass('menu_touched');
                    return false;
                }
                else
                    sttlevel0.removeClass('menu_touched');
            }
        });
    }
    $("#stmobilemenu_tri").click(function(){
        stSidebar('st_mobile_menu');
        return false;
    });
});