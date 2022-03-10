$(function(){
    $(window).on("scroll", function(){
       if($(window).scrollTop()){
           $('.info').fadeOut();
       }
       else{
           $('.info').fadeIn();
       }
    });
});