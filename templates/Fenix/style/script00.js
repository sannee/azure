
jQuery(document).ready(function($){
						 

			/*
			//Post Image Effect---------------------------------------->
			$(".post_img").hover(function(){
				var fade = $(this).children(".post_img_arrow");
				if (fade.is(':animated')) {
				  fade.stop().fadeTo(250, 1);
				} else {
				  fade.fadeIn(250);
				}
			}, function(){
				var fade = $(this).children(".post_img_arrow");
				if (fade.is(':animated')) {
				  fade.stop().fadeTo(1000, 0);
				} else {
				  fade.fadeOut(1000);
				}
			});    
			//--------------------------------------------------------<
			*/
			
			
			
			
			
			$('.jqueryslidemenu>ul>li').each(function(index) {
			

			
			    $(this).delay( index * 300 ).animate({
				    left: '0'
				  }, 800, function() {
				    // Animation complete.
				  });
				  
			});
			
			
			
			
			
			
			
			
			
		
			
			//Navigation Background Slider-------------->
			   $("#play-button").toggle(function () { 
				  $(this).addClass("pause");
				}, function () {
				  $(this).removeClass("pause");
				});
				
				$("#play-button").click(function(){
					api.playToggle();
				});
				
				 $("#jp-play_pause").toggle(function () { 
				  $(this).addClass("pause");
				  $("#jquery_jplayer_1").jPlayer("pause");
				}, function () {
				  $(this).removeClass("pause");
				  $("#jquery_jplayer_1").jPlayer("play");
				});
				
				$("#hide-button").toggle(function () { 
				  $(this).addClass("pause");
				  var $main = $("#main");
				  var $header = $("#header");
					var window_height = $(window).height();
					var header_height = $header.height();
					$main.animate({top: window_height - header_height, opacity: 0});
					$header.animate({top: - header_height, opacity: 0});
					$(this).addClass("btn_open");
			

				}, function () {
				  $(this).removeClass("pause");
				  	var $main = $("#main");
				  var $header = $("#header");
					var window_height = $(window).height();
					var header_height = $header.height();
					$main.animate({top:0, opacity: 1});
					$header.animate({top:'5%', opacity: 1});
					$(this).removeClass("btn_open");
				});
				
				
				
			//Thumbnails Tray---------------------------------------->
			
			
			$("#tray-button").toggle(function () { 
				var $main = $("#main");
				var window_height = $(window).height();
				var header_height = $("#header").height();
					$main.animate({top: window_height - header_height, opacity: 0});
				}, function () {
				  	var $main = $("#main");
					var window_height = $(window).height();
					var header_height = $("#header").height();
					$main.animate({top:0, opacity: 1});
				});
			//-------------------------------------------------------<
			
			/*
			//Read More Button---------------------------------------->
			var rm_links = $(".more-link")
			rm_links.each(function(index) {
				var rm_text = $(this).text();
				$(this).html("<b>"+rm_text+"</b><span></span>");
				
			  });
			rm_links.hover(function(){
				var b_slide = $(this).children("b");
				if ($(this).is(':animated')) {
				  $(this).stop().animate({width: 80});
				  b_slide.stop().animate({left: 5});
				} else {
				  $(this).animate({width: 80});
				  b_slide.animate({left: 5});
				}
			}, function(){
				var b_slide = $(this).children("b");
				if ($(this).is(':animated')) {
				  $(this).stop().animate({width: 10});
				  b_slide.stop().animate({left: -70});
				} else {
				  $(this).animate({width: 10});
				  b_slide.animate({left: -70});
				}
			});    
			//--------------------------------------------------------<
			*/
			
			
			//Home widget---------------------------------------->
			 $('#home_widget_btn').click(function() {
				var $lefty = $(this).parent();
				if($lefty.css('right') == "-290px"){
					$lefty.animate({right:0});
					$(this).addClass("btn_open");
				}else{
					$lefty.animate({right:-290});
					$(this).removeClass("btn_open");
				}
			  });
			  
			  
			  //Main widget---------------------------------------->
			  
			  
			 $('#main_btn').click(function() {
				var $main = $("#main");
				var window_height = $(window).height();
				var header_height = $("#header").height();
				if($main.css('top') == "0px"){
					$main.animate({top: window_height - header_height -90});
					$(this).addClass("btn_open");
				}else{
					$main.animate({top:0});
					$(this).removeClass("btn_open");
				}
			  });
			 
			 
			 
			//Lightbox
			$("a[rel^='prettyPhoto']").prettyPhoto({show_title: false, theme: 'dark_square'});
			
			//Gallery
			//If link to an Image do Prettyphoto
			attach = $(".gallery dl dt a").attr('href');
			comp = /attachment_id/;
			if(!comp.test(attach)){
			$(".gallery dl dt a").prettyPhoto({show_title: false, theme: 'dark_square'});
			}
			//Add class image-frame
			$(".gallery dl dt a").each(function(index) {
													$(this).attr('rel', 'prettyPhoto[pp_gal]')
													$(this).children("img").addClass("image-frame");
												});												
			
			//Tabs
			$("ul.tabs").tabs("div.panes > div");
			$(".accordion").tabs(".accordion div.pane", {tabs: 'h2', effect: 'slide', initialIndex: null});
			
			//Hide (Collapse) the toggle containers on load
			$(".toggle_container").hide(); 
		
			//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
			$("h3.trigger").click(function(){
				$(this).children("a").toggleClass("active").parent().next().slideToggle("slow");
				return false; //Prevent the browser jump to the link anchor
			});
			
			
			//Quick Contact Form styling
			$(".quick_contact input").click(function(){
					$(this).next().fadeOut(100);
			});
			
			
			
			  
			//Sidebar Menu Function
			$('#sidebar .widget ul li ul').parent().addClass('hasChildren').children('a').append("<span />");
			var children;
			$("#sidebar .widget ul li").hoverIntent(
										  function () {
											children = $(this).children("ul");
											if($(children).length > 0){
													$(children).stop(true, true).slideDown('fast');	   
											}
										  }, 
										  function () {
											  $(this).children('ul').stop(true, true).slideUp(500);
										  }
			);
			//Footer Menu Function
			$('footer .widget ul li ul').parent().addClass('hasChildren').children('a').append("<span />");
			var children;
			$("footer .widget ul li").hoverIntent(
										  function () {
											children = $(this).children("ul");
											if($(children).length > 0){
													$(children).stop(true, true).slideDown('fast');	   
											}
										  }, 
										  function () {
											  $(this).children('ul').stop(true, true).slideUp(500);
										  }
			);	
			
			//Make Slider Image clickeables even with Patterns on top  			
			$("#supersized").click(function(){
					var attr_href = $(this).children(".activeslide").children("a").attr("href");
					if(attr_href){
						window.location.href = attr_href;
					}
			});	
			
												

});//Dom ready
function stringToBoolean(string){
        switch(string.toLowerCase()){
                case "true": case "yes": case "1": return true;
                case "false": case "no": case "0": case null: return false;
                default: return Boolean(string);
        }
}