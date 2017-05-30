'use strict';

var hellopreloader = document.getElementById("hellopreloader_preload");

function fadeOutnojquery(el){

	el.style.opacity = 1;
	var interhellopreloader = setInterval(function(){

	el.style.opacity = el.style.opacity - 0.05;
	if (el.style.opacity <=0.05){ 
		clearInterval(interhellopreloader);
		hellopreloader.style.display = "none";}
	},16);
}
window.onload = function(){
	setTimeout(function(){
		fadeOutnojquery(hellopreloader);
	},1000);
};


$(function() {

	/* - - - - - - - - - - - - - - - - - **
	*
	*	responsive navigation
	*
	/* - - - - - - - - - - - - - - - - - */

	function Navigation() {

		var self = this;
		this.nav = $('.navigation');
		this.navBtn = $('#js-nav-btn');
		this.body = $('body');
		this.navLink = $('.nav_link');
		

		this.open_ = function() {

			self.nav.addClass('active-nav');
			$('body').append('<div class="body-shadow">');
		}

		this.hide_ = function(event) {

			$('.body-shadow').remove();
			self.nav.removeClass('active-nav');
			
		}

		this.clickNav_ = function() {

			self.nav.removeClass("active-nav");
			$('.body-shadow').remove();
		}

		this.events_ = function() {

			$('body').on('click', '.body-shadow', this.hide_);
			this.navBtn.on('click', this.open_);
			this.navLink.on('click', this.clickNav_);
		}

		this.init_ = function() {

			this.events_();
		}

		this.init_();
	}

	var openNav = new Navigation();


	/* - - - - - - - - - - - - - - - - - **
	*
	*	fixed nav
	*
	/* - - - - - - - - - - - - - - - - - */

	$(window).scroll(function() {


		var beforeHeaderBlock = $('.before_header_block').innerHeight();
		var headerHeight = $('.top_header').innerHeight();

		if( $(window).scrollTop() >= beforeHeaderBlock ) {

			$('.top_header').css({

				'position': 'fixed',
				'top': 0,
				'left': 0
			});
			$('.before_header_block').css({

				'marginTop': headerHeight
			})
		} else {

			$('.top_header').css({

				'position': 'static'
			});
			$('.before_header_block').css({

				'marginTop': 0
			})
		}
	});




	/* - - - - - - - - - - - - - - - - - **
	*
	*	moved parallax
	*
	/* - - - - - - - - - - - - - - - - - */



	function MovedParallax() {

		var self = this;
		this.w = $(window).width();
		this.h = $(window).height();

		this.event_ = function() {


			$(window).on('mousemove', function(e) {
        
        
				var offsetX = 0.5 - e.pageX / self.w;
				var offsetY = 0.5 - e.pageY / self.h;

				$(".js-moved-parallax").each(function(i, el) {
					var offset = parseInt($(el).data('offset'), 10);
					var translate = "translate3d(" + Math.round(offsetX * offset) + "px," + Math.round(offsetY * offset) + "px, 0px)";

					$(el).css({
						'-webkit-transform': translate,
						'transform': translate,
						'moz-transform': translate
					});
				});
    		});
		}

		this.init_ = function () {

			this.event_();	
		}

		this.init_();

	}

	var activeMovedParallax = new MovedParallax();


	/* - - - - - - - - - - - - - - - - - **
	*
	*	social hover's
	*
	/* - - - - - - - - - - - - - - - - - */



	$('.social_item').mouseenter(function () {

		animate($(this));
	});


	function animate(elem) {

		var $parent = elem.find('.social_hover');
		if( !$parent.hasClass('current') ) {
			var effect = $parent.data("effect");
			if(!effect || elem.hasClass(effect)) return false;
			$parent.addClass('animated ' + effect);
			setTimeout( function(){
				$parent.removeClass(effect);
			}, 500); 
		}
	}



	/* - - - - - - - - - - - - - - - - - **
	*
	*	progress bar's
	*
	/* - - - - - - - - - - - - - - - - - */


	var self = this;

	self.w = $(window);
	self.wh = self.w.height();
	
	self.w.on('scroll',function(){

		self.wScroll = self.w.scrollTop();
		
		$('.skillbar').each(function(){

			var $this = $(this),
				offset = $this.offset().top,
				value = $this.data('value'),
				proc = value /100;

			if(self.wScroll+self.wh/1.5 > offset && !$this.hasClass('animated')){

				$(this).find('.skillbar-bar').animate({
					width:$(this).attr('data-percent')
				},2000);
				
				$(this).find('.skill-bar-percent').animate({
					left: $(this).attr('data-percent')
				}, 2000)

				$this.addClass('animated');
			}

		});
	});





	/* - - - - - - - - - - - - - - - - - **
	*
	*	education tab`s
	*
	/* - - - - - - - - - - - - - - - - - */



	$('.education-tab').not(':first-child').hide('fast');


	function Tabs() {


		var self = this;
		this.link = $('.education_tab_link');
		this.tab = $('.education-tab');
		

		this.responsiveModel_ = function() {

		
			if( $(window).width() < '992' ) {

				for( var i = 0; i < $('.education-tab').length; i++ ) {
					
					for ( var j = 0; j < $('.education_tab_item').length; j++ ) {

						if( i == j ) {

							$('.education_tab_item')[j].append($('.education-tab')[i]);
						}
					}
				}
			} else {
				
				$('.education_right').append($('.education-tab'));
			}
		}

		this.tabAnchor_ = function(e) {

			var anchor = $(this).attr('href');

			e.preventDefault();
			self.link.parent().removeClass('active-education');
			$(this).parent().addClass('active-education');

			self.tab.removeClass('active-education-tab').hide('fast');

			$(anchor).addClass('active-education-tab').show('fast');

			
		}

		
		this.event_ = function () {

			this.link.on('click', this.tabAnchor_);
			$(window).bind('load resize', this.responsiveModel_);
			$(window).on('resize', this.responsiveModel_);

		}
		
		this.init_ = function() {

			this.event_();
		}

		this.init_();

	}

	var educationTabs = new Tabs();




	/* - - - - - - - - - - - - - - - - - **
	*
	*	sorting gallery
	*
	/* - - - - - - - - - - - - - - - - - */


	$('.gallery_tab_link').on('click', function(e) {

		e.preventDefault();

		var galleryCollection = $('#shuffle_container'),
			filter = $(this).data('filter');

		$('.gallery_tab_link').removeClass('current');
		$(this).addClass('current');
		galleryCollection.children().addClass('hide_gallery_item');


		$(filter).removeClass('hide_gallery_item');
		
	});


	/* - - - - - - - - - - - - - - - - - **
	*
	*	navigation
	*
	/* - - - - - - - - - - - - - - - - - */


	var Core = {

		DOMReady: function(){

			var self = this;

	

			self.navigation.init();

		},

		windowLoad: function(){

			var self = this;


		},

		/**
		**	Main navigation
		**/

		navigation: {

		    init: function () {

		    	var self = this;
		    	
		    	self.w = $(window);
		    	self.body = $('body');
		    	self.nav = $('#js-nav');
		    	self.section = $('.anchor-offset');
		    	self.sectionQt = self.section.length;

		    	self.anchorScroll();
		    	

		    	self.w.on('scroll',function(){

		    		self.pageScroll();

		    	});

		    

		    },

		    anchorScroll: function(){

		    	var self = this;

		    	self.nav.on('click', "a[href^='#']", function(event){

					
		    		event.preventDefault();

		    		var $this = $(this),
		    			item = $this.parent(),
		    			dataId = $this.attr('href'),
		    			offset = $(dataId).offset().top - 100;

				

		    			item.addClass('active-menu-underline-item').siblings().removeClass('active-menu-underline-item');
					
					

		    		self.scrollContent(offset);

		    	});

		    },

		    scrollContent: function(offset){

		    	var self = this;

		    	self.body.addClass('scrollContent');

		    	$('html,body').stop().animate({

					scrollTop: offset

		    	},1000,function(){

		    		self.body.removeClass('scrollContent');

		    	});

		    },

		    pageScroll: function(){

		    	var self = this;

		    	if(self.body.hasClass('scrollContent'))return;

		    	self.wScroll = self.w.scrollTop();
		    	self.wHeightHalf = self.w.height()/2;

		    	for (var i = 0; i <= self.sectionQt - 1; i++) {

		    		var offset = $(self.section[i]).offset().top,
		    			heightBox = $(self.section[i]).outerHeight(),
		    			bottomOffset = $(self.section[i+1]).length ? $(self.section[i+1]).offset().top : offset + heightBox,
		    			id = $(self.section[i]).attr('id'),
		    			activItem = $('.navigation').find("a[href='" + "#" + id + "']").parent();
		    		
		    		$('.navigation li').removeClass('active');
		    		$('.navigation_point li').removeClass('navigation_point_active');

		    		if(self.wScroll + self.wHeightHalf > offset && self.wScroll + self.wHeightHalf < bottomOffset ){
		    		
		    			setTimeout(function(){

		    			},1000)

					

		    				activItem.addClass('active-menu-underline-item').siblings().removeClass('active-menu-underline-item');
						
		    			return false;

		    		}
		    		
		    	};

		    },

		},

		
	}


	$(document).ready(function(){

		Core.DOMReady();

	});

	$(window).load(function(){

		Core.windowLoad();

	});


});