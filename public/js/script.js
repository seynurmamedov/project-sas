$( document ).ready(function() {
//Sticky navbar

let sticky = navbar.offsetTop;
$(window).scroll(function(){
  if (window.pageYOffset >= sticky) {
    $(".navbar").addClass('sticky')
  }
   else {
    $(".navbar").removeClass("sticky");
  }

//back to top button

  if(window.pageYOffset>200){
    $(".back-to-top").fadeIn()
  }
  else{
    $(".back-to-top").fadeOut()
  }
 
});

$(".back-to-top").click(function(){
  $('html, body').animate({scrollTop: 0},500);
    return false;

})


//Navbar table-size animation

$(".nav-btn-anim").click(function(){
  var navcount =  $(".nav-top").position().left;
  if(navcount==0){
    $(".nav-top").animate({"left":"-275px"},function(){
      $(".nav-top").css({ "width":"275px"})
      $(".nav-btn-anim").html("<i class='fas fa-bars fa-lg'></i>")
    })
  }
  else{
      $(".nav-top").css({ "width":"275px"})
      $(".nav-btn-anim").animate({ "left":"275px"},function(){
        $(".nav-btn-anim").html("<i class='fas fa-times fa-lg'></i>")
      })
      $(".nav-top").animate({"left":"0"})
  }
})

//Search animation desktop

$(".search-button").click(function(){
  if($('.pop-up-search').is(':visible')==true){
    $(".pop-up-search").animate({"top":"-360px","opacity":"0"},250,function(){
      $(".pop-up-search").hide();
    });
  }
  else{
    $(".pop-up-search").show()
    $(".pop-up-search").animate({"top":0,"opacity":"1"},250,function(){ 
    });
  } 
})

$("#close-pop-up-search-btn").click(function(){
  $(".pop-up-search").animate({"top":"-360px","opacity":"0"},250,function(){
    $(".pop-up-search").hide()
  })
})


//Pop-up animation desktop
$(".pop-up-show-hide").click(function(){
var dataPopUp=$(this).data('pop-up')
  if(!$("."+dataPopUp).is(':visible')==true){
    $(".pop-ups > div").fadeOut();
    $("."+dataPopUp).fadeIn();
    $("body").css({"position":"fixed"});
  }
  
  else {
    $("."+dataPopUp).fadeOut();
    $("body").css({"position":""});
  }
})

//Feature Products 
$(".items-home-page-size > span").click(function(){
  $(this).siblings('span').css({"background-color":"rgb(223, 223, 223)","color":"black"});
  $(this).css({"background-color":"red","color":"white"});
  $(this).siblings('.size-data').data('size',$(this).data('size'));
})

$(".items-home-page-color > span").click(function(){
  $(this).siblings('span').css({"border-color":"rgb(223, 223, 223)"});
  $(this).css({"border-color":"#fb5c42"});
  $(this).siblings('.color-data').data('color',$(this).data('color'));
})


$(".sort-by >button").click(function(){
  $(".sort-selected").html($(this).children("p").html());
})

//slider
if($('.slider-for').is(':visible')==true){
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: '.slider-nav',
    fade: true,
    nextArrow: '<i class="fas fa-2x fa-chevron-right  next-arrow "></i>',
    prevArrow: '<i class="fas fa-2x fa-chevron-left  prev-arrow "></i>',
  });
  $('.slider-nav').slick({
    speed: 500,
    asNavFor: '.slider-for',
    autoplay: true,
    arrows: true,
    autoplaySpeed: 4000,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    pauseOnHover: false,
    swipe: true,
    touchMove: true,
    vertical: true,
    verticalScrolling: true,
    useTransform: true,
    nextArrow: '<i class="fas fa-lg fa-chevron-down mt-2 my-link"></i>',
    prevArrow: '<i class="fas fa-lg fa-chevron-up mb-2 my-link"></i>',
  });
  $(".slick-dupe").each(function(index,el) {
    $(".slider-nav").slick('slickAdd', "<div>" + el.innerHTML + "</div>");
    $(".slider-for").slick('slickAdd', "<div>" + el.innerHTML + "</div>");
  })
}
//input
$(document).on('click', '.number-spinner button', function () {    
		oldValue = $(this).closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if ($(this).attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
  } 
  else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
    }
    else {
			newVal = 1;
		}
	}
	$(this).closest('.number-spinner').find('input').val(newVal);
});

//product-page
$(".dri-items").click(function(){
  $(".dri-items").css({"color":"black"})
  $(this).css({ "color":"#fb5c42"})
  var dataDRI=$(this).data('dri')
  $(".DRI > div").css({"display":"none"})
  $('.'+dataDRI).css({"display":"block"})
})

})