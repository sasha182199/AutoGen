$(document).ready(function(){
	$(".change_lan").click(function(){
		$(".change_lan").removeClass("active");
		$(this).addClass("active");
	});
		
	$(".menu_item").click(function(){
		if($(".menu_item .hide_show").hasClass("active")){
			$(".menu_item .hide_show").removeClass("active");
			$(".menu_item .hide_show").slideUp();
		}else{
			$(this).find(".hide_show").addClass("active").slideDown();
		}
		
	});
	$(".hamburger_menu").click(function(){
		$(".bottom_line_header").slideDown();
		$(".menu_mob_active").fadeIn().css("display","flex");
	});
	$(".menu_mob_active").click(function(){
		$(".bottom_line_header").slideUp();
		$(".menu_mob_active").fadeOut().css("display","none");
	});

	if(screen.width < 1025){
		$('.category_wrapper').slick({
  			  dots: true,
			  infinite: false,
			  speed: 300,
			  slidesToShow: 4,
			  slidesToScroll: 4,

			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});
	}
		
	
	
	
});