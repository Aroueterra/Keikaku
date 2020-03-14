/* JS Document */

/******************************
[Table of Contents]
1. Vars and Inits
2. Set Header
3. Init Search
4. Init Menu
5. Init Isotope
******************************/

$(document).ready(function()
{
	"use strict";

	/* 
	1. Vars and Inits
	*/

	var header = $('.header');


	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initSearch();
	initMenu();
	initIsotope();

	/* 
	2. Set Header
	*/

	function setHeader()
	{
		if($(window).scrollTop() > 100)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 
	3. Init Search
	*/

	function initSearch()
	{
		if($('.search').length && $('.search_panel').length)
		{
			var search = $('.search');
			var panel = $('.search_panel');

			search.on('click', function()
			{
				panel.toggleClass('active');
			});
		}
	}

	
	
	/* 
	5. Init Isotope
	*/

	function initIsotope()
	{
		var sortingButtons = $('.title_sort_btn');

		if($('.title_grid').length)
		{
			var grid = $('.title_grid').isotope({
				itemSelector: '.title-item',
				layoutMode: 'fitRows',
				fitRows:
				{
					gutter: 30
				},
	            getSortData:
	            {
	            	score: function(itemElement)
	            	{
	            		var score = $(itemElement).find('.product_price').text().replace( '$', '' );
	            		return parseFloat(score);
	            	},
	            	// name: '.product_name',
	            	name: function(itemElement)
	            	{
	            		var starsEle = $(itemElement).find('.title').text();
	            		// var stars = starsEle.attr("data-rating");
	            		return starsEle;
	            	}
	            },
	            animationOptions:
	            {
	                duration: 750,
	                easing: 'linear',
	                queue: false
	            }
	        });

	        // Sort based on the value from the sorting_type dropdown
	        sortingButtons.each(function()
	        {
	        	$(this).on('click', function()
	        	{
	        		var parent = $(this).parent().find('.sorting_text');
		        		parent.text($(this).text());
		        		var option = $(this).attr('data-isotope-option');
		        		option = JSON.parse( option );
	    				grid.isotope( option );
	        	});
	        });
		}
	}
});