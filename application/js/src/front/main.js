$(function() {
	var owl = $("#owl-demo");

	owl.owlCarousel({
		items : 5, //10 items above 1000px browser width
		itemsDesktop : [1000,5], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,3], // betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});

	// Custom Navigation Events
	$(".btn--next").click(function(){
		owl.trigger('owl.next');
	})
	$(".btn--prev").click(function(){
		owl.trigger('owl.prev');
	})

	$('#print-challenge').click(function(){
		var printIframe = $('<iframe name="print_frame" width="0" height="0" frameborder="0" style="display:none">');
		printIframe.appendTo($('body'));
		var styleCss = '<style>@page { size: auto; margin:0mm; } body { font-family:Arial, Helvetica, sans-serif; } .h3 { color:#1768b3; font-family:Arial, Helvetica, sans-serif; font-size: 30px; font-weight: normal; text-transform: uppercase; } .h4 { font-family:Arial, Helvetica, sans-serif; }</style>';
		window.frames["print_frame"].document.body.innerHTML = styleCss+$('#current-challenge')[0].outerHTML;
		window.frames["print_frame"].window.focus();
		window.frames["print_frame"].window.print();
		printIframe.remove();
	}); 
	
	/*submit form*/
	$(".submit-form").hide();
	$("#soumettre-propo").click(function(){
		$(".submit-form").slideToggle();
	})

	var menu = $('#main-header');
	menu.on("click", "#trigger-mobile-nav", function() {
		$('body').toggleClass("open");
	});

	$(".box-home li").mouseenter(function() {
		var _this = $(this);
		_this.addClass("hover");
		setTimeout(function() {
			_this.addClass("hover");
			_this.find('article .description').addClass("fade-in").css("position","relative");
		}, 250);
	});

	$('.box-home li').click(function() {
		var url = $(this).find('a').prop("href");
		document.location.href = url;
	});
	$(".datepicker input").datepicker();
});
