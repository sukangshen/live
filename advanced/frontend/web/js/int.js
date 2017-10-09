$(function() {
	$('#footer .nav ul li:last').css('background','none');
	$('#goTop').show();
	$('#goTop').scrollFollow({offset:380});
	$('#goTop').click(function(){
		$('html,body').animate({scrollTop: '0px'}, 600);
		return false;
	});
	goTop();
	$('.reg input,.login input').focus(function(){
		$(this).addClass('hover');							   
	})
	$('.reg input,.login input').blur(function(){
		$(this).removeClass('hover');							   
	})
	
	$('.subNav li:last').css('background','none')
	$('.orderList table tbody tr:odd').css('background','#f9f3df')
	//initNavList();
	
	$('#online').scrollFollow({offset:200});
	ao=setInterval('AutoScroll(".scroll")',5000);
	
	setInterval('AutoScrollB(".gouMain .itemA .list")',4000);
	setInterval('AutoScrollB(".indexLeft .itemB .hot")',3000);
	
	$('.scroll li').hover(function(){
		$(this).find('strong').addClass('hover');						
	},function(){
		$(this).find('strong').removeClass('hover');							
	});
	$('#cate a.prev').click(function(){
		clearInterval(ao);
		prev(".scroll");
		return false;								   
	});
	$('#cate a.next').click(function(){
		clearInterval(ao);
		next(".scroll");
		return false;								   
	});
	$('.gouList .itemB ul li:last').css('background','none');
	$('.yuMain .itemC .cate li a.a1').click(function(){
		$('.yuMain .itemC').css('background','url(images/yu_bg9.jpg)');
		$('.yuMain .itemC #listB').hide();
		$('.yuMain .itemC #listA').show();
		$('.yuMain .itemC #listC').hide();
		$('.yuMain .itemC #listD').hide();
		return false;
	});
	$('.yuMain .itemC .cate li a.a2').click(function(){
		$('.yuMain .itemC').css('background','url(images/yu_bg10.jpg)');
		$('.yuMain .itemC #listA').hide();
		$('.yuMain .itemC #listB').show();
		$('.yuMain .itemC #listC').hide();
		$('.yuMain .itemC #listD').hide();
		return false;
	});
	$('.yuMain .itemC .cate li a.a3').click(function(){
		$('.yuMain .itemC').css('background','url(images/yu_bg11.jpg)');
		$('.yuMain .itemC #listA').hide();
		$('.yuMain .itemC #listB').hide();
		$('.yuMain .itemC #listC').show();
		$('.yuMain .itemC #listD').hide();
		return false;
	});
	$('.yuMain .itemC .cate li a.a4').click(function(){
		$('.yuMain .itemC').css('background','url(images/yu_bg12.jpg)');
		$('.yuMain .itemC #listA').hide();
		$('.yuMain .itemC #listB').hide();
		$('.yuMain .itemC #listC').hide();
		$('.yuMain .itemC #listD').show();
		return false;
	});
	
	$('.indexLeft .re h3').click(function(){
		if($(this).parent().find('div').is(":visible")==false){
			$(".indexLeft .re .item").each(function(i){ 
				if($(this).find('div').is(":visible")==true){
					$(this).find('div').slideUp(300);
					$(this).find('h3').removeClass('on');
				}
			}); 
			$(this).parent().find('div').slideDown(300);
			$(this).parent().find('h3').addClass('on');
		}
	})
	$('.indexLeft .itemC .s1 strong').click(function(){
		$('.indexLeft .itemC .s1').animate({left: '0px'}, 300);
		$('.indexLeft .itemC .s2').animate({left: '467px'}, 300);
		$('.indexLeft .itemC .s3').animate({left: '532px'}, 300);
		$('.indexLeft .itemC .s4').animate({left: '597px'}, 300);
		$('.indexLeft .itemC .s5').animate({left: '662px'}, 300);
	});
	$('.indexLeft .itemC .s2 strong').click(function(){
		$('.indexLeft .itemC .s1').animate({left: '0px'}, 300);
		$('.indexLeft .itemC .s2').animate({left: '65px'}, 300);
		$('.indexLeft .itemC .s3').animate({left: '532px'}, 300);
		$('.indexLeft .itemC .s4').animate({left: '597px'}, 300);
		$('.indexLeft .itemC .s5').animate({left: '662px'}, 300);
	});
	$('.indexLeft .itemC .s3 strong').click(function(){
		$('.indexLeft .itemC .s1').animate({left: '0px'}, 300);
		$('.indexLeft .itemC .s2').animate({left: '65px'}, 300);
		$('.indexLeft .itemC .s3').animate({left: '130px'}, 300);
		$('.indexLeft .itemC .s4').animate({left: '597px'}, 300);
		$('.indexLeft .itemC .s5').animate({left: '662px'}, 300);
	});
	$('.indexLeft .itemC .s4 strong').click(function(){
		$('.indexLeft .itemC .s1').animate({left: '0px'}, 300);
		$('.indexLeft .itemC .s2').animate({left: '65px'}, 300);
		$('.indexLeft .itemC .s3').animate({left: '130px'}, 300);
		$('.indexLeft .itemC .s4').animate({left: '195px'}, 300);
		$('.indexLeft .itemC .s5').animate({left: '662px'}, 300);
	});
	$('.indexLeft .itemC .s5 strong').click(function(){
		$('.indexLeft .itemC .s1').animate({left: '0px'}, 300);
		$('.indexLeft .itemC .s2').animate({left: '65px'}, 300);
		$('.indexLeft .itemC .s3').animate({left: '130px'}, 300);
		$('.indexLeft .itemC .s4').animate({left: '195px'}, 300);
		$('.indexLeft .itemC .s5').animate({left: '260px'}, 300);
	});
})
$(window).resize(function(){
	goTop();
})
function goTop(){
	if($('body').width()>980){
		$('#goTop').css("left",980+($('body').width()-980)/2+"px");
	}else{
		$('#goTop').css("left",$('body').width()-36+"px");
		$('#goTop').hide();
	}
}
function AutoScroll(obj){ 
	$(obj).find("ul:first").animate({ 
		marginLeft:"-226px" 
	},600,function(){ 
		$(this).css({marginLeft:"0px"}).find("li:first").appendTo(this); 
	}); 
}
function prev(obj){ 
	$(obj).find("ul:first").animate({ 
		marginLeft:"-226px" 
	},600,function(){ 
		$(this).css({marginLeft:"0px"}).find("li:first").appendTo(this); 
	}); 
}
function next(obj){ 
	$(obj).find("ul:first").animate({ 
		marginLeft:"226px" 
	},500,function(){ 
		$(this).css({marginLeft:"0px"}).prepend($(this).find("li:last")); 
	}); 
}
function AutoScrollB(obj){
	$(obj).find("ul:first").animate({ 
		marginTop:"-17px"
	},500,function(){ 
		$(this).css({marginTop:"0px"}).find("li:first").appendTo(this); 
	}); 
}
function initNavList()
{	
	var item=$("#nav ul li");
	item.each(function(){
		this.lightTag="div";
		var that=$(this);
		var div=$(document.createElement("div"));
		div.html(that.html());
		that.append(div).hover(toggleLight,toggleLight);
	})
}
function toggleLight(){
    if (!this.cover) {
        this.cover = $(this.lightTag, this).css({opacity:0});
		this.speed1=this.speed1||400;
		this.speed2=this.speed2||200;
		if($.browser.msie && $.browser.version=="6.0")
		{
			this.speed1=this.speed2=1;
		}
    }
    if (this.onLight) {
        this.cover.stop(true).fadeTo(this.speed1, 0);
        this.onLight = false;
    }
    else {
        this.cover.stop(true).fadeTo(this.speed2, 1);
        this.onLight = true;
    }
}
