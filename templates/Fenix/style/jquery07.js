// JavaScript Document

jQuery.fn.preloader = function(options){
	
	var defaults = {
		             delay:200,
					 preload_parent:"a",
					 check_timer:300,
					 ondone:function(){ },
					 oneachload:function(image){  },
					 fadein:500 
					};
	
	// variables declaration and precaching images and parent container
	 var options = jQuery.extend(defaults, options),
	 root = jQuery(this) , images = root.find("img").css({"visibility":"hidden",opacity:0}) ,  timer ,  counter = 0, i=0 , checkFlag = [] , delaySum = options.delay ,
	 
	 init = function(){
		
		timer = setInterval(function(){
			
			if(counter>=checkFlag.length)
			{
			clearInterval(timer);
			options.ondone();
			return;
			}
		
			for(i=0;i<images.length;i++)
			{
				if(images[i].complete==true)
				{
					if(checkFlag[i]==false)
					{
						checkFlag[i] = true;
						options.oneachload(images[i]);
						counter++;
						
						delaySum = delaySum + options.delay;
					}
					
					jQuery(images[i]).css("visibility","visible").delay(delaySum).animate({opacity:1},options.fadein,
					function(){ jQuery(this).parent().removeClass("preloader");   });
					
					
					
				 
				}
			}
		
			},options.check_timer) 
		 
		 
		 } ;
	
	images.each(function(){
		
		if(jQuery(this).parent(options.preload_parent).length==0)
		jQuery(this).wrap("<a class='preloader' />");
		else
		jQuery(this).parent().addClass("preloader");
		
		checkFlag[i++] = false;
		
		
		}); 
	images = jQuery.makeArray(images); 
	
	
	var icon = jQuery("<img />",{
		
		id : 'loadingicon' ,
		src : WP_Preloader.theme_path+'/images/preloader/89.gif'
		
		}).hide().appendTo("body");
	
	
	
	timer = setInterval(function(){
		
		if(icon[0].complete==true)
		{
			clearInterval(timer);
			init();
			 icon.remove();
			return;
		}
		
		},100);
	
	}