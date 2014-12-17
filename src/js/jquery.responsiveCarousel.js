// responsiveCarousel
// a responsive designed carousel 
// version 1.1, July 5th, 2013
//
/*the following styles are needed on the page for the slides to display properly
	.carousel-container{
	display:block;
	overflow:hidden;

	.carousel_slides{ 
	height:100%;	
	position:relative;
	}

	.slide{
	display:block;
	height:100%;
	float:left;
	}
*/
//

;(function($) {
    $.fn.responsiveCarousel = function(options) {

        var defaults = $.extend( {
			slideContainerId: '#carousel_slides',
			slideClass:'.slide',
			carouselFrameId: '#carousel',
			carouselButtons: '#carousel_buttons',
			frameRatio: 2.35,
			speed: 7000,	//rotation speed and timer defaults 1000 = 1sec
			delay: 30000,//time in ms to restart autoscroll after a click
			autostart: true,
			debug: true
         }, options);
		
		//debug to console
		// use a less common namespace than just 'log'
		function myLog(msg){
			if(defaults.debug){
				// attempt to send a message to the console
				try	{
					console.log(msg);
				}
				// fail gracefully if it does not exist
				catch(e){}
			}
		}//end myLog			

		return this.each(function() {
			var currentPosition = 0;//index of surrent slide
			
			function trackPosition(index){
				myLog("trackPositionIndex: " + index);
				myLog("currentPosition: " + currentPosition);
				if(index === currentPosition){
					return;
				}else if (index > currentPosition){
					if(index-currentPosition > 1){
						moveForward(defaults.slideContainerId,defaults.slideClass,100);
					}else{
						moveForward(defaults.slideContainerId,defaults.slideClass);
					}
					return;	
				}else if(index < currentPosition){
					if(index-currentPosition < -1){
						moveBackward(defaults.slideContainerId,defaults.slideClass,100);
					}else{
						moveBackward(defaults.slideContainerId,defaults.slideClass);
					}
				}else{
					return;	
				}
			}
			
			function slideSizer(slideContainerId,slideClass){
				//the slide is built with a container '#carousel_slides' and any number of div class="slide" in the container
				//this function is for setting the two variables when we add slides, individual slide size, and carousel_slides size (like a horizontal slide strip)
				var slide_count = $(slideClass).length;//find the num or slides from passed css class
				var strip_width = slide_count * 100 +'%'; //calculate the total width of the slide strip
				var slide_width = 100/slide_count +'%'; //calculate the slide width% based on its parent size
				$(slideContainerId).css('width',strip_width); //set the width of the slide strip
				$(slideClass).css('width',slide_width);// reset the slide size
			}//end function slideSizer

			//go forward a slide	
			function moveForward(slideContainerId,slideClass,animateSspeed) {
				if(!animateSspeed){animateSspeed = 650;}//if not defined by call, set to 650
				var item_width = $(slideContainerId + ' ' + slideClass).outerWidth(); //get slideStrip length
				var left_value = item_width * (-1); //negate value
				//get the right position
				var left_indent = parseInt($(slideContainerId).css('left')) - item_width;
				//slide the item
				$(slideContainerId).animate({'left' : left_indent}, animateSspeed, 'swing', function () {
					//move the first item and put it as last item
					$(slideContainerId + ' ' + slideClass + ':last').after($(slideContainerId + ' ' + slideClass + ':first'));                  
					$(slideContainerId).css({'left' : left_value});//set the default item to correct position
				});
				if(currentPosition === $(slideClass).length-1 ){//check length and go to beginning aka 0
					currentPosition = 0;
				}else{
					currentPosition = currentPosition+1;}
			}  //end moveforward function   

			//go backward one slide
			function moveBackward(slideContainerId,slideClass,animateSspeed) {
				if(!animateSspeed){animateSspeed = 650;}//if not defined by call, set to 650
				var item_width = $(slideContainerId + ' ' + slideClass).outerWidth(); //get slideStrip length
				var left_value = item_width * (-1); //negate value
					//get the right position            
					var left_indent = parseInt($(slideContainerId).css('left')) + item_width;
					//slide the item            
					$(slideContainerId).animate({'left' : left_indent}, animateSspeed, 'swing',function(){    
						//move the last item and put it as first item               
						$(slideContainerId + ' ' + slideClass + ':first').before($(slideContainerId + ' ' + slideClass + ':last'));           
						$(slideContainerId).css({'left' : left_value});//set the default item to correct position
					});
				currentPosition = currentPosition-1;//set the index				
			}  //end movebackward function   
		
			function setupSlideStrip(slideContainerId,slideClass){
				var item_width = $(slideContainerId + ' ' + slideClass).outerWidth(); //get slideStrip length
				var left_value = item_width * (-1); //negate value
				//move the last item before first item, just in case user clicks prev button
				$(slideContainerId + ' ' + slideClass +':first').before($(slideContainerId + ' ' + slideClass + ':last'));
				$(slideContainerId).css({'left' : left_value});//set the default item to the correct position
			 
				//if user clicked on next button
				$('#next').unbind();
				$('#next').click(function(){
					moveForward(slideContainerId,slideClass);
					return false;
				});
				//if user clicked on prev button
				$('#prev').unbind();
				$('#prev').click(function(){
					moveBackward(slideContainerId,slideClass);
					return false;
				});

				//give each control button a unique index id, this is used in the .delegate to control the nav  
				$(defaults.carouselButtons+" a").each(function(index, element){
					$(this).attr("id",index);
				});
			}//end setupSlideStrip
								
			function returnHeight(carouselFrameId,frameRatio){
				//this function resetys the height of the slideshow frame 
				$this = $(carouselFrameId); //store element for easy access
				var h = $this.height(); //get id height
				var w = $this.width(); //get id width
				//set height to match width
				h = w/frameRatio; 
				$this.css('height',h+'px'); //assign calculated height		
				return;
			}//end function returnHeight
			
		//call the functions on window resize to reset the ratio of the slide container
			$(window).resize(function(){
				defaults.autostart = false; //turn autostart off
				returnHeight(defaults.carouselFrameId,defaults.frameRatio); //pass the target id and the width to reset height ratio
				slideSizer(defaults.slideContainerId,defaults.slideClass);  // resize the slide strip 
				if(this.resizeTO) clearTimeout(this.resizeTO);
					this.resizeTO = setTimeout(function() {
						setupSlideStrip(defaults.slideContainerId,defaults.slideClass); //unbind and bind the .slide size to the next and prev buttons
						currentPosition = currentPosition-1;//reset position
						$(defaults.carouselButtons+" a").removeClass("selected");//reset the button styles
						$(defaults.carouselButtons+" a#"+ currentPosition).addClass("selected");//reset the button styles
						defaults.autostart = true;//turn back on
						myLog("resize event | currentPosition:"+currentPosition);
					}, 200);

			});
			
			//auto scroll the slides, need to build a stop
			function autoStart(speed){
				//if (defaults.autostart){
					var count = speed/1000;
					var counter = setInterval(clickNext,1000);//run every second
					
					function clickNext(){
						count = count-1;
						myLog('count = '+ count);//debug
						if (count<=0){
							clearInterval(counter);
							if (defaults.autostart){
								$(defaults.carouselButtons+" a").removeClass("selected");//if auto, remove selected class
								moveForward(defaults.slideContainerId,defaults.slideClass);
								myLog('moveForward called. slideIndex: '+currentPosition);//debug
								$(defaults.carouselButtons+" a#"+currentPosition).addClass("selected");//if auto add selected class to button
							}
							autoStart(defaults.speed);
							return;
						}
					}
				//}
			}//end autoStart
			
			function goToSlide(slideIndex){
				while(parseInt(slideIndex) !== parseInt(currentPosition)){
					trackPosition(slideIndex);	
				}
			}
						
			//create a listener for a mousedown on buttons, and cancel the autostart for set period of time
			$(defaults.carouselButtons).on('mousedown','a', function(){
				defaults.autostart = false;
				$this = $(this);
				myLog('stop the auto');//debug
				setTimeout(function(){
					defaults.autostart = true;
					myLog('restart the autoscroll');//debug
					},defaults.delay);//restart the autoscroll after some time
				$(defaults.carouselButtons+" a").removeClass("selected");
				$this.addClass("selected");
				var slideIndex = $this.attr("id");
				goToSlide(slideIndex);
			});
		
		//call onload functions here
			returnHeight(defaults.carouselFrameId,defaults.frameRatio); 
			slideSizer(defaults.slideContainerId,defaults.slideClass);
			setupSlideStrip(defaults.slideContainerId,defaults.slideClass);
			if (defaults.autostart){
				autoStart(defaults.speed);
			}
			
		});
    };
})(jQuery);